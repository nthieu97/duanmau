<!doctype html>
<html lang="en">
  <head>
    <title><?=isset($title)?$title.'-':''?>Mobile shop</title>
    <!-- Required meta tags -->
    <meta  charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- owl-carousel -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />

    <!-- font-awsome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" />

    <!-- Custom CSS -->
    <link rel="stylesheet" href="layout/sass/style.css">
  </head>
  <body>
  <!-- start-header -->
  <header id="header">
    <div class="strip d-flex justify-content-between px-4 py-1 bg-light">
      <p class="font-rale font-size-12 text-black-50 m-0">Nguyễn Trung Hiếu-Hieuntph09482@fpt.edu.vn
      </p>
      <div class="font-rale font-size-14">
        <?php
        if(check_account()):
        ?>
        <?php if($_SESSION['user']['role']==1):?>
                <p class="mr-2 d-none d-lg-inline text-gray-600 ">Hi,<?=$_SESSION['user']['username']?></p>
                <a href="<?=ROOT?>admin">quản trị web</a>
        <?php else:?>
          <p class="mr-2 d-none d-lg-inline text-gray-600 ">Hi,<?=$_SESSION['user']['username']?></p>
        <?php endif;?>
        <?php else:?>
          <a href="<?=ROOT?>admin" class="px-3 border-right border-left text-dark">Login</a>
        <?php endif;?>
        <a href="<?=ROOT?>?page=logout" class="px-3 border-right text-dark">Logout</a>
      </div>
    </div>