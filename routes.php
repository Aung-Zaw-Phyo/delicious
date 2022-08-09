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
$router->get('product_create', [AdminController::class, 'product_create']);
$router->get('admin_news', [AdminController::class, 'admin_news']);
$router->get('news_create', [AdminController::class, 'news_create']);
$router->get('admin_category', [AdminController::class, 'admin_category']);
$router->get('category_create', [AdminController::class, 'category_create']);