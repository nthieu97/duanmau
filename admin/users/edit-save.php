<?php
    session_start();
    require_once '../../config/config.php';
    require_once '../../libs/user.php';
    if(isset($_POST['btnSaveUser'])){
        extract($_REQUEST);
        if($_FILES['image']['size'] >0){
            $image = uniqid().$_FILES['image']['name'];
            move_uploaded_file($_FILES['image']['tmp_name'],'../../images/'.$image);
        }
        else
        {
            $image=$hinh;
        }
        $password = password_hash($password,PASSWORD_DEFAULT);
        update_user($fullname,$email,$phone,$username,$password,$image,$role,$gender,$address,$id,$active);
        $_SESSION['message']="Sửa dữ liệu thành công";
        header('Location:'.ROOT.'admin/?page=users');
        die();
    }
?>