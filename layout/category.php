<?php
$id =$_GET['id'];
$cate = list_one_categories($id);
?>
 <section id="bread-crumb">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="<?=ROOT?>?page=home">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page"><?=$cate['name']?></li>
        </ol>
      </nav>
     </section>
<?php 
  include_once 'category-banner.php';
  include_once 'category-list.php';
  include_once 'banner-ads.php';
  include_once 'new-phone.php';
?>