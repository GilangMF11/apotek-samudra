<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Auth::index');
$routes->get('dashboard', 'Home::index');
// Rute untuk halaman login (tampilan form login)
//$routes->get('login', 'Auth::login');
$routes->post('login', 'Auth::login'); 
$routes->get('logout', 'Auth::login');

$routes->get('register', 'Auth::register');
$routes->post('register', 'Auth::register');

$routes->get('logout', 'Auth::logout');

$routes->get('user', 'UserController::index');
$routes->get('user/create', 'UserController::create');
$routes->post('user/store', 'UserController::store');
$routes->get('user/edit/(:num)', 'UserController::edit/$1');
$routes->post('user/update/(:num)', 'UserController::update/$1');
$routes->get('user/delete/(:num)', 'UserController::delete/$1');

//Kategori
$routes->get('kategori', 'KategoriController::index');
$routes->get('kategori/create', 'KategoriController::create');
$routes->post('kategori/store', 'KategoriController::store');
$routes->get('kategori/edit/(:num)', 'KategoriController::edit/$1');
$routes->post('kategori/update/(:num)', 'KategoriController::update/$1');
$routes->get('kategori/delete/(:num)', 'KategoriController::delete/$1');

//Unit
$routes->get('unit', 'UnitController::index');
$routes->get('unit/create', 'UnitController::create');
$routes->post('unit/store', 'UnitController::store');
$routes->get('unit/edit/(:num)', 'UnitController::edit/$1');
$routes->post('unit/update/(:num)', 'UnitController::update/$1');
$routes->get('unit/delete/(:num)', 'UnitController::delete/$1');

//rak
$routes->get('rak', 'RakController::index');
$routes->get('rak/create', 'RakController::create');
$routes->post('rak/store', 'RakController::store');
$routes->get('rak/edit/(:num)', 'RakController::edit/$1');
$routes->post('rak/update/(:num)', 'RakController::update/$1');
$routes->get('rak/delete/(:num)', 'RakController::delete/$1');

//Pemasok
$routes->get('supplier', 'SupplierController::index');
$routes->get('supplier/create', 'SupplierController::create');
$routes->post('supplier/store', 'SupplierController::store');
$routes->get('supplier/edit/(:num)', 'SupplierController::edit/$1');
$routes->post('supplier/update/(:num)', 'SupplierController::update/$1');
$routes->get('supplier/delete/(:num)', 'SupplierController::delete/$1');

//Obat
$routes->get('obat', 'ObatController::index');
$routes->get('obat/create', 'ObatController::create');
$routes->post('obat/store', 'ObatController::store');
$routes->get('obat/edit/(:num)', 'ObatController::edit/$1');
$routes->post('obat/update/(:num)', 'ObatController::update/$1');
$routes->get('obat/delete/(:num)', 'ObatController::delete/$1');

//Transaksi
$routes->get('transaksi/create', 'TransaksiController::create');