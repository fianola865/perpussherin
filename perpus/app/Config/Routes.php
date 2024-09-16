<?php

use App\Controllers\Peminjaman;
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->setAutoRoute(TRUE);

$routes->get('/', 'buku::index');
$routes->get('/buku', 'buku::index');
$routes->post('/buku/store', 'buku::store');
$routes->post('buku/update(:num)', 'buku::update/$1');
$routes->post('buku/edit(:num)', 'buku::edit/$1');
$routes->post('buku/delete(:num)', 'buku::delete/$1');

$routes->get('/user', 'controllerUser::index');
$routes->get('/user/awal', 'controllerUser::create');
$routes->post('/user/store', 'controllerUser::store');
$routes->get('/user/update/(:num)', 'controllerUser::update/$1');
$routes->post('user/edit/(:num)', 'controllerUser::edit/$1');
$routes->post('user/delete/(:num)', 'controllerUser::delete/$1');

$routes->get('/peminjaman', 'peminjaman::index');
$routes->get('/peminjaman/create', 'peminjaman::create');
$routes->post('/peminjaman/store', 'peminjaman::store');
$routes->get('/peminjaman/update/(:num)', 'peminjaman::update/$1');
$routes->post('/peminjaman/edit/(:num)', 'Peminjaman::edit/$1');
$routes->post('/peminjaman/delete/(:num)', 'peminjaman::delete/$1');

$routes->get('/pengembalian', 'Mbalek::index');
$routes->get('/pengembalian/create', 'Mbalek::create');
$routes->post('/pengembalian/store', 'Mbalek::store');
$routes->get('/pengembalian/update/(:num)', 'Mbalek::update/$1');
$routes->post('/pengembalian/edit/(:num)', 'Mbalek::edit/$1');
$routes->post('/pengembalian/delete/(:num)', 'Mbalek::delete/$1');