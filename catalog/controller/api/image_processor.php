<?php
// catalog/controller/api/image_processor.php

class ControllerApiImageProcessor extends Controller {
    private $processed_files = 0;
    private $skipped_files = 0;
    private $start_time = null;
    private $processed_directories = array();
    private $log_file;

    public function __construct($registry) {
        parent::__construct($registry);
        
        // Шлях до лог файлу в OpenCart
        $this->log_file = DIR_LOGS . 'image_processor.log';
        
        // Прибираємо ліміт часу виконання
        set_time_limit(0);
        // Збільшуємо ліміт пам'яті
        ini_set('memory_limit', '256M');
    }

    public function process() {
        $this->start_time = time();
        $this->log("Початок роботи скрипта");

        // Отримуємо параметр directory
        $directory = isset($this->request->get['directory']) ? 
            $this->request->get['directory'] : '';

        // Формуємо повний шлях
        $full_path = DIR_IMAGE . $directory;
        
        $this->log("Повний шлях: " . $full_path);

        try {
            $this->processDirectory($full_path);
            
            $total_time = time() - $this->start_time;
            $hours = floor($total_time / 3600);
            $minutes = floor(($total_time % 3600) / 60);
            $seconds = $total_time % 60;
            
            $result = array(
                'success' => true,
                'processed' => $this->processed_files,
                'skipped' => $this->skipped_files,
                'time' => sprintf('%02d:%02d:%02d', $hours, $minutes, $seconds),
                'message' => 'Processing completed successfully'
            );
            
            $this->log("Завершено обробку. Оброблено: {$this->processed_files}, Пропущено: {$this->skipped_files}, Час: {$result['time']}");
            
        } catch (Exception $e) {
            $this->log("ПОМИЛКА: " . $e->getMessage());
            $result = array(
                'success' => false,
                'error' => $e->getMessage()
            );
        }

        $this->response->addHeader('Content-Type: application/json');
        $this->response->setOutput(json_encode($result));
    }

    private function log($message) {
        $time = date('Y-m-d H:i:s');
        $log_message = "[$time] $message\n";
        file_put_contents($this->log_file, $log_message, FILE_APPEND);
    }

    private function processDirectory($directory) {
        if (!file_exists($directory)) {
            throw new Exception('Directory not found: ' . $directory);
        }

        if (in_array($directory, $this->processed_directories)) {
            return;
        }

        $this->processed_directories[] = $directory;
        $this->log("Обробка директорії: $directory");
        
        $items = scandir($directory);
        
        foreach ($items as $item) {
            if ($item == '.' || $item == '..') continue;
            
            $fullPath = $directory . '/' . $item;
            
            if (is_dir($fullPath)) {
                $this->processDirectory($fullPath);
                
                // Перевірка на пусту директорію
                $files = scandir($fullPath);
                if (count($files) <= 2) {
                    rmdir($fullPath);
                    $this->log("Видалено пусту директорію: $fullPath");
                }
            } elseif (is_file($fullPath) && $this->isImage($item)) {
                $this->processImage($fullPath, $item);
                
                // Логуємо кожні 100 файлів
                if (($this->processed_files + $this->skipped_files) % 100 == 0) {
                    $this->log("Прогрес: оброблено {$this->processed_files}, пропущено {$this->skipped_files}");
                }
            }
        }
    }

    private function processImage($fullPath, $filename) {
        try {
            // Перевірка розміру файлу
            $fileSize = filesize($fullPath) / 1024; // KB
            if ($fileSize < 800) {
                $this->skipped_files++;
                $this->log("Пропущено $filename (розмір: {$fileSize}KB)");
                return;
            }

            // Завантаження зображення
            list($width, $height) = getimagesize($fullPath);
            
            if ($width <= 1920 && $height <= 1920) {
                $this->skipped_files++;
                $this->log("Пропущено $filename (розміри: {$width}x{$height})");
                return;
            }

            // Розрахунок нового розміру
            $ratio = min(1920 / $width, 1920 / $height);
            $newWidth = (int)($width * $ratio);
            $newHeight = (int)($height * $ratio);

            $this->log("Обробка $filename: зміна розміру з {$width}x{$height} на {$newWidth}x{$newHeight}");

            // Створення нового зображення
            $sourceImage = imagecreatefromjpeg($fullPath);
            $newImage = imagecreatetruecolor($newWidth, $newHeight);
            
            // Зменшення з використанням найкращої якості
            imagecopyresampled(
                $newImage, 
                $sourceImage, 
                0, 0, 0, 0, 
                $newWidth, $newHeight, 
                $width, $height
            );

            // Збереження з якістю 90
            imagejpeg($newImage, $fullPath, 90);
            
            // Очищення пам'яті
            imagedestroy($sourceImage);
            imagedestroy($newImage);

            $this->processed_files++;
            $this->log("Успішно оброблено: $filename");

        } catch (Exception $e) {
            $this->log("ПОМИЛКА при обробці $filename: " . $e->getMessage());
            throw $e;
        }
    }

    private function isImage($filename) {
        return preg_match('/\.(jpg|jpeg)$/i', $filename);
    }
}