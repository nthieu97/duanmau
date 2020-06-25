<?php
require_once '../libs/user.php';
$id = $_GET['id'];
$user = list_one_user($id);
?>
<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Thêm thành viên </h6>
        </div>
        <div class="card-body">
            <form action="users/edit-save.php" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?= $user['id'] ?>">
                <div class="form-group">
                    <label for="name">Họ và tên</label>
                    <input type="text" name="fullname" class="form-control" value="<?= $user['fullname'] ?>" placeholder="Nhập họ và tên" required>
                </div>
                <div class="form-group">
                    <label for="name">Giới tính &nbsp;</label>
                    Nam <input type="radio" name="gender" value="1" <?php echo $user['gender'] == 1 ? 'checked' : ''  ?>>
                    Nữ <input type="radio" name="gender" value="0" <?php echo $user['gender'] == 0 ? 'checked' : ''  ?>>
                </div>
                <div class="form-group">
                    <label for="name">Email</label>
                    <input type="email" name="email" value="<?= $user['email'] ?>" class="form-control" placeholder="Nhập email" required>
                </div>
                <div class="form-group">
                    <label for="name">Phone</label>
                    <input type="number" name="phone" class="form-control" value="<?= $user['phone'] ?>" placeholder="Nhập số điện thoại" required>
                </div>
                <div class="form-group">
                    <label for="name">Địa chỉ</label>
                    <input type="text" class="form-control" name="address" id="" value="<?= $user['address'] ?>" placeholder="hãy nhập địa chỉ" required>
                </div>
                <div class="form-group">
                    <label for="name">Username</label>
                    <input type="text" name="username" class="form-control" value="<?= $user['username'] ?>" placeholder="Nhập tên đăng nhập" required>
                </div>
                <div class="form-group">
                    <label for="">Là quyền admin? &nbsp;</label>
                    Không<input type="radio" name="role" value="0" id="" <?php echo $user['role'] == 0 ? 'checked' : ''  ?>>
                    Có<input type="radio" name="role" value="1" id="" <?php echo $user['role'] == 1 ? 'checked' : ''  ?>>
                </div>
                <div class="form-group">
                    <label for="">Khóa người dùng &nbsp;</label>
                    Không<input type="radio" name="active" value="1" id="" <?php echo $user['active'] == 1 ? 'checked' : ''  ?>>
                    Có<input type="radio" name="active" value="0" id="" <?php echo $user['active'] == 0 ? 'checked' : ''  ?>>
                </div>
                
                <div class="form-group">
                    <label for="">Hình ảnh</label>
                    <?php if ($user['image'] != '') : ?>
                        <img src="../images/<?= $user['image'] ?>" width="120" alt="">
                        <input type="hidden" name="hinh" value="<?= $user['image'] ?>">
                    <?php endif; ?>
                    <div class="input-group mb-3">
                        <div class="custom-file">
                            <input type="file" name="image" class="custom-file-input">
                            <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                        </div>
                    </div>
                </div>
                <button type="submit" name="btnSaveUser" class="btn btn-primary">Save</button>
            </form>
        </div>
    </div>

</div>
<!-- /.container-fluid -->