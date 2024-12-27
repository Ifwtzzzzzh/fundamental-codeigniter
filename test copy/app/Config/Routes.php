<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// $routes->get('/', 'Home::index');
// $routes->get('/siswa', 'SiswaController::index'); // Menampilkan daftar siswa
// $routes->get('/siswa/create', 'SiswaController::create'); // Menampilkan form tambah siswa
// $routes->post('/siswa/store', 'SiswaController::store'); // Menyimpan data siswa baru
// $routes->get('/siswa/edit/(:segment)', 'SiswaController::edit/$1'); // Menampilkan form edit siswa
// $routes->post('/siswa/update/(:segment)', 'SiswaController::update/$1'); // Menyimpan perubahan data siswa
// $routes->get('/siswa/delete/(:segment)', 'SiswaController::delete/$1'); // Menghapus data siswa

$routes->group('post', function($routes) {
    $routes->get('/', 'PostController::index');
    $routes->get('create', 'PostController::create');
    $routes->post('store', 'PostController::store');
    $routes->get('edit/(:num)', 'PostController::edit/$1');
    $routes->post('update/(:num)', 'PostController::update/$1');
    $routes->get('delete/(:num)', 'PostController::delete/$1');
});

$routes->group('faculty', function($routes) {
    $routes->get('/', 'FakultasController::index');
    $routes->get('create', 'FakultasController::create');
    $routes->post('store', 'FakultasController::store');
    $routes->get('edit/(:num)', 'FakultasController::edit/$1');
    $routes->post('update/(:num)', 'FakultasController::update/$1');
    $routes->get('delete/(:num)', 'FakultasController::delete/$1');
});


// $routes->group('faculty', function($routes) {
//     $routes->get('/', 'TestController::index');
//     $routes->get('create', 'TestController::create');
//     $routes->post('store', 'TestController::store');
//     $routes->get('edit/(:num)', 'TestController::edit/$1');
//     $routes->post('update/(:num)', 'TestController::update/$1');
//     $routes->get('delete/(:num)', 'TestController::delete/$1');
// });