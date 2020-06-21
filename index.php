<?php
session_start();
require_once "libs/categories.php";
require_once 'libs/user.php';
require_once 'libs/slider.php';
require_once "libs/products.php";
require_once "./config/config.php";
require_once 'libs/comment.php';
$page = isset($_GET['page']) ? $_GET['page'] : '';
$cate = list_all_categories();
switch ($page) {
    case '':
    case 'home':
        $view_page = "layout/home.php";
        break;
    case 'categories':
        $view_page = "layout/category.php";
        break;
    case 'products':
        $id = $_GET['id'];
        $product=list_one_product($id);
        $title=$product['name'];
        $view_page ="layout/product.php";
        break;
    case'logout':
            unset($_SESSION['user']);
            header('Location:'.ROOT);
            die;
    break;
    default:
    $view_page = "site/404.php";
        break;
}
include_once './layout/layout.php';
