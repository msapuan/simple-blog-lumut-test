<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/', 'Home::index');
$routes->get('/login', 'AuthController::login');
$routes->post('/auth/doLogin', 'AuthController::doLogin');
$routes->get('/logout', 'AuthController::logout');
$routes->get('/account', 'AccountController::index', ['filter' => 'authGuard']);
$routes->get('/account/create', 'AccountController::create', ['filter' => 'authGuard']);
$routes->post('/account/store', 'AccountController::store', ['filter' => 'authGuard']);
$routes->get('/account/edit/(:segment)', 'AccountController::edit/$1', ['filter' => 'authGuard']);
$routes->post('/account/update/(:segment)', 'AccountController::update/$1', ['filter' => 'authGuard']);
$routes->get('/account/delete/(:segment)', 'AccountController::delete/$1', ['filter' => 'authGuard']);
$routes->get('/post', 'PostController::index', ['filter' => 'authGuard']);
$routes->get('/post/create', 'PostController::create', ['filter' => 'authGuard']);
$routes->post('/post/store', 'PostController::store', ['filter' => 'authGuard']);
$routes->get('/post/edit/(:segment)', 'PostController::edit/$1', ['filter' => 'authGuard']);
$routes->post('/post/update/(:segment)', 'PostController::update/$1', ['filter' => 'authGuard']);
$routes->get('/post/delete/(:segment)', 'PostController::delete/$1', ['filter' => 'authGuard']);
