<?php
namespace App\Core;

class View
{
    public static function render(string $view, array $data = []): string
    {
        $viewPath = __DIR__ . '/../Views/' . $view . '.php';
        if (!file_exists($viewPath)) {
            return 'Görünüm bulunamadı: ' . htmlspecialchars($view);
        }

        extract($data, EXTR_SKIP);
        ob_start();
        include $viewPath;
        return ob_get_clean();
    }
}
