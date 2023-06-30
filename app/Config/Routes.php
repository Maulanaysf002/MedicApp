<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

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
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');

// dokter
$routes->get('Dokter', 'Dokter::index');
$routes->get('/Dokter/create', 'Dokter::create');
$routes->post('/Dokter/save', 'Dokter::save');
$routes->delete('/Dokter/delete/(:num)', 'Dokter::delete/$1');
$routes->get('/Dokter/edit/(:num)', 'Dokter::edit/$1');
$routes->post('/Dokter/update/(:num)', 'Dokter::update/$1');

// obat
$routes->get('Obat', 'Obat::index');
$routes->get('/Obat/create', 'Obat::create');
$routes->post('/Obat/save', 'Obat::save');
$routes->delete('/Obat/delete/(:num)', 'Obat::delete/$1');
$routes->get('/Obat/edit/(:num)', 'Obat::edit/$1');
$routes->post('/Obat/update/(:num)', 'Obat::update/$1');

// pasien
$routes->get('Pasien', 'Pasien::index');
$routes->get('/Pasien/create', 'Pasien::create');
$routes->post('/Pasien/save', 'Pasien::save');
$routes->delete('/Pasien/delete/(:num)', 'Pasien::delete/$1');
$routes->get('/Pasien/edit/(:num)', 'Pasien::edit/$1');
$routes->post('/Pasien/update/(:num)', 'Pasien::update/$1');


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
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
