<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
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
$routes->get('/user/sign-up/', 'User::new');
$routes->post('/user/create/', 'User::create');
$routes->get('/user/login/', 'User::login');
$routes->post('/user/auth-login/', 'User::loginAuth');

// Write protected routes like this

// Customer Routes
$routes->get('/customer', 'Customer::index', ['filter' => 'authGuard']);
$routes->get('/customer/show/(:id)', 'Customer::show/$1', ['filter' => 'authGuard']);
$routes->get('/customer/edit/(:id)', 'Customer::edit/$1', ['filter' => 'authGuard']);
$routes->post('/customer/update/(:id)', 'Customer::update/$1', ['filter' => 'authGuard']);


// Chef Routes
$routes->get('/chef', 'Chef::index', ['filter' => 'authGuard']);
$routes->get('/chef/show/(:id)', 'Chef::show/$1', ['filter' => 'authGuard']);
$routes->get('/chef/edit/(:id)', 'Chef::edit/$1', ['filter' => 'authGuard']);
$routes->post('/chef/update/(:id)', 'Chef::update/$1', ['filter' => 'authGuard']);
// menu
$routes->get('/chef/meal/new', 'Meal::new');
$routes->post('/chef/meal/create', 'Meal::create');
$routes->get('/chef/meal/show/(:id)', 'Meal::show/$1');
$routes->put('/chef/meal/update/(:id)', 'Meal::update/$1');
$routes->delete('/chef/meal/delete/(:id)', 'Meal::delete/$1');



// Recipe Routes
$routes->get('/recipe', 'Recipe::index');


// Order Routes
$routes->get('/order', 'Order::index');

/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
