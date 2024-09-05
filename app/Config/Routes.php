<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('/producto', 'Producto::index');
$routes->get('/producto/crear', 'Producto::mostrar');
$routes->post('/producto/traer', 'Producto::traer');
$routes->get('/producto/editar/(:num)/', 'Producto::editar/$1');
$routes->post('/producto/actualizar', 'Producto::actualizar');
$routes->get('/producto/borrar/(:num)', 'Producto::eliminar/$1');
