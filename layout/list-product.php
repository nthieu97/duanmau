<?php 
  $product= filter_products();
  $cate=list_all_categories();
?>
<!-- Special_price -->
 <section id="special-price">
      <div class="container">
        <h4 class="font-rubik font-size-20">All Products</h4>
        <div id="filter" class="button-group text-right font-baloo font-size-16">
          <button class="btn is-checked" data-filter="*">All brand</button>
          <?php foreach($cate as$c):?>
          <button class="btn " data-filter=".<?=$c['name']?>"><?=$c['name']?></button>
          <?php endforeach;?>
        </div>
        <div class="grid">
          <?php foreach($product as $p):?>
            <div class="grid-item <?=$p['cate_name']?> border">
              <div class="item py-2 px-3" style="width: 200px;">
                <div class="product font-rale ">
                  <a href="<?=ROOT?>?page=products&id=<?=$p['id']?>"><img src="<?=ROOT?>/images/<?=$p['image']?>" alt="product1" class="img-fluid"></a>
                  <div class="text-center">
                    <h6 class="py-3 mt-2 p-1" style="height: 50px;"><?=$p['name']?></h6>
                    <div class="price py-2 ">
                      <span>$<?=$p['price']?></span>
                    </div>
                    <a href="http://localhost/duanmau/?page=products&id=<?=$p['id']?>" class=" btn btn-block btn-warning">Details</a>
                  </div>
                </div>
              </div>
            </div>
          <?php endforeach;?>
        </div>
      </div>
    </section>
    <!-- !Special_price -->