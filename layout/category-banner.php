<?php
$id =$_GET['id'];
$cate = list_one_categories($id);
?>

<section id="category-banner">
      <div class="container d-flex justify-content-between">
        <div class="category-banner__content">
          <a href=""><h2 class="font-rubik text-white"><?=$cate['name']?></h2></a>
        </div>
        <img src="<?=ROOT?>images/<?=$cate['image']?>" alt="picture1" class="img-fluid ">
        
      </div>
    </section>