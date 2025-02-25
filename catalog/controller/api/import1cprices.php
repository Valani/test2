<?php
class ControllerApiImport1cPrices extends Controller {
    private $batch_size = 1000;

    public function index() {
        try {
            // Перевірка наявності файлу
            $file = '/home/ilweb/nawiteh.ua/prices/Prices.xml';
            if (!file_exists($file)) {
                $this->response->setOutput(json_encode(['status' => 'error', 'message' => 'Price file not found']));
                return;
            }

            $dw_feed_price_page = intval($this->config->get('dw_feed_price_page'));
            if ($dw_feed_price_page == 0) $dw_feed_price_page = 1;
            $per_page = 100000;

            // Завантаження XML з використанням libxml_use_internal_errors
            libxml_use_internal_errors(true);
            $feed = simplexml_load_string(file_get_contents($file));
            if (!$feed) {
                $this->response->setOutput(json_encode(['status' => 'error', 'message' => 'Invalid XML file']));
                return;
            }

            $total = COUNT($feed->DECLARHEAD->products->product);
            $start = ($dw_feed_price_page-1) * $per_page;
            $end = min(($dw_feed_price_page-1) * $per_page + $per_page, $total);

            // Масиви для пакетної обробки
            $regular_prices = [];
            $special_prices = [];
            $processed = 0;

            // Збір даних для пакетної обробки
            for ($i = $start; $i < $end; $i++) {
                $product = $feed->DECLARHEAD->products->product[$i];
                $product_code = strval($product['code']);
                $price_value = floatval(str_replace([' ',' ',','], ['','','.'], strval($product->pricevalue)));
                $price_type = strval($product->pricetype);

                if ($price_type == '000000001') {
                    $regular_prices[$product_code] = $price_value;
                } elseif ($price_type == '000000005') {
                    $special_prices[$product_code] = $price_value;
                }

                // Виконуємо пакетне оновлення при досягненні розміру пакету
                if (count($regular_prices) >= $this->batch_size) {
                    $this->updateRegularPrices($regular_prices);
                    $regular_prices = [];
                }
                if (count($special_prices) >= $this->batch_size) {
                    $this->updateSpecialPrices($special_prices);
                    $special_prices = [];
                }

                $processed++;
            }

            // Обробка залишків
            if (!empty($regular_prices)) {
                $this->updateRegularPrices($regular_prices);
            }
            if (!empty($special_prices)) {
                $this->updateSpecialPrices($special_prices);
            }

            $this->response->setOutput(json_encode([
                'status' => 'success',
                'processed' => $processed,
                'total' => $total,
                'page' => $dw_feed_price_page
            ]));

        } catch (Exception $e) {
            $this->response->setOutput(json_encode([
                'status' => 'error',
                'message' => $e->getMessage()
            ]));
        }
    }

    private function updateRegularPrices($prices) {
        if (empty($prices)) return;

        $product_codes = array_keys($prices);
        
        // Отримуємо всі product_id одним запитом
        $products_query = $this->db->query("
            SELECT product_id, id_1c 
            FROM " . DB_PREFIX . "product 
            WHERE id_1c IN ('" . implode("','", array_map([$this->db, 'escape'], $product_codes)) . "')
        ");

        if ($products_query->num_rows) {
            // Формуємо CASE для UPDATE
            $cases = [];
            foreach ($products_query->rows as $product) {
                if (isset($prices[$product['id_1c']])) {
                    $cases[] = "WHEN product_id = " . (int)$product['product_id'] . 
                              " THEN " . floatval($prices[$product['id_1c']]);
                }
            }

            if ($cases) {
                $this->db->query("
                    UPDATE " . DB_PREFIX . "product 
                    SET price = CASE " . implode(' ', $cases) . " END 
                    WHERE product_id IN (" . implode(',', array_column($products_query->rows, 'product_id')) . ")
                ");
            }
        }
    }

    private function updateSpecialPrices($prices) {
        if (empty($prices)) return;

        $product_codes = array_keys($prices);
        
        // Отримуємо всі product_id одним запитом
        $products_query = $this->db->query("
            SELECT product_id, id_1c 
            FROM " . DB_PREFIX . "product 
            WHERE id_1c IN ('" . implode("','", array_map([$this->db, 'escape'], $product_codes)) . "')
        ");

        if ($products_query->num_rows) {
            $product_ids = array_column($products_query->rows, 'product_id');
            
            // Видаляємо старі спеціальні ціни одним запитом
            if ($product_ids) {
                $this->db->query("
                    DELETE FROM " . DB_PREFIX . "product_special 
                    WHERE product_id IN (" . implode(',', $product_ids) . ")
                ");
            }

            // Формуємо масив значень для INSERT
            $values = [];
            foreach ($products_query->rows as $product) {
                if (isset($prices[$product['id_1c']])) {
                    $values[] = "(" . (int)$product['product_id'] . ", 2, " . 
                               floatval($prices[$product['id_1c']]) . ")";
                }
            }

            // Вставляємо нові спеціальні ціни одним запитом
            if ($values) {
                $this->db->query("
                    INSERT INTO " . DB_PREFIX . "product_special 
                    (product_id, customer_group_id, price) 
                    VALUES " . implode(',', $values)
                );
            }
        }
    }
}