<?php

use controllers\PagesController;

$router->get('', [PagesController::class, 'index']);
$router->get('about', [PagesController::class, 'about']);
$router->get('contact', [PagesController::class, 'contact']);
$router->post('post', [PagesController::class, 'post']);