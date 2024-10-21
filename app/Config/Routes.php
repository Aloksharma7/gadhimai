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
$routes->get('/history', 'Home::history');
$routes->get('/gallery', 'Home::gallery');
$routes->get('/contact', 'Home::contact');
$routes->get('/blog', 'BlogController::blogs');
$routes->get('blog/view/(:segment)', 'BlogController::view/$1');
$routes->get('/newsnotice', 'NewsNoticeController::NewsNotices');
$routes->get('newsnotice/view/(:segment)', 'NewsNoticeController::view/$1');



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
    $routes->get('delete/(:num)', 'BlogController::delete/$1');  // Handle deletion of a post by ID
});



// news notice

$routes->group('admin/newsnotice', ['namespace' => 'App\Controllers', 'filter' => 'auth'], function ($routes) {
    // Route to display all news and notices
    $routes->get('/', 'NewsNoticeController::index');
    
    // Routes for creating a new news/notice
    $routes->get('create', 'NewsNoticeController::create');  // Form to create a new news/notice
    $routes->post('store', 'NewsNoticeController::store');   // Handle form submission to create a new news/notice

    // Routes for editing an existing news/notice
    $routes->get('edit/(:num)', 'NewsNoticeController::edit/$1');  // Form to edit a specific news/notice by ID
    $routes->post('update/(:num)', 'NewsNoticeController::update/$1'); // Handle form submission to update the news/notice

    // Route to delete a news/notice
    $routes->get('delete/(:num)', 'NewsNoticeController::delete/$1');  // Handle deletion of a news/notice by ID
});



// events routes 

$routes->group('admin/events', ['namespace' => 'App\Controllers', 'filter' => 'auth'], function ($routes) {
    // Route to display all events
    $routes->get('/', 'EventController::index');

    // Routes for creating a new event
    $routes->get('create', 'EventController::create');  // Form to create a new event
    $routes->post('store', 'EventController::store');    // Handle form submission to create a new event

    // Routes for editing an existing event
    $routes->get('edit/(:num)', 'EventController::edit/$1');   // Form to edit a specific event by ID
    $routes->post('update/(:num)', 'EventController::update/$1'); // Handle form submission to update the event

    // Route to delete an event
    $routes->get('delete/(:num)', 'EventController::delete/$1');  // Handle deletion of an event by ID
});
