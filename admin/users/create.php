<?php
require_once '../libs/user.php';
?>
<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Thêm thành viên </h6>
        </div>
        <div class="card-body">
            <form action="users/create-save.php" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="name">Họ và tên</label>
                    <input type="text" name="fullname" class="form-control"  placeholder="Nhập họ và tên" required>
                </div>
                <div class="form-group">
                    <label for="name">Giới tính &nbsp;</label>
                        Nam <input type="radio" name="gender" value="1" checked>
                        Nữ <input type="radio" name="gender" value="0" >
                </div>
                <div class="form-group">
                    <label for="name">Email</label>
                    <input type="email" name="email" class="form-control" placeholder="Nhập email" required>    
                </div>
                <div class="form-group">
                    <label for="name">Phone</label>
                    <input type="number" name="phone" class="form-control" placeholder="Nhập số điện thoại" required>
                </div>
                <div class="form-group">
                    <label for="name">Địa chỉ</label>
                    <input type="text" class="form-control" name="address" id="" placeholder="hãy nhập địa chỉ" required>
                </div>
                <div class="form-group">
                    <label for="name">Username</label>
                    <input type="text" name="username" class="form-control" placeholder="Nhập tên đăng nhập" required>
                </div>
                <div class="form-group">
                    <label for="name">Mật khẩu</label>
                    <input type="password" name="password" class="form-control" placeholder="Nhap mật khẩu" required>
                </div>
                <div class="form-group">
                    <label for="">Là quyền admin? &nbsp;</label>
                    Không<input type="radio" name="role" value="0" id="" checked>
                    Có<input type="radio" name="role" value="1" id="">
                </div>
                <input type="hidden" name="active" value="1">
                <div class="form-group">
                <label for="">Hình ảnh</label>
                <div class="input-group mb-3">
                    <div class="custom-file">
                        <input type="file" name="image" class="custom-file-input" >
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