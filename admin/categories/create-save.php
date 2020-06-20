<?php
session_start();

    require_once '../../libs/categories.php';
    require_once '../../config/config.php';
if(isset($_POST['btnSaveCategory'])){
    extract($_REQUEST);
    $okUpload = false;
    if($_FILES['image']['size']>0){
        $okUpload=true;
        $image = uniqid().$_FILES['image']['name'];
    }else{
        $image='';
    }
    insert_categories($name,$image);
    if($okUpload){
        move_uploaded_file($_FILES['image']['tmp_name'],'../../images/'.$image);
    }
    $_SESSION['message']="Thêm dữ liệu thành công";
    header('Location: '.ROOT.'admin/?page=categories');
    die();
};