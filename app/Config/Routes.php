<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// $routes->get('/', 'Home::index');
// $routes->get('/admin', 'AdminControllers\AuthController::index');

// $routes->group('admin', ['namespace' => 'App\Controllers\AdminControllers'], static function ($routes) {
//     $routes->get('login', 'AuthController::login');
//     $routes->post('login', 'AuthController::login');
//     $routes->get('register', 'AuthController::register');
//     $routes->post('register', 'AuthController::register');
// });

$routes->get('/', 'Home::index');

// Protect the `/admin` route with the `auth` filter to ensure the user is logged in
$routes->group('admin', ['filter' => 'auth', 'namespace' => 'App\Controllers\AdminControllers'], static function ($routes) {
    $routes->get('/', 'AuthController::index'); // Dashboard or admin homepage
});

// Define routes that should be accessed only by guests (non-logged-in users)
$routes->group('admin', ['filter' => 'guest', 'namespace' => 'App\Controllers\AdminControllers'], static function ($routes) {
    $routes->get('login', 'AuthController::login');   // Show login page
    $routes->post('login', 'AuthController::login');  // Process login form submission
    $routes->get('register', 'AuthController::register');   // Show registration page
    $routes->post('register', 'AuthController::register');  // Process registration form submission
});



