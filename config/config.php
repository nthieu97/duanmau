<?php
define('ROOT', 'http://localhost/pt15211-web-duanmau-master/');
 
function check_session(){
    if(isset($_SESSION['user'])){
        header('Location:'.ROOT.'admin');
        die;
    }
    return;
}
//check role
 function check_role(){
     if(isset($_SESSION['user'])){
         if($_SESSION['user']['role']==1){
            return;
         }if($_SESSION['user']['role']==0){
             header('Location:'.ROOT);
             die;
         }
     }
    //  chua dang nhap
     header('Location:'.ROOT.'admin/login.php');
 }
