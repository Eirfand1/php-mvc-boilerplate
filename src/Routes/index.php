<?php

use App\Controllers\HomeController;
use App\Controllers\MahasiswaController;
use App\Router;

$router = new Router();

$router->get('/', HomeController::class, 'index');
$router->get('/admin', HomeController::class,'AdminIndex');
$router->get('/admin/mahasiswa', MahasiswaController::class, 'index');
$router->post('/admin/mahasiswa', MahasiswaController::class, 'store');
$router->get('/admin/deletemahasiswa/{id}', MahasiswaController::class, 'delete');
$router->get('/admin/editmahasiswa/{id}', MahasiswaController::class, 'editshow');
$router->post('/admin/editmahasiswa/{id}', MahasiswaController::class, 'edit');

$router->dispatch();
