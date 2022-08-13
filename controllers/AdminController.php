<?php

namespace controllers;

use core\App;

class AdminController {

    public function index () {
        $start = 1;
        if ( isset($_GET['page']) ) {
            $point = $_GET['page'] * 10;
            $start = $point - 10;
        }

        $fetchAll = App::get('db')->fetchAllLimit('products', $start, 10);
        return view('admin/index', [
            'page' => $_GET['page']??$start,
            'counts' => App::get('db')->count('products'),
            'products' => $fetchAll
        ]);
    }

    public function product_create () {
        return view('admin/product_create', [
            'categories' => App::get('db')->fetchAll('categories')
        ]);
    }

    public function post_product () {
        
        if (isset($_POST['submit'])) {

            $name = $_POST['name'];
            checkCount($name, 3, 'product_create', 'Product name is at least 3 chracters!');

            $price = $_POST['price'];
            checkCount($price, 0, 'product_create', "Product'price is needed!");

            $category_id = $_POST['category_id'];
            $return = App::get('db')->isExist('categories', 'id', $category_id);
            if($return === 0) {
                redirect('product_create', 'Category is not Exit!');
            }

            $thumbnail = '';
            if ( strlen($_FILES['thumbnail']['name']) > 0 ) {
                $thumbnail = mt_rand(time(), time()) . $_FILES['thumbnail']['name'];
            }
            checkCount($thumbnail, 0, 'product_create', "Product image is needed!");
            move_uploaded_file($_FILES['thumbnail']['tmp_name'], 'assets/uploads/products/'.$thumbnail);
            
            App::get('db')->insert('products', [
                'name' => $name,
                'price' => $price,
                'category_id' => $category_id,
                'thumbnail' => $thumbnail
            ]);

            redirect('admin_index', 'Product created successfully!');
        }
    }

    public function product_edit () {
        $id = $_GET['id'];
        $result = App::get('db')->isExist('products', 'id', $id);
        if ($result === 0) {
            redirect('admin_index');
        }
        return view('admin/product_edit', [
            'product' => App::get('db')->fetch('products', $id)[0],
            'categories' => App::get('db')->fetchAll('categories')
        ]);
    }

    public function update_product () {
        if (isset($_POST['submit'])) {

            $name = $_POST['name'];
            checkCount($name, 3, 'products_edit', 'Product name is at least 3 chracters!');

            $price = $_POST['price'];
            checkCount($price, 0, 'products_edit', "Product'price is needed!");

            $category_id = $_POST['category_id'];
            $return = App::get('db')->isExist('categories', 'id', $category_id);
            if($return === 0) {
                redirect('products_edit', 'Category is not Exit!');
            }

            $thumbnail = '';
            if ( strlen($_FILES['thumbnail']['name']) > 0 ) {
                $thumbnail = mt_rand(time(), time()) . $_FILES['thumbnail']['name'];
                move_uploaded_file($_FILES['thumbnail']['tmp_name'], 'assets/uploads/products/'.$thumbnail);
            }else {
                $thumbnail = $_POST['oldThumbnail'];
            }

            checkCount($thumbnail, 0, 'products_edit', "Product image is needed!");

            $id = $_POST['id'];
            
            App::get('db')->update('products', [
                'name' => $name,
                'price' => $price,
                'category_id' => $category_id,
                'thumbnail' => $thumbnail
            ], $id);

            redirect('admin_index', 'Product updated successfully!');
        }
    }

    public function products_delete () {
        if ( isset($_POST['submit']) ) {
            $id = $_POST['id'];
            App::get('db')->delete('products', $id);
            redirect('/admin_index', 'Product deleted successfully!');
        }
    }

    public function admin_news () {
        $start = 1;
        if ( isset($_GET['page']) ) {
            $point = $_GET['page'] * 10;
            $start = $point - 10;
        }

        $fetchAll = App::get('db')->fetchAllLimit('news', $start, 10);
        return view('admin/admin_news', [
            'page' => $_GET['page']??$start,
            'counts' => App::get('db')->count('news'),
            'news' => $fetchAll
        ]);
    }

    public function news_create () {
        return view('admin/news_create');
    }

