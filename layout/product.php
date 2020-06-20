  <?php

    $id = $_GET['id'];
    $pr=list_one_product($id);
    update_views_by_product_id($id);
    $product = products_with_cate($id);
    if (isset($_POST['btn_comment'])) {
        extract($_REQUEST);
        $product_id = $id;
        $user_id = $_SESSION['user']['id'];
        insert_comment($product_id, $user_id, $content);
        header('Location:'.$_SERVER['REQUEST_URI']);
    }
    $comment = list_comment_products($id);
    ?>

  <!-- product -->
  <section id="product" class="py-3 mt-5">
      <div class="container">
          <div class="row">
              <div class="col-sm-6">
                  <img src="<?= ROOT ?>images/<?= $product[0]['image'] ?>" alt="product" class=" img-fluid ">
              </div>
              <div class="col-sm-6 py-5">
                  <h5 class="font-baloo font-size-20"><?= $product[0]['name'] ?></h5>
                  <small>by <?= $product[0]['cate_name'] ?></small>
                  <div class="d-flex">
                      <div class="rating text-warning font-size-12">
                          <span><i class="fas fa-star"></i></span>
                          <span><i class="fas fa-star"></i></span>
                          <span><i class="fas fa-star"></i></span>
                          <span><i class="fas fa-star"></i></span>
                          <span><i class="far fa-star"></i></span>
                      </div>
                      <a href="#" class="px-2 font-rale font-size-14"><?=$pr['view']?> views</a>

                  </div>
                  <hr class="mt-0">

                  <!-- product-price -->
                  <table class="my-3">
                      <tr class="font-rale font-size-14">
                          <td>M.R.P</td>
                          <td><strike>$<?= $product[0]['price'] ?></strike></td>
                      </tr>
                      <tr class="font-rale font-size-14">
                          <td>Deal price :</td>
                          <td class="font-size-20 text-danger">$ <span><?= ($product[0]['price'] - $product[0]['sale']) ?></span><small class="text-dark font-size-12">&nbsp;&nbsp; Inclusive of all</small> </td>
                      </tr>
                      <tr class="font-rale font-size-14">
                          <td>You Save:</td>
                          <td><span class="font-size-20 text-danger">$ <?= $product[0]['sale'] ?></span></td>
                      </tr>

                  </table>
                  <!-- !product-price -->
                  <!-- #policy -->
                  <div id="policy">
                      <div class="d-flex">
                          <div class="return text-center mr-5">
                              <div class="font-size-20 my-2 color-second">
                                  <span><i class="fas fa-retweet border p-3 rounded-pill"></i></span>
                              </div>
                              <a href="#" class="font-rale font-size-12">10 Days <br> Replacement</a>
                          </div>
                          <div class="return text-center mr-5">
                              <div class="font-size-20 my-2 color-second">
                                  <span><i class="fas fa-truck border p-3 rounded-pill"></i></span>
                              </div>
                              <a href="#" class="font-rale font-size-12">Daily Tution <br> Delivered</a>
                          </div>
                          <div class="return text-center mr-5">
                              <div class="font-size-20 my-2 color-second">
                                  <span><i class="fas fa-check-double border p-3 rounded-pill"></i></span>
                              </div>
                              <a href="#" class="font-rale font-size-12">1 Year <br> Waranty</a>
                          </div>
                      </div>
                  </div>
                  <!-- !#policy -->
                  <hr>

                  <!-- order-details -->
                  <div id="order-details" class="font-rale d-flex flex-column text-dark">
                      <small>Delevery by : Mar 29- Apr 1</small>
                      <small>Sold by <a href="#">Daily Electronics</a>(4.5 out of 5 | 18,198 ratings)</small>
                      <small> <i class="fas fa-map-marker-alt color-primary"></i>&nbsp;&nbsp;Deliver to Customer - 4220</small>
                  </div>
                  <!-- !order-details -->
                  <!-- product-qty-section -->
                  <div class="row">
                      <div class="col-6">
                          <!-- color -->
                          <div class="color my-3">
                              <div class="d-flex justify-content-between">
                                  <h6 class="font-baloo">Color:</h6>
                                  <div class="p-2 color-yellow-bg rounded-circle"><button type="submit" class="btn font-size-14"></button></div>
                                  <div class="p-2 color-primary-bg rounded-circle"><button type="submit" class="btn font-size-14"></button></div>
                                  <div class="p-2 color-second-bg rounded-circle"><button type="submit" class="btn font-size-14"></button></div>
                              </div>

                          </div>
                          <!-- !color -->
                      </div>
                  </div>
                  <!-- product-qty-section -->
                  <!-- size -->
                  <div class="size my-3">
                      <h6 class="font-baloo">
                          Size:
                      </h6>
                      <div class="d-flex justify-content-between w-75">
                          <div class="font-rubik border p-2">
                              <button class="btn p-0 font-size-14">
                                  4GB RAM
                              </button>
                          </div>
                          <div class="font-rubik border p-2">
                              <button class="btn p-0 font-size-14">
                                  8GB RAM
                              </button>
                          </div>
                          <div class="font-rubik border p-2">
                              <button class="btn p-0 font-size-14">
                                  16GB RAM
                              </button>
                          </div>
                      </div>
                  </div>
                  <!-- !size -->
              </div>
              <div class=" tab-nav w-100">
                  <nav>
                      <!-- Description -->
                      <div class="nav nav-tabs" id="nav-tab" role="tablist">
                          <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">
                              <h6 class="font-rubik">Product Description</h6>
                          </a>
                          <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Comments</a>
                      </div>
                  </nav>
                  <div class="tab-content" id="nav-tabContent">
                      <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                          <p class="font-rale font-size-14"><?= $product[0]['detail'] ?></p>
                      </div>
                      <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                          <div class="card border-0">
                              <div class="card-body d-block">
                                  <?php foreach ($comment as $c) : ?>
                                      <div class="row mt-2 p-4 border">
                                          <div class="col-md-2">
                                              <img src="<?= ROOT ?>images/<?= $c['user_image'] ?>" class="img rounded-circle img-fluid" />
                                              <p class="text-secondary text-center"><?= $c['created_comment'] ?></p>
                                          </div>
                                          <div class="col-md-10">
                                              <p>
                                                  <a class="float-left" href="#"><strong><?= $c['username'] ?></strong></a>
                                                  <span class="float-right"><i class="text-warning fa fa-star"></i></span>
                                                  <span class="float-right"><i class="text-warning fa fa-star"></i></span>
                                                  <span class="float-right"><i class="text-warning fa fa-star"></i></span>
                                                  <span class="float-right"><i class="text-warning fa fa-star"></i></span>

                                              </p>
                                              <div class="clearfix"></div>
                                              <p><?= $c['content'] ?></p>
                                              <p>
                                                  <a class="float-right btn btn-outline-primary ml-2"> <i class="fa fa-reply"></i> Reply</a>
                                              </p>
                                          </div>
                                      </div>
                                  <?php endforeach; ?>
                                  <?php if (check_account()) : ?>
                                      <div class="row comment mt-4">
                                          <div class="col-md-2 text-center">
                                              <img src="<?= ROOT ?>images/<?= $_SESSION['user']['image'] ?>" class="img rounded-circle img-fluid" />
                                              <a class="mt-2 d-block font-size-16" href=""><strong><?= $_SESSION['user']['username'] ?></strong></a>
                                          </div>
                                          <div class="col-md-10">
                                              <div class="clearfix"></div>
                                              <form action="" method="post">
                                                  <textarea name="content" id="" cols="126" rows="10"></textarea>
                                                  <button type="submit" name="btn_comment" class=" btn-lg btn btn-success float-right">Send</button>
                                              </form>
                                          </div>
                                      </div>
                                  <?php else : ?>
                                      <div class="alert alert-danger mt-4" role="alert">
                                          Bạn cần đăng nhập để bình luận.Đăng nhập tại <a href="<?= ROOT ?>admin">đây</a>
                                      </div>
                                  <?php endif; ?>
                              </div>
                          </div>

                      </div>

                  </div>
              </div>
          </div>
      </div>
  </section>
  <!-- !product -->