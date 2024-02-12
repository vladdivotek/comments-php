<?php

function view($viewName)
{
    // Путь к файлу представления
    $filePath = __DIR__ . '/../views/' . $viewName . '.php';

    // Проверяем, существует ли файл представления
    if (file_exists($filePath)) {
        // Возвращаем содержимое файла представления
        ob_start();
        include($filePath);
        return ob_get_clean();
    } else {
        // Если файл представления не найден, выводим сообщение об ошибке
        return 'Error: View not found';
    }
}