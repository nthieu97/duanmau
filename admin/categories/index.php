<?php

require_once '../libs/categories.php';


if (isset($_GET['id'])) {
    $id = $_GET['id'];
    delete_categories($id);
    $_SESSION['message'] = "Xóa dữ liệu thành công";
    header('location:' . ROOT . 'admin/?page=categories');
    die;
}
if (isset($_POST['btndel-category'])) {
    extract($_REQUEST);
    foreach ($id as $id_category) {
        delete_categories($id_category);
    }
    $_SESSION['message'] = "Xóa dữ liệu thành công";
    header('location:' . ROOT . 'admin/?page=categories');

    die;
}
$cate = list_all_categories();
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
            <h6 class="m-0 font-weight-bold text-primary">Danh sách danh mục &nbsp; <a href="<?= ROOT ?>/admin?page=categories&action=add" class="btn-sm float-right btn btn-primary">Thêm mới</a></h6>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-light mb-0">
                    <li class="breadcrumb-item"><a href="#">Admin</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Danh mục</li>
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
                                <th>Name</th>
                                <th>Image</th>
                                <th>Created at</th>
                                <th>Update </th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th></th>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Image</th>
                                <th>Created at</th>
                                <th>Update </th>
                            </tr>
                        </tfoot>
                        <tbody>
                            <?php foreach ($cate as $c) : ?>
                                <tr>
                                    <td><input type="checkbox" name="id[]" value="<?= $c['id'] ?>" id=""></td>
                                    <td><?= $c['id'] ?></td>
                                    <td><?= $c['name'] ?></td>
                                    <td><img src="../images/<?= $c['image'] ?>" width="120px" alt=""></td>
                                    <td><?= $c['created_at'] ?></td>
                                    <td>
                                        <a href="<?= ROOT ?>admin/?page=categories&action=edit&id=<?= $c['id'] ?>" class="btn btn-success">Sửa</a>
                                        <a href="<?= ROOT ?>admin/?page=categories&id=<?= $c['id'] ?>" onclick="return confirm('Bạn có chắc muốn xóa không?')" class="btn btn-danger">Xóa</a>
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