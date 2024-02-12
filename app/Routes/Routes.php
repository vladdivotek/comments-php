<?php

use FastRoute\RouteCollector;

// Создание объекта маршрутизатора
$router = \FastRoute\simpleDispatcher(function(RouteCollector $router) {
    // Определение маршрутов
    $router->addRoute('GET', '/comments/create', ['App\Controllers\CommentController', 'create']);
    $router->addRoute('POST', '/comments/store', ['App\Controllers\CommentController', 'store']);
    // Другие маршруты вашего приложения
});
