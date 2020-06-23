<?php
require_once '../libs/user.php';
if(isset($_GET['id'])){
    $id =$_GET['id'];
    delete_user($id);
    $_SESSION['message'] = "Xóa dữ liệu thành công";
    header('Location:'.ROOT.'admin/?page=users');
    die;
}
if(isset($_POST['btndel-user'])){
    extract($_REQUEST);
    foreach($id as $id_user){
        delete_user($id_user);
    }
    $_SESSION['message'] = "Xóa dữ liệu thành công";
    header('Location:'.ROOT.'admin/?page=users');
    die;
}
$user = list_all_users();

?>
<!-- Begin Page Content -->
<div class="container-fluid">    
    <!-- DataTales Example -->
    <?php if (isset($_SESSION['message'])) : ?>
        <h1 class="h6 mb-2 text-success"><?= $_SESSION['message'] ?></h1>
    <?php endif; ?>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Danh sách Thành viên &nbsp; <a href="<?=ROOT?>/admin?page=users&action=add" class="btn-sm float-right btn btn-primary">Thêm mới</a></h6>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-light mb-0">
                    <li class="breadcrumb-item"><a href="#">Admin</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Thành viên</li>
                </ol>
            </nav>
        </div>
        <div class="card-body">
            <div class="table-responsive col-12">
                <form action="" method="post">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th><input type="checkbox" name="checkall" id="checkall"></th>
                            <th>Id</th>
                            <th>Full Name</th>
                            <th>Gender</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>Username</th>
                            <th>Image</th>
                            <th>Active</th>
                            <th>Role</th>
                            <th>Address</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                        <th></th>
                            <th>Id</th>
                            <th>Full Name</th>
                            <th>Gender</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>Username</th>
                            <th>Image</th>
                            <th>Active</th>
                            <th>Role</th>
                            <th>Address</th>
                            <th></th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php foreach($user as $u):?>
                        <tr>
                            <td><input type="checkbox" name="id[]" value="<?=$u['id']?>" id=""></td>
                            <td><?=$u['id']?></td>
                            <td><?=$u['fullname']?></td>
                            <td><?php echo $u['gender']==1?'Nam':'Nữ'?></td>
                            <td><?=$u['phone']?></td>
                            <td><?=$u['email']?></td>
                            <td><?=$u['username']?></td>
                            <td><img src="../images/<?=$u['image']?>" width="120px" alt=""></td>
                            <td><?php echo $u['active']==1 ? 'Đẫ kích hoạt':'Bị khóa'?></td>
                            <td><?php echo $u['role']==1?'Admin':'Thành viên'?></td>
                            <td><?=$u['address']?></td>
                            <td>
                                <a href="<?=ROOT?>admin/?page=users&action=edit&id=<?=$u['id']?>" class="btn btn-success" >Sửa</a>
                                <a href="<?=ROOT?>admin/?page=users&id=<?=$u['id']?>" onclick="return confirm('Bạn có chắc muốn xóa thành viên này không?')" class="btn btn-danger" >Xóa</a>
                            </td>
                        </tr>
                        <?php endforeach;?>
                    </tbody>
                </table>
                <button type="submit" class="btn btn-warning" name="btndel-user" id="btndel-user">Xóa mục đã chọn</button>
                </form>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->