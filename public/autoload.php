<?php

spl_autoload_register(function ($class) {
    // Префикс пространства имен вашего приложения
    $prefix = 'App\\';

    // Базовая директория для пространств имен в вашем проекте
    $base_dir = __DIR__ . '/../app/';

    // Сначала проверяем, что класс использует префикс пространства имен вашего приложения
    $len = strlen($prefix);
    if (strncmp($prefix, $class, $len) !== 0) {
        // Если нет, переходим к следующему зарегистрированному автозагрузчику
        return;
    }

    // Получаем относительное имя класса
    $relative_class = substr($class, $len);

    // Формируем имя файла, заменяя пространства имен на соответствующие директории
    $file = $base_dir . str_replace('\\', '/', $relative_class) . '.php';

    // Если файл существует, подключаем его
    if (file_exists($file)) {
        require $file;
    }
});