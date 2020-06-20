<?php
session_start();

    require_once '../../config/config.php';
    require_once '../../libs/products.php';

    if(isset($_POST['btnSaveProduct'])){
        extract($_REQUEST);
        if($_FILES['image']['size']>0){
                $image = uniqid().$_FILES['image']['name'];
                move_uploaded_file($_FILES['image']['tmp_name'],'../../images/'.$image);
        }else{
            $image = $hinh;
        }
        $status = isset($status)? true:false;
        update_products($cate_id,$name,$description,$image,$price,$sale,$view,$status,$detail,$id);
        $_SESSION['message']="Sửa dữ liệu thành công";
        header('Location:'.ROOT.'admin/?page=products');
        die()
;    }
?>