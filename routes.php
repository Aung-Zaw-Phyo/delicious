<?php

use controllers\AdminController;
use controllers\AuthController;
use controllers\PagesController;

$router->get('', [PagesController::class, 'index']);
$router->get('about', [PagesController::class, 'about']);
$router->get('contact', [PagesController::class, 'contact']);
$router->get('product', [PagesController::class, 'product']);
$router->get('news', [PagesController::class, 'news']);
$router->get('checkout', [PagesController::class, 'checkout']);
$router->get('cart', [PagesController::class, 'cart']);
$router->get('order', [PagesController::class, 'order']);

$router->get('single_news', [PagesController::class, 'single_news']);

// admin 

$router->get('admin_index', [AdminController::class, 'index']);
$router->get('product_create', [AdminController::class, 'product_create']);
$router->get('admin_news', [AdminController::class, 'admin_news']);
$router->get('news_create', [AdminController::class, 'news_create']);
$router->get('admin_category', [AdminController::class, 'admin_category']);
$router->get('category_create', [AdminController::class, 'category_create']);
$router->get('admin_single_news', [AdminController::class, 'admin_single_news']);

$router->post('post_product', [AdminController::class, 'post_product']);
$router->post('post_category', [AdminController::class, 'post_category']);
$router->post('post_news', [AdminController::class, 'post_news']);

$router->get('products_edit', [AdminController::class, 'product_edit']);
$router->get('categories_edit', [AdminController::class, 'category_edit']);
$router->get('news_edit', [AdminController::class, 'news_edit']);

$router->post('update_product', [AdminController::class, 'update_product']);
$router->post('update_category', [AdminController::class, 'update_category']);
$router->post('update_news', [AdminController::class, 'update_news']);

$router->post('products_delete', [AdminController::class, 'products_delete']);
$router->post('news_delete', [AdminController::class, 'news_delete']);
$router->post('categories_delete', [AdminController::class, 'categories_delete']);


// Authentication 

$router->get('login', [AuthController::class, 'login']);
$router->get('register', [AuthController::class, 'register']);

$router->post('register', [AuthController::class, 'post_register']);
$router->post('login', [AuthController::class, 'post_login']);
$router->post('logout', [AuthController::class, 'logout']);
