<?php

$router->get('/', 'index.php')->only('auth');
$router->get('/about', 'about.php')->only('auth');
$router->get('/contact', 'contact.php')->only('auth');

$router->get('/notes', 'notes/index.php')->only('auth');
$router->get('/note', 'notes/show.php')->only('auth');
$router->delete('/note', 'notes/destroy.php')->only('auth');

$router->get('/note/edit', 'notes/edit.php')->only('auth');
$router->patch('/note', 'notes/update.php')->only('auth');

$router->get('/notes/create', 'notes/create.php')->only('auth');
$router->post('/notes', 'notes/store.php')->only('auth');

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
$router->delete('/tour', 'tours/destroy.php')->only('auth');

$router->get('/tour/edit', 'tours/edit.php')->only('auth');
$router->patch('/tour', 'tours/update.php')->only('auth');

$router->get('/tours/create', 'tours/create.php')->only('auth');
$router->post('/tours', 'tours/store.php')->only('auth');