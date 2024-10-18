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
$routes->get('/blog', 'Home::blog');
$routes->get('/history', 'Home::history');
$routes->get('/gallery', 'Home::gallery');
$routes->get('/contact', 'Home::contact');

// Protect the `/admin` route with the `auth` filter to ensure the user is logged in
$routes->group('admin', ['filter' => 'auth', 'namespace' => 'App\Controllers\AdminControllers'], static function ($routes) {
    $routes->get('/', 'AuthController::index'); // Dashboard or admin homepage
    $routes->get('logout', 'AuthController::logout'); // logout
});

// Define routes that should be accessed only by guests (non-logged-in users)
$routes->group('admin', ['filter' => 'guest', 'namespace' => 'App\Controllers\AdminControllers'], static function ($routes) {
    $routes->get('login', 'AuthController::login');   // Show login page
    $routes->post('login', 'AuthController::login');  // Process login form submission
    $routes->get('register', 'AuthController::register');   // Show registration page
    $routes->post('register', 'AuthController::register');  // Process registration form submission
});


$routes->group('admin/blog', ['namespace' => 'App\Controllers', 'filter' => 'auth',], function ($routes) {
    // Route to display all blog posts
    $routes->get('/', 'BlogController::index');
    
    // Routes for creating a new blog post
    $routes->get('create', 'BlogController::create');  // Form to create a new post
    $routes->post('store', 'BlogController::store');   // Handle form submission to create a new post

    // Routes for editing an existing blog post
    $routes->get('edit/(:num)', 'BlogController::edit/$1');  // Form to edit a specific post by ID
    $routes->post('update/(:num)', 'BlogController::update/$1'); // Handle form submission to update the post

    // Route to delete a blog post
    $routes->delete('delete/(:num)', 'BlogController::delete/$1');  // Handle deletion of a post by ID
});



