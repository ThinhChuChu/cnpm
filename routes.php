<?php

$router->get('/', 'index.php');
$router->get('/admin', 'admin_index.php')->only('auth');

$router->get('/register', 'registration/create.php')->only('guest');
$router->post('/register', 'registration/store.php')->only('guest');

$router->get('/login', 'session/create.php')->only('guest');
$router->post('/session', 'session/store.php')->only('guest');
$router->delete('/session', 'session/destroy.php')->only('auth');

//locations and categories routes
$router->get('/locations', 'locations/index.php')->only('auth');
$router->delete('/locations', 'locations/destroy.php')->only('auth');
$router->get('/locations/create', 'locations/create.php')->only('auth');
$router->post('/locations', 'locations/store.php')->only('auth');

$router->get('/categories', 'categories/index.php')->only('auth');
$router->delete('/categories', 'categories/destroy.php')->only('auth');
$router->get('/categories/create', 'categories/create.php')->only('auth');
$router->post('/categories', 'categories/store.php')->only('auth');

//tours routes
$router->get('/tours', 'tours/index.php')->only('auth');
$router->get('/tour', 'tours/show.php')->only('auth');
$router->delete('/tours', 'tours/destroy.php')->only('auth');

$router->get('/tours/edit', 'tours/edit.php')->only('auth');
$router->patch('/tours', 'tours/update.php')->only('auth');

$router->get('/tours/create', 'tours/create.php')->only('auth');
$router->post('/tours', 'tours/store.php')->only('auth');
//users routes
$router->get('/users', 'users/index.php')->only('auth');
$router->delete('/users', 'users/destroy.php')->only('auth');

$router->get('/users/edit', 'users/edit.php')->only('auth');
$router->patch('/users', 'users/update.php')->only('auth');

$router->get('/users/create', 'users/create.php')->only('auth');
$router->post('/users', 'users/store.php')->only('auth');
//bookings routes
$router->get('/bookings', 'bookings/index.php')->only('auth');
$router->delete('/bookings', 'bookings/destroy.php')->only('auth');

$router->get('/bookings/edit', 'bookings/edit.php')->only('auth');
$router->patch('/bookings', 'bookings/update.php')->only('auth');

$router->get('/bookings/create', 'bookings/create.php')->only('auth');
$router->post('/bookings', 'bookings/store.php')->only('auth');

//user interface 
$router->get('/profile', 'home/profile.php')->only('auth');
$router->get('/tours_list', 'home/tours.php');
$router->get('/tours_list/tour', 'home/tour.php');

//cart interface
$router->get('/cart', 'cart/index.php');
$router->post('/cart', 'cart/store.php')->only('auth');
$router->delete('/cart', 'cart/destroy.php')->only('auth');
