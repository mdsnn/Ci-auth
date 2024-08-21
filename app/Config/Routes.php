<?php

use App\Controllers\SignnController;
use App\Controllers\SignupController;
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
//$routes->get('/', 'Home::index');
$routes->get('/', 'SignupController::index');
$routes->get('/signup', 'SignupController::index');
$routes->match(['get', 'post'], 'SignupController/store', 'SignupController::store');
$routes->match(['get', 'post'], 'SigninController/loginAuth', 'SigninController::loginAuth');
$routes->get('/signin', 'SigninController::index');
$routes->get('/logout', 'SigninController::logout');
$routes->get('/dashboard', 'Dashboard::index',['filter' => 'authGuard']);
