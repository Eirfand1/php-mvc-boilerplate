<?php

use App\Controllers\HomeController;
use App\Router;

$router = new Router();

$router->get('/', HomeController::class, 'index');
$router->get('/admin', HomeController::class,'AdminIndex');


$router->dispatch();