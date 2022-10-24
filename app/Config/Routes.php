<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (is_file(SYSTEMPATH . 'Config/Routes.php')) {
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
$routes->get('create-db', function () {
    $forge = \Config\Database::forge();
    if ($forge->createDatabase('eoyama_db')) {
        echo 'Database created!';
    }
});

$routes->get('/', 'Home::index');
$routes->get('portofolio', 'Portofolio::index');
$routes->get('portofolio/add', 'Portofolio::create');
$routes->post('portofolio', 'Portofolio::store');
$routes->get('portofolio/edit/(:num)', 'Portofolio::edit/$1');
$routes->post('portofolio/update/(:num)', 'Portofolio::update/$1');
$routes->get('portofolio/delete/(:num)', 'Portofolio::delete/$1');

$routes->get('about', 'About::index');

$routes->get('pemesanan', 'PemesananController::index');
$routes->get('pemesanan/add', 'PemesananController::create');
$routes->post('pemesanan', 'PemesananController::store');
$routes->get('pemesanan/edit/(:num)', 'PemesananController::edit/$1');
$routes->put('pemesanan/(:any)', 'PemesananController::update/$1');
$routes->delete('pemesanan/(:segment)', 'PemesananController::destroy/$1');

$routes->get('events', 'JadwalController::index');
$routes->get('events/add', 'JadwalController::create');
$routes->post('events', 'JadwalController::store');
$routes->get('events/edit/(:num)', 'JadwalController::edit/$1');
$routes->put('events/(:any)', 'JadwalController::update/$1');
$routes->delete('events/(:segment)', 'JadwalController::destroy/$1');
// $routes->get('calendar', 'FullCalendar::index');




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
