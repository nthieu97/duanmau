<?php
require_once '../config/config.php';
require_once '../libs/products.php';
require_once '../libs/categories.php';
require_once '../libs/user.php';
require_once '../libs/comment.php';
$count = list_all_product();
$count_cate = list_all_categories();
$count_user = list_all_users();
$count_comment = list_all_comment();
?>
<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
  </div>

  <!-- Content Row -->
  <div class="row">

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Thành viên</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800"><?= count($count_user) ?></div>
            </div>
            <div class="col-auto">
              <a href="<?= ROOT ?>admin/?page=users"><i class="fas fa-user-friends fa-2x text-gray-300"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Sản phẩm</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800"><?= count($count) ?></div>
            </div>
            <div class="col-auto">
              <a href="<?= ROOT ?>admin/?page=products"><i class="fas fa-box fa-2x text-gray-300"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-info shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Danh mục</div>
              <div class="row no-gutters align-items-center">
                <div class="col-auto">
                  <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?= count($count_cate) ?></div>
                </div>
              </div>
            </div>
            <div class="col-auto">
              <a href="<?= ROOT ?>admin/?page=categories"> <i class="fas fa-archive fa-2x text-gray-300"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Pending Requests Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Bình luận</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800"><?= count($count_comment) ?></div>
            </div>
            <div class="col-auto">
              <a href="<?= ROOT ?>admin/?page=comment"><i class="fas fa-comments fa-2x text-gray-300"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-6">
      <h3 class=" font-weight-bold text-black text-uppercase mb-1">Thống kê sản phẩm</h3>
      <div class="row">

        <div id="piechart_3d" style="width: 800px; height: 500px;"></div>
      </div>
    </div>
  </div>
</div>
<!-- /.container-fluid -->