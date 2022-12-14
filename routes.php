<?php

use controllers\AdminController;
use controllers\AdminFeatureController;
use controllers\AuthController;
use controllers\PagesController;
use controllers\SystemController;

$router->get('', [PagesController::class, 'index']);
$router->get('about', [PagesController::class, 'about']);
$router->get('contact', [PagesController::class, 'contact']);
$router->post('message', [PagesController::class, 'message']);
$router->get('product', [PagesController::class, 'product']);
$router->get('news', [PagesController::class, 'news']);
$router->get('checkout', [SystemController::class, 'checkout']);
$router->get('cart', [SystemController::class, 'cart']);
$router->post('post_order', [SystemController::class, 'post_order']);
$router->get('order', [SystemController::class, 'order']);
$router->get('search', [PagesController::class, 'search']);

$router->get('single_news', [PagesController::class, 'single_news']);
$router->post('comment', [PagesController::class, 'comment']);

$router->post('subscribe', [PagesController::class, 'subscribe']);

// system 

$router->post('post_cart', [SystemController::class, 'post_cart']);
$router->post('home_post_cart', [SystemController::class, 'home_post_cart']);
$router->post('update_cart', [SystemController::class, 'update_cart']);
$router->post('delete_cart', [SystemController::class, 'delete_cart']);

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

// users 
$router->get('users', [AdminFeatureController::class, 'users']);
$router->post('user_delete', [AdminFeatureController::class, 'user_delete']);
$router->get('user_order', [AdminFeatureController::class, 'user_order']);

// subscribers 
$router->get('subscribers', [AdminFeatureController::class, 'subscribers']);
$router->post('subscriber_delete', [AdminFeatureController::class, 'subscriber_delete']);

// contact 
$router->get('admin_contact', [AdminFeatureController::class, 'admin_contact']);

//orders
$router->get('admin_orders', [AdminFeatureController::class, 'admin_orders']);
$router->get('admin_complete_order', [AdminFeatureController::class, 'admin_complete_order']);
$router->post('order_complete', [AdminFeatureController::class, 'order_complete']);
$router->post('order_pending', [AdminFeatureController::class, 'order_pending']);

//money
$router->get('money', [AdminFeatureController::class, 'money']);


// Authentication 

$router->get('login', [AuthController::class, 'login']);
$router->get('register', [AuthController::class, 'register']);

$router->post('register', [AuthController::class, 'post_register']);
$router->post('login', [AuthController::class, 'post_login']);
$router->post('logout', [AuthController::class, 'logout']);
