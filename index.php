<?php
// включим отображение всех ошибок
error_reporting (E_ALL); 

// подключаем конфиг
include ('config.php'); 

// Соединяемся с БД
$db = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASS);
$db->exec('SET CHARACTER SET utf8');

// подключаем ядро сайта
include ('application/index.php'); 

// Загружаем router
$router = new Router();
// задаем путь до папки контроллеров.
$router->setPath ('application/controllers');
// запускаем маршрутизатор
$router->start();