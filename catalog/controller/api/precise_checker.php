<?php
// catalog/controller/api/precise_checker.php

class ControllerApiPreciseChecker extends Controller {
    private $log_file;
    private $corrupt_images = array();
    private $processed_directories = array();
    private $grey_color = 0x808080;  // Сірий колір який шукаємо

    public function __construct($registry) {
        parent::__construct($registry);
        $this->log_file = DIR_LOGS . 'precise_checker.log';
        set_time_limit(0);
        ini_set('memory_limit', '256M');
    }

    public function check() {
        $directory = isset($this->request->get['directory']) ? 
            $this->request->get['directory'] : '';

        $full_path = DIR_IMAGE . $directory;
        
        try {
            $this->checkDirectory($full_path);
            
            $result = array(
                'success' => true,
                'corrupt_files' => $this->corrupt_images,
                'total_corrupt' => count($this->corrupt_images),
                'message' => 'Check completed successfully'
            );

            // Зберігаємо список з деталями
            $corrupted_log = DIR_LOGS . 'grey_stripe_images.log';
            file_put_contents($corrupted_log, implode("\n", $this->corrupt_images));
            
        } catch (Exception $e) {
            $result = array(
                'success' => false,
                'error' => $e->getMessage()
            );
        }

        $this->response->addHeader('Content-Type: application/json');
        $this->response->setOutput(json_encode($result));
    }

    private function checkImage($fullPath) {
        try {
            $image = imagecreatefromjpeg($fullPath);
            $width = imagesx($image);
            $height = imagesy($image);
            
            // Перевіряємо останні 20 рядків пікселів
            $stripeHeight = 0;
            $greyPixelsInRow = 0;
            
            // Йдемо знизу вгору
            for ($y = $height - 1; $y >= max(0, $height - 20); $y--) {
                $greyPixelsInRow = 0;
                
                // Перевіряємо кожен 10-й піксель в рядку для швидкості
                for ($x = 0; $x < $width; $x += 10) {
                    $color = imagecolorat($image, $x, $y);
                    $rgb = imagecolorsforindex($image, $color);
                    
                    // Перевіряємо чи колір близький до #808080
                    if (abs($rgb['red'] - 128) <= 2 && 
                        abs($rgb['green'] - 128) <= 2 && 
                        abs($rgb['blue'] - 128) <= 2) {
                        $greyPixelsInRow++;
                    }
                }
                
                // Якщо більше 80% пікселів в рядку сірі
                if ($greyPixelsInRow > (($width/10) * 0.8)) {
                    $stripeHeight++;
                } else {
                    // Якщо знайшли не сірий рядок і вже маємо якусь смугу,
                    // значить це кінець сірої смуги
                    if ($stripeHeight > 0) {
                        break;
                    }
                }
            }
            
            imagedestroy($image);
            
            // Якщо знайшли сіру смугу будь-якої висоти
            if ($stripeHeight > 0) {
                $relativePath = str_replace(DIR_IMAGE, '', $fullPath);
                $details = sprintf(
                    "%s\tШирина: %d\tВисота: %d\tВисота смуги: %d пікселів", 
                    $relativePath, 
                    $width, 
                    $height, 
                    $stripeHeight
                );
                $this->corrupt_images[] = $details;
                $this->log("Знайдено сіру смугу: " . $details);
            }

        } catch (Exception $e) {
            $this->log("Помилка при перевірці {$fullPath}: " . $e->getMessage());
        }
    }

    private function checkDirectory($directory) {
        if (!file_exists($directory)) {
            throw new Exception('Directory not found: ' . $directory);
        }

        if (in_array($directory, $this->processed_directories)) {
            return;
        }

        $this->processed_directories[] = $directory;
        $items = scandir($directory);
        
        foreach ($items as $item) {
            if ($item == '.' || $item == '..') continue;
            
            $fullPath = $directory . '/' . $item;
            
            if (is_dir($fullPath)) {
                $this->checkDirectory($fullPath);
            } elseif (is_file($fullPath) && $this->isImage($item)) {
                $this->checkImage($fullPath);
            }
        }
    }

    private function log($message) {
        $time = date('Y-m-d H:i:s');
        $log_message = "[$time] $message\n";
        file_put_contents($this->log_file, $log_message, FILE_APPEND);
    }

    private function isImage($filename) {
        return preg_match('/\.(jpg|jpeg)$/i', $filename);
    }
}