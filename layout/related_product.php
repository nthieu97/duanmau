<?php
  $related_product= related_product($cate_id);
?>
<!-- new-phone -->
<section id="new-phones">
      <div class="container">
        <div class="container py-5">
          <h4 class="font-rubik font-size-20">Related Products</h4>
          <hr>
           <!-- owl-carousel -->
           <div class="owl-carousel owl-theme ">
            <?php foreach($related_product as $r):?>
            <div class="item bg-white ">
              <div class="product font-rale ">
                <a href="<?=ROOT?>?page=products&id=<?=$r['id']?>"><img src="<?=ROOT?>images/<?=$r['image']?>" alt="product1" class="img-fluid"></a>
                <div class="text-center">
                  <h6 class="mt-5 p-1 " style="height: 60px;"><?=$r['name']?></h6>
                  <div class="price py-2 ">
                    <span>$<?=$r['price']?></span>
                  </div>
                  <a href="http://localhost/duanmau/?page=products&id=<?=$r['id']?>" class=" btn btn-block btn-warning">Details</a>
                </div>
              </div>
            </div>
            <?php endforeach;?>
          </div>
          <!-- !owl-carousel -->
      </div>
    </section>
    <!-- !new-phone -->