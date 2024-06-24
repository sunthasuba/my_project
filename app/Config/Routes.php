<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');

// Login routes
$routes->get('/login', 'LoginController::index');
$routes->post('/login', 'LoginController::authenticate');
$routes->get('/logout', 'LoginController::logout');
$routes->get('/dashboard', 'DashboardController::index');

// Category routes
$routes->get('/categories', 'CategoryController::index');
$routes->get('/categories/create', 'CategoryController::create');
$routes->post('/categories/store', 'CategoryController::store');
$routes->get('/categories/edit/(:segment)', 'CategoryController::edit/$1');
$routes->post('/categories/update/(:segment)', 'CategoryController::update/$1');
$routes->get('/categories/delete/(:segment)', 'CategoryController::delete/$1');

// Product routes
$routes->get('/products', 'ProductController::index');
$routes->get('/products/create', 'ProductController::create');
$routes->post('/products/store', 'ProductController::store');
$routes->get('/products/edit/(:segment)', 'ProductController::edit/$1');
$routes->post('/products/update/(:segment)', 'ProductController::update/$1');
$routes->get('/products/delete/(:segment)', 'ProductController::delete/$1');

return $routes;
