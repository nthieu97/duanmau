  <?php
    $cate = list_all_categories();
    ?>
  <!-- primary-Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark color-second-bg">
      <a class="navbar-brand" href="<?=ROOT?>?page=home">Mobile Shop</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav m-auto font-rubik">
          <li class="nav-item active">
            <a class="nav-link" href="<?=ROOT?>?page=home">Home <span class="sr-only">(current)</span></a>
          </li>
          <?php foreach($cate as $c):?>
          <li class="nav-item">
            <a class="nav-link" href="<?=ROOT?>?page=categories&id=<?=$c['id']?>"><?=$c['name']?></a>
          </li>
          <?php endforeach;?>
        </ul>
  <form class="form-inline" method="POST" action="<?=ROOT?>?page=products&action=search">
    <input class="form-control mr-sm-2 " type="search" name="keyword" placeholder="Search" aria-label="Search">
    <button class="btn my-2 my-sm-0 color-primary-bg text-white" type="submit" >Search</button>
  </form>
      </div>
    </nav>
    <!-- !primary-Navigation -->
  </header>
  <!-- !start-header -->