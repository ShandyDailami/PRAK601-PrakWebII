<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
	
$routes->get('/', 'Home::index',);

$routes->get('/admin/view', 'BukuController::index');
$routes->add('admin/create',  'BukuController::create');
$routes->add('/admin/view/(:num)/edit', 'BukuController::edit/$1');
$routes->get('/admin/view/(:num)/delete', 'BukuController::delete/$1');

$routes->group('register', function($routes){
    $routes->get('/', 'RegisterController::index');
    $routes->post('/', 'RegisterController::store');
});

$routes->group('login', 'Controllers\LoginController', ['filter' => 'redirectIfAuthenticated'], function ($routes) {
    $routes->get('/', 'LoginController::index');
    $routes->post('/', 'LoginController::login');
});


$routes->group('logout', function ($routes) {
    $routes->get('/', 'LogoutController::index');
});