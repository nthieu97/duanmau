<?php
    require_once 'libs/products.php';
    extract($_REQUEST);
    $result = search_products($keyword);
?>
<section id="category-list  h-100" style= "height : 600px"  >
      <div class="container mt-5">
        <div class="row">
          <?php foreach($result as $r):?>
            <div class="col-sm-3">
              <div class="product font-rale ">
                <a href="<?=ROOT?>?page=products&id=<?=$r['id_product']?>"><img src="<?=ROOT?>images/<?=$r['img_product']?>" alt="product1" class="img-fluid"></a>
                <div class="text-center">
                  <h6  class="mt-4"><?=$r['name_product']?></h6>
                  <div class="rating text-warning font-size-12">
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="far fa-star"></i></span>
                  </div>
                  <div class="price py-2 ">
                    <span>$<?=$r['price']?></span>
                  </div>
                  <a href="<?=ROOT?>?page=products&id=<?=$r['id_product']?>" class=" btn btn-block btn-warning">Details</a>
                </div>
              </div>
            </div>
          <?php endforeach;?>
        </div>
      </div>
    </section>