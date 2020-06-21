<?php

require_once '../libs/slider.php';


if (isset($_GET['id'])) {
    $id = $_GET['id'];
    delete_slider($id);
    $_SESSION['message'] = "Xóa dữ liệu thành công";
    header('location:' . ROOT . 'admin/?page=slider');
    die;
}
if (isset($_POST['btndel-slider'])) {
    extract($_REQUEST);
    foreach ($id as $id_slider) {
        delete_slider($idq_slider);
    }
    $_SESSION['message'] = "Xóa dữ liệu thành công";
    header('location:' . ROOT . 'admin/?page=slider');

    die;
}
$slider = list_all_slider();
?>
<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <?php if (isset($_SESSION['message'])) : ?>
        <h1 class="h6 mb-2 text-success"><?= $_SESSION['message'] ?></h1>
    <?php endif; ?>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Danh sách slide &nbsp; <a href="<?= ROOT ?>/admin?page=slider&action=add" class="btn-sm float-right btn btn-primary">Thêm mới</a></h6>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-light mb-0">
                    <li class="breadcrumb-item"><a href="#">Admin</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Slide</li>
                </ol>
            </nav>
        </div>
        <div class="card-body">
            <div class="table-responsive col-12">
                <form action="" method="post">
                    <table class="table table-bordered " id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th><input type="checkbox" name="checkall" id="checkall"></th>
                                <th>Id</th>
                                <th>Image</th>
                                <th>alt</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                            <th></th>
                                <th>Id</th>
                                <th>Image</th>
                                <th>alt</th>
                                <th></th>
                            </tr>
                        </tfoot>
                        <tbody>
                            <?php foreach ($slider as $s) : ?>
                                <tr>
                                    <td><input type="checkbox" name="id[]" value="<?= $s['id'] ?>" id=""></td>
                                    <td><?= $s['id'] ?></td>
                                    <td><img src="../images/<?= $s['image']?>" width="120px" alt=""></td>
                                    <td><?= $s['alt'] ?></td>
                                    <td>
                                        <a href="<?= ROOT ?>admin/?page=slider&action=edit&id=<?= $s['id'] ?>" class="btn btn-success">Sửa</a>
                                        <a href="<?= ROOT ?>admin/?page=slider&id=<?= $s['id'] ?>" onclick="return confirm('Bạn có chắc muốn xóa không?')" class="btn btn-danger">Xóa</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                    <button class="btn btn-warning" id="btndel-category" name="btndel-category" type="submit"> Xóa mục đánh dấu</button>
                </form>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->