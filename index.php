<?php

use PHPRouter\RouteCollection;
use PHPRouter\Route;
use PHPRouter\Router;
require __DIR__ . '/vendor/autoload.php';



$collection = new RouteCollection();

$collection->attachRoute(
    new Route(
        '/',
        array(
            '_controller' => 'app\controllers\HomeController::goHome',
            'methods' => 'GET',
            'name' => 'home'
        )
    )
);

$router = new Router($collection);
$router->setBasePath('/');

$route = $router->matchCurrentRequest();
if ($route) {
    return true;
}

prePrintR(DS);

prePrintR(SERVER_PATH);

prePrintR(SERVER_URL);

prePrintR(PRODUCTION_MODE);

prePrintR(BASE_PATH);

prePrintR(BASE_URL);
