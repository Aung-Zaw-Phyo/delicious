<?php

use controllers\AdminController;
use controllers\PagesController;

$router->get('', [PagesController::class, 'index']);
$router->get('about', [PagesController::class, 'about']);
$router->get('contact', [PagesController::class, 'contact']);
$router->get('product', [PagesController::class, 'product']);
$router->get('news', [PagesController::class, 'news']);
$router->get('checkout', [PagesController::class, 'checkout']);
$router->get('cart', [PagesController::class, 'cart']);
$router->get('order', [PagesController::class, 'order']);
$router->post('post', [PagesController::class, 'post']);

// admin 

$router->get('admin_index', [AdminController::class, 'index']);