<?php
    session_start();
    require_once '../../config/config.php';
    require_once '../../libs/categories.php';
    

    if(isset($_POST['btnSave-category'])){
        extract($_REQUEST);
        if($_FILES['image']['size']>0){
                $image = uniqid().$_FILES['image']['name'];
                move_uploaded_file($_FILES['image']['tmp_name'],'../../images/'.$image);
        }else{
            $image = $hinh;
        }
        update_categories($name,$image,$id);
        $_SESSION['message']="Sửa dữ liệu thành công";
        header('Location:'.ROOT.'admin/?page=categories');
        die();    }
?>