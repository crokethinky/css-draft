<?php

include_once __DIR__ . '/app/Router.php';
include_once __DIR__ . '/app/Controller.php';

$path = filter_input(INPUT_GET, 'p');
$path = (isset($path)) ? $path : 'home';

$router = new Router();
$router->loadPage($path);