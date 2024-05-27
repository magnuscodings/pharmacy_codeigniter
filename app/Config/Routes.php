<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/navigation', 'Home::admin_navigation');
$routes->get('/product', 'Home::admin_product');
$routes->get('/sales', 'Home::admin_sales');
$routes->get('/sales_report', 'Home::admin_sales_report');
$routes->get('/user_management', 'Home::admin_user_management');

