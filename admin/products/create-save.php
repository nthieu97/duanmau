<?php
session_start();

    require_once '../../libs/products.php';
    require_once '../../config/config.php';
    if(isset($_POST['btnSaveProduct'])){
        extract($_REQUEST);
        $okUpload = false;
        if($_FILES['image']['size']>0){
            $okUpload=true;
            $image = uniqid().$_FILES['image']['name'];
        }else{
            $image='';
        }
        $status=isset($status)?true:false;
        insert_products($cate_id,$name,$description,$image,$price,$sale,$view,$status,$detail);
        if($okUpload){
            move_uploaded_file($_FILES['image']['tmp_name'],'../../images/'.$image);
        }
        $_SESSION['message']="Thêm dữ liệu thành công";
        header('Location: '.ROOT.'admin/?page=products');
        die();
    }
?>