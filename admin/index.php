<?php
ob_start();
session_start();


$page = isset($_GET['page']) ? $_GET['page'] : '';
require_once '../config/config.php';
require_once '../libs/products.php';
require_once '../libs/comment.php';
require_once '../libs/slider.php';
include_once './template/header.php';
check_role();

switch ($page) {
    case '':
    case 'home':
        include_once './home/home.php';
        
        break;
    case 'categories':
        //lay hanh dong trong categories
        $action = isset($_GET['action'])?$_GET['action']:'';
        switch($action){
            case'':
                include_once './categories/index.php';
            break;
            case 'add':
                include_once './categories/create.php';
            break;
            case 'edit':
                include_once './categories/edit.php';
        }
    break;
    case 'products':
        //lay hanh dong trong product
        $action = isset($_GET['action'])?$_GET['action']:'';
        switch($action){
            case'':
                include_once './products/index.php';
            break;
            case 'add':
                include_once './products/create.php';
            break;
            case 'edit':
                include_once './products/edit.php';
            break;
            case 'search':
                include_once './products/search.php';
            break;
            case 'see_comment':
                include_once './products/see_comment.php';
            break;
        }
    break;
    case 'users':
        //lay hanh dong trong product
        $action = isset($_GET['action'])?$_GET['action']:'';
        switch($action){
            case'':
                include_once './users/index.php';
            break;
            case 'add':
                include_once './users/create.php';
            break;
            case 'edit':
                include_once './users/edit.php';
            break;
        }
    break;
    case 'logout':
        unset($_SESSION['user']);header('Location:'.ROOT.'admin/login.php');
        die;
    break;
    case 'slider':
        $action = isset($_GET['action'])?$_GET['action']:'';
        switch($action){
            case'':
                include_once './slider/index.php';
            break;
            case 'add':
                include_once './slider/create.php';
            case 'edit':
                include_once './slider/edit.php';
        }
    break;
    default:
        echo "404";
        break;
    case 'comment':
        include_once './comment/index.php';
    break;
    
}

include_once './template/footer.php';
if(isset($_SESSION['message'])){
    unset($_SESSION['message']);
}
?>
<script> 
    $(document).ready(function(){
        $('#checkall').change(function(){
            $('input:checkbox').prop('checked',$(this).prop('checked'));
        });
        $('#btndel-category').click(function(){
            if($('input:checked').length === 0){
                alert("Bạn cần chọn ít nhất một danh mục");
                return false;
            }
        });
        $('#btndel-product').click(function(){
            if($('input:checked').length === 0){
                alert("Bạn cần chọn ít nhất một danh mục");
                return false;
            }
        });
    })
</script>
<?php

ob_end_flush();?>


