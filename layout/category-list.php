<?php
$id=$_GET['id'];
  $cate_pro = list_pro_cate($id);
?>

<section id="category-list mt-5">
      <div class="container mt-5">
        <div class="row">
          <?php foreach($cate_pro as $pc):?>
            <div class="col-sm-3">
              <div class="product font-rale ">
                <a href="<?=ROOT?>?page=products&id=<?=$pc['id']?>"><img src="<?=ROOT?>images/<?=$pc['image']?>" alt="product1" class="img-fluid"></a>
                <div class="text-center">
                  <h6  class="mt-4"><?=$pc['name']?></h6>
                  <div class="rating text-warning font-size-12">
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="far fa-star"></i></span>
                  </div>
                  <div class="price py-2 ">
                    <span>$<?=$pc['price']?></span>
                  </div>
                  <a href="<?=ROOT?>?page=products&id=<?=$pc['id']?>" class=" btn btn-block btn-warning">Details</a>
                </div>
              </div>
            </div>
          <?php endforeach;?>
        </div>
      </div>
    </section>