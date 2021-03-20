<?php

require __DIR__ . '/vendor/autoload.php';

//https://forums.docker.com/t/app-container-cannot-access-mysql-container/6660/2

$connection = new PDO('mysql:host=mysql','root','12345678');
//$connection = new mysqli('mysql','root','12345678');
$db = (new \Server\MyDbModel($connection));
$controller = new \Server\MyController($db);
$router = new \Server\Router($controller);
$router->route($_SERVER['REQUEST_URI']);