    public function post_news () {
        if ( isset($_POST['submit']) ) {

            $title = $_POST['title'];
            checkCount($title, 3, 'news_create', 'Title is at least 3 characters!');

            $body = $_POST['body'];
            checkCount($body, 6, 'news_create', 'Your content is at least 10 characters!');

            $thumbnail = '';
            if ( strlen($_FILES['thumbnail']['name']) > 0 ) {
                $thumbnail = mt_rand(time(), time()) . $_FILES['thumbnail']['name'];
            }
            checkCount($thumbnail, 0, 'news_create', "News image is needed!");
            move_uploaded_file($_FILES['thumbnail']['tmp_name'], 'assets/uploads/news/'.$thumbnail);

            App::get('db')->insert('news', [
                'title' => $title,
                'body' => $body,
                'thumbnail' => $thumbnail
            ]);

            redirect('admin_news', 'News created successfully!');
        }
    }

    public function admin_single_news () {
        $id = $_GET['id'];
        $news = App::get('db')->fetch('news', $id);
        return view('admin/admin_single_news', [
            'news' => $news
        ]);
    }

    public function news_edit () {
        $id = $_GET['id'];
        $result = App::get('db')->isExist('news', 'id', $id);
        if ($result === 0) {
            redirect('admin_news');
        }
        return view('admin/news_edit', [
            'news' => App::get('db')->fetch('news', $id)[0]
        ]);
    }

    public function update_news () {
        if ( isset($_POST['submit']) ) {

            $title = $_POST['title'];
            checkCount($title, 3, 'news_edit', 'Title is at least 3 characters!');

            $body = $_POST['body'];
            checkCount($body, 10, 'news_edit', 'Your content is at least 10 characters!');

            $thumbnail = '';
            if ( strlen($_FILES['thumbnail']['name']) > 0 ) {
                $thumbnail = mt_rand(time(), time()) . $_FILES['thumbnail']['name'];
                move_uploaded_file($_FILES['thumbnail']['tmp_name'], 'assets/uploads/news/'.$thumbnail);
            }else {
                $thumbnail = $_POST['oldThumbnail'];
            }
            checkCount($thumbnail, 0, 'news_edit', "News image is needed!");
            $id = $_POST['id'];
            App::get('db')->update('news', [
                'title' => $title,
                'body' => $body,
                'thumbnail' => $thumbnail
            ], $id);

            redirect('admin_news', 'News updated successfully!');
        }
    }

    public function news_delete () {
        if ( isset($_POST['submit']) ) {
            $id = $_POST['id'];
            App::get('db')->delete('news', $id);
        }
        redirect('/admin_news', 'News deleted successfully!');
    }

    public function admin_category () {
        $start = 1;
        if ( isset($_GET['page']) ) {
            $point = $_GET['page'] * 10;
            $start = $point - 10;
        }

        $fetchAll = App::get('db')->fetchAllLimit('categories', $start, 10);
        return view('admin/admin_category', [
            'page' => $_GET['page']??$start,
            'counts' => App::get('db')->count('categories'),
            'categories' => $fetchAll
        ]);
    }

    public function category_create () {
        return view('admin/category_create');
    }

    public function post_category () {
        if (isset($_POST['submit'])) {
            $name = $_POST['name'];
            checkCount($name, 3, 'category_create', "Category name is at least 3 characters!");
            $result = App::get('db')->isExist('categories', 'name', $name);
            if($result > 0) {
                redirect('category_create', 'Category name must be unique!');
            }
            App::get('db')->insert('categories', [
                'name' => $name
            ]);

            
        }
        redirect('admin_category', 'Category created successfully!');
    }

    public function category_edit () {
        $id = $_GET['id'];
        $result = App::get('db')->isExist('categories', 'id', $id);
        if ($result === 0) {
            redirect('admin_category');
        }
        return view('admin/category_edit', [
            'category' => App::get('db')->fetch('categories', $id)[0]
        ]);
    }

    public function update_category () {
        if (isset($_POST['submit'])) {
            $name = $_POST['name'];
            checkCount($name, 3, 'categories_edit', "Category name is at least 3 characters!");
            $result = App::get('db')->isExist('categories', 'name', $name);
            if($result > 0) {
                redirect('admin_category', 'Category name must be unique!');
            }
            $id = $_POST['id'];
            App::get('db')->update('categories', [
                'name' => $name
            ], $id);

            
        }
        redirect('admin_category', 'Category updated successfully!');
    }

    public function categories_delete () {
        if ( isset($_POST['submit']) ) {
            $id = $_POST['id'];
            App::get('db')->delete('categories', $id);
        }
        redirect('/admin_category', 'Category deleted successfully!');
    }
}