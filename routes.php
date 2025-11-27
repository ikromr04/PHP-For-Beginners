<?php

$router->get('/', 'controller/index.php');
$router->get('/about', 'controller/about.php');
$router->get('/contact', 'controller/contact.php');

$router->get('/notes', 'controller/notes/index.php')->only('auth');
$router->get('/notes/edit', 'controller/notes/edit.php')->only('auth');
$router->patch('/notes/edit', 'controller/notes/update.php')->only('auth');
$router->delete('/notes', 'controller/notes/destroy.php')->only('auth');
$router->get('/note', 'controller/notes/show.php')->only('auth');
$router->get('/notes/create', 'controller/notes/create.php')->only('auth');
$router->post('/notes/create', 'controller/notes/store.php')->only('auth');

$router->get('/register', 'controller/registration/create.php')->only('guest');
$router->post('/register', 'controller/registration/store.php')->only('guest');
