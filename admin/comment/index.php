<?php
    require_once '../libs/comment.php';
    if(isset($_GET['id'])){
        $id =$_GET['id'];
        delete_comment($id);
        $_SESSION['message'] = "Xóa bình luận thành công";
        header('Location:'.ROOT.'admin/?page=comment');
        die;
    }
    if(isset($_POST['btndel_comment'])){
        extract($_REQUEST);
        foreach($id as $id_comment){
            delete_comment($id_comment);
        }
        $_SESSION['message'] = "Xóa bình luận thành công";
        header('Location:'.ROOT.'admin/?page=comment');
        die;
    }
    $list_comment= list_all_comment();
?>
<!-- Begin Page Content -->
<div class="container-fluid">    
    <!-- DataTales Example -->
    <?php if (isset($_SESSION['message'])) : ?>
        <h1 class="h6 mb-2 text-success"><?= $_SESSION['message'] ?></h1>
    <?php endif; ?>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Danh sách Bình luận </h6>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-light mb-0">
                    <li class="breadcrumb-item"><a href="#">Admin</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Bình luận</li>
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
                            <th>Id người viết</th>
                            <th>Id_sản phẩm</th>
                            <th>Nội dung</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                        <th></th>
                            <th>Id</th>
                            <th>Id người viết</th>
                            <th>Id_sản phẩm</th>
                            <th>Nội dung</th>
                            <th></th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php foreach($list_comment as $c):?>
                        <tr>
                            <td><input type="checkbox" name="id[]" value="<?=$c['id']?>" id=""></td>
                            <td><?=$c['id']?></td>
                            <td><?=$c['user_id']?></td>
                            <td><?=$c['product_id']?></td>
                            <td><?=$c['content']?></td>
                            <td>
                                <a href="<?=ROOT?>admin/?page=comment&id=<?=$c['id']?>" onclick="return confirm('Bạn có chắc muốn xóa bình luận này không?')" class="btn btn-danger" >Xóa</a>
                            </td>
                        </tr>
                        <?php endforeach;?>
                    </tbody>
                </table>
                <button type="submit" class="btn btn-warning" name="btndel_comment" id="btndel-product">Xóa mục đã chọn</button>
                </form>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->