<?php
session_start();
    require_once '../../libs/user.php';
    require_once '../../config/config.php';
    if(isset($_POST['btnSaveUser'])){
        extract($_REQUEST);
        $okUpload =false;
        if($_FILES['image']['size']>0){
            $okUpload=true;
            $image=uniqid().$_FILES['image']['name'];
        }else{
            $image='';
        }
        $password = password_hash($password,PASSWORD_DEFAULT);
        insert_user($fullname,$email,$phone,$username,$password,$image,$role,$gender,$address,$active);
        if($okUpload){
            move_uploaded_file($_FILES['image']['tmp_name'],'../../images/'.$image);
        }
        $_SESSION['message']="Thêm dữ liệu thành công";
        header('Location: '.ROOT.'admin/?page=users');
        die();
    }
    ?>