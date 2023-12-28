<?php
session_start();
include_once '../vendor/autoload.php'; 
include_once '../router/Router.php';
include_once '../routes.php';

/*
if (!isset($_SESSION['user_token'])) {

    header("Location: /login");
    exit;
}
*/


if (isset($_GET['url'])) {
    $url = rtrim($_GET['url'], '/');
    $url = filter_var($url, FILTER_SANITIZE_URL);
} else {
    $url = '';
}


$router = new Router\Router($routes);
$router->route($url);
