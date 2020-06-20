<?php
  $new_product= new_products();
?>
<!-- new-phone -->
<section id="new-phones">
      <div class="container">
        <div class="container py-5">
          <h4 class="font-rubik font-size-20">New Products</h4>
          <hr>
           <!-- owl-carousel -->
           <div class="owl-carousel owl-theme ">
            <?php foreach($new_product as $new):?>
            <div class="item py-2 bg-white">
              <div class="product font-rale ">
                <a href="<?=ROOT?>?page=products&id=<?=$new['id']?>"><img src="<?=ROOT?>images/<?=$new['image']?>" alt="product1" class="img-fluid"></a>
                <div class="text-center">
                  <h6 class="mt-5"><?=$new['name']?></h6>
                  <div class="price py-2 ">
                    <span>$<?=$new['price']?></span>
                  </div>
                </div>
              </div>
            </div>
            <?php endforeach;?>
          </div>
          <!-- !owl-carousel -->
      </div>
    </section>
    <!-- !new-phone -->