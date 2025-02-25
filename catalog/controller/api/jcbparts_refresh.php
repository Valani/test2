<?php
class ControllerApiJcbpartsRefresh extends Controller {
    private $cache_prefix = 'jcb_parts:';
    private $batch_size = 1000; // Optimal batch size for DB queries
    private $max_execution_time = 3600; // 1 hour
    
    public function __construct($registry) {
        parent::__construct($registry);
        // Increase execution time limit
        set_time_limit($this->max_execution_time);
        // Increase memory limit if needed
        ini_set('memory_limit', '512M');
    }

    public function index() {
        $this->load->model('catalog/jcbparts');
        $json = ['success' => false];
        
        try {
            // 1. Clear existing cache
            $this->model_catalog_jcbparts->clearCache();
            $this->log->write('Cache cleared successfully');
            
            // 2. Cache total products count
            $total_products = $this->model_catalog_jcbparts->getTotalProducts();
            $this->log->write('Total products to cache: ' . $total_products);
            
            // 3. Calculate pagination parameters
            $pages_50 = ceil($total_products / 50); // For frontend pagination
            $batches = ceil($total_products / $this->batch_size);
            
            $start_time = microtime(true);
            $processed = 0;
            
            // 4. Cache data in batches
            for ($batch = 0; $batch < $batches; $batch++) {
                $offset = $batch * $this->batch_size;
                $batch_start_time = microtime(true);
                
                // Get products for current batch
                $products = $this->model_catalog_jcbparts->getProductsBatch($offset, $this->batch_size);
                $batch_count = count($products);
                
                if ($batch_count > 0) {
                    // Cache the batch itself for potential bulk operations
                    $batch_key = $this->cache_prefix . 'batch:' . $offset . ':' . $this->batch_size;
                    $this->model_catalog_jcbparts->setCache($batch_key, $products);
                    
                    // Split batch into frontend page sizes (50 items per page)
                    for ($i = 0; $i < $batch_count; $i += 50) {
                        $page_products = array_slice($products, $i, 50);
                        $page_offset = $offset + $i;
                        $page_key = $this->cache_prefix . 'products:' . $page_offset . ':50';
                        $this->model_catalog_jcbparts->setCache($page_key, $page_products);
                    }
                    
                    $processed += $batch_count;
                    $batch_time = microtime(true) - $batch_start_time;
                    
                    // Log progress every 10 batches
                    if ($batch % 10 === 0) {
                        $progress = round(($processed / $total_products) * 100, 2);
                        $this->log->write(sprintf(
                            'Cached batch %d/%d (%d products, %.2f%%, %.2fs)',
                            $batch + 1, 
                            $batches,
                            $processed,
                            $progress,
                            $batch_time
                        ));
                    }
                }
            }
            
            $execution_time = microtime(true) - $start_time;
            
            $json = [
                'success' => true,
                'message' => sprintf(
                    'Successfully cached %d products in %.2f seconds',
                    $processed,
                    $execution_time
                ),
                'stats' => [
                    'total_products' => $total_products,
                    'processed_products' => $processed,
                    'total_batches' => $batches,
                    'frontend_pages' => $pages_50,
                    'execution_time' => $execution_time
                ]
            ];
            
            $this->log->write('Cache refresh completed: ' . json_encode($json));
            
        } catch (Exception $e) {
            $this->log->write('Cache refresh error: ' . $e->getMessage());
            $json = [
                'success' => false,
                'error' => $e->getMessage()
            ];
        }
        
        $this->response->addHeader('Content-Type: application/json');
        $this->response->setOutput(json_encode($json));
    }
}