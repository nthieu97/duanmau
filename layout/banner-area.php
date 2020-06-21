<?php
  $slider = list_all_slider();
  ?>
<!-- Owl-carousel   -->
 <section id="banner-area">
      <div class="owl-carousel owl-theme">
        <?php foreach ($slider as $s):?>
        <div class="item">
          <img src="<?=ROOT?>images/<?=$s['image']?>" alt="<?=$s['alt']?>">
        </div>
<?php endforeach;?>
      </div>
      </section>
      <!-- !Owl-carousel   -->