<?php

$router->get('/', 'controller/index.php');
$router->get('/about', 'controller/about.php');
$router->get('/contact', 'controller/contact.php');

$router->get('/notes', 'controller/notes/index.php');
$router->post('/notes', 'controller/notes/store.php');
$router->get('/notes/edit', 'controller/notes/edit.php');
$router->patch('/notes/edit', 'controller/notes/update.php');
$router->delete('/notes', 'controller/notes/destroy.php');

$router->get('/note', 'controller/notes/show.php');
$router->get('/notes/create', 'controller/notes/create.php');
