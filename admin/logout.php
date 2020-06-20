<?php
session_start();
    require_once '../config/config.php';
    
        session_destroy();
        header("Location:".ROOT.'admin/login.php');
?>