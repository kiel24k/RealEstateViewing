<?php

use CodeIgniter\Router\RouteCollection;
use app\Controllers\RealEstateController;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'RealEstateController::index');
$routes->get('/add_data_view','RealEstateController::add_data_view');
$routes->post('/add_data','RealEstateController::add_data');
$routes->get('/delete/(:num)', 'RealEstateController::delete/$1');
$routes->get('/update_view/(:num)', 'RealEstateController::update_view/$1');
$routes->post('update/(:num)','RealEstateController::update/$1');
