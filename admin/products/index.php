<?php

require_once '../libs/products.php';
if(isset($_GET['id'])){
    $id =$_GET['id'];
    delete_products($id);
    $_SESSION['message'] = "Xóa dữ liệu thành công";
    header('Location:'.ROOT.'admin/?page=products');
    die;
}
if(isset($_POST['btndel-product'])){
    extract($_REQUEST);
    foreach($id as $id_product){
        delete_products($id_product);
    }
    $_SESSION['message'] = "Xóa dữ liệu thành công";
    header('Location:'.ROOT.'admin/?page=products');
    die;
}
$pro = list_all_product();


?>
<!-- Begin Page Content -->
<div class="container-fluid">    
    <!-- DataTales Example -->
    <?php if (isset($_SESSION['message'])) : ?>
        <h1 class="h6 mb-2 text-success"><?= $_SESSION['message'] ?></h1>
    <?php endif; ?>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Danh sách Sản phẩm &nbsp; <a href="<?=ROOT?>/admin?page=products&action=add" class="btn-sm float-right btn btn-primary">Thêm mới</a></h6>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-light mb-0">
                    <li class="breadcrumb-item"><a href="#">Admin</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Sản phảm</li>
                </ol>
            </nav>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <form action="" method="post" class="col-12">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th><input type="checkbox" name="checkall" id="checkall"></th>
                            <th>Id</th>
                            <th>Danh mục</th>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Sale</th>
                            <th>View</th>
                            <th>Image</th>
                            <th>Status </th>
                           
                            <th></th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                        <th></th>
                            <th>Id</th>
                            <th>Danh mục</th>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Sale</th>
                            <th>View</th>
                            <th>Image</th>
                            <th>Status </th>
                          
                            <th></th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php foreach($pro as $p):?>
                        <tr>
                            <td><input type="checkbox" name="id[]" value="<?=$p['id']?>" id=""></td>
                            <td><?=$p['id']?></td>
                            <td><?=$p['cate_id']?></td>
                            <td><?=$p['name']?></td>
                            <td><?=$format=number_format($p['price'])?></td>
                            <td><?=$p['sale']?></td>
                            <td><?=$p['view']?></td>
                            <td><img src="../images/<?=$p['image']?>" width="120px" alt=""></td>
                            <td><?php echo $p['status']?'Còn hàng':'Hết hàng'?></td>
                           
                            <td>
                                <a href="<?=ROOT?>admin/?page=products&action=edit&id=<?=$p['id']?>" class="btn btn-success" >Sửa</a>
                                <a href="<?=ROOT?>admin/?page=products&id=<?=$p['id']?>" onclick="return confirm('Bạn có chắc muốn xóa sản phẩm này không?')" class="btn btn-danger" >Xóa</a>
                                <a class="btn btn-info" href="<?=ROOT?>admin/?page=products&action=see_comment&id_product=<?=$p['id']?>">Xem bình luận của sản phẩm này</a>
                            </td>
                        </tr>
                        <?php endforeach;?>
                    </tbody>
                </table>
                <button type="submit" class="btn btn-warning" name="btndel-product" id="btndel-product">Xóa mục đã chọn</button>
                </form>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->