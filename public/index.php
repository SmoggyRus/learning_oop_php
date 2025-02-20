<?php
include __DIR__ . '/../functions.php';

// 1. Настроить север, чтобы все запросы шли автоматически на страницу\файл index.php
// 2. var-dump $_SERVER
// Router | Маршрутизатор

$routes = [
    "/" => 'functions/homepage.php',
    "/about" => 'functions/about.php',
];

$route = $_SERVER['REQUEST_URI'];

if(array_key_exists($route, $routes))
{
    include $routes[$route];exit;
}else{
    echo "404 Not Found | Страница не найдена";
}


