<?php

use PHPRouter\RouteCollection;
use PHPRouter\Route;
require __DIR__ . '/vendor/autoload.php';

prePrintR(DS);

prePrintR(SERVER_PATH);

prePrintR(SERVER_URL);

prePrintR(PRODUCTION_MODE);

prePrintR(BASE_PATH);

prePrintR(BASE_URL);

$collection = new RouteCollection();

$collection->attachRoute(
    new Route(
        '/',
        array()
    )
);
