<?php
  $list_view_product = list_view_product();
?>

<!-- Top-Sale   -->
 <section id="top-sale">
        <div class="container py-5">
          <h4 class="font-rubik font-size-20">Views Most</h4>
          <hr>
          <!-- owl-carousel -->
          <div class="owl-carousel owl-theme">
            <?php foreach($list_view_product as $view):?>
              <div class="item py-5">
                <div class="product font-rale ">
                  <a href="<?=ROOT?>?page=products&id=<?=$view['id']?>"><img src="<?=ROOT?>images/<?=$view['image']?>" alt="product1" class="img-fluid"></a>
                  <div class="text-center p-1 mt-3" style="height: 50px;">
                    <h6><?=$view['name']?></h6>
                    <div class="price py-2 "> 
                      <span>$<?=$view['price']?></span>
                    </div>
                    
                  </div>
                </div>
              </div>
            <?php endforeach;?>
          </div>
          <!-- !owl-carousel -->
        </div>
      </section>
    <!-- !Top-Sale   -->