<?php

require_once '../libs/products.php';
require_once '../libs/categories.php';
$cate = list_all_categories();
$id = $_GET['id'];
$product = list_one_product($id);
?>
<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Thêm sản phẩm </h6>
        </div>
        <div class="card-body">
            <form action="products/edit-save.php" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="name">Danh mục</label>
                    <select class="form-control" name="cate_id" id="">
                        <?php foreach ($cate as $c) : ?>
                            <?php if ($c['id'] == $product['cate_id']) : ?>
                                <option value="<?= $c['id'] ?>" selected><?= $c['name'] ?></option>
                            <?php endif; ?>
                            <option value="<?= $c['id'] ?>"><?= $c['name'] ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" value="<?= $product['name'] ?>" class="form-control" placeholder="Nhap ten san pham" required>
                </div>
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="hidden" name="id" value="<?= $product['id'] ?>" class="form-control" >
                </div>
                <div class="form-group">
                    <label for="name">Description</label>
                    <input type="text" name="description" value="<?= $product['description'] ?>" class="form-control" placeholder="Nhap chi dan" required>
                </div>
                <div class="form-group">
                    <label for="name">Price</label>
                    <input type="number" name="price" id="price" value="<?= $product['price'] ?>" class="form-control" placeholder="Nhập giá" required>
                </div>
                <div class="form-group">
                    <label for="name">Khuyến mãi</label>
                    <input type="text" name="sale" id="sale" value="<?= $product['sale'] ?>" class="form-control" placeholder="Nhap khuyến mãi" required>
                </div>
                <div class="form-group">
                    <input type="hidden" name="view" value="0" class="form-control">
                </div>
                <?php
                if ($product['image'] != '') :
                ?>
                    <img src="../images/<?= $product['image'] ?>" width="120" alt="">
                    <input type="hidden" name="hinh" value="<?=$product['image'] ?>">
                <?php endif; ?>
                <div class="form-group">
                    <input type="file" name="image" class="form-file-input border" id="">
                </div>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" name="status" class="custom-control-input" id="customCheck1" value="<?= $product['status'] ?>" <?php echo $product['status'] == 1 ? 'checked' : '' ?>>
                    <label class="custom-control-label" for="customCheck1">Trạng Thái</label>
                </div>
                <div class="form-group">
                    <label for="name">Chi tiết</label>
                    <textarea class="form-control" name="detail" id="" cols="170" rows="10"><?= $product['detail'] ?></textarea>
                </div>
                <button type="submit" name="btnSaveProduct" class="btn btn-primary">Save</button>
            </form>
        </div>
    </div>

</div>
<!-- /.container-fluid -->