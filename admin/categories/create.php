<?php
require_once '../libs/categories.php';

?>
<!-- Begin Page Content -->
<div class="container-fluid">    
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Thêm danh mục </h6>
        </div>
        <div class="card-body">
            <form action="categories/create-save.php" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" class="form-control" placeholder="Nhap ten danh muc" required>
                </div>
                <div class="form-group">
                    <input type="file" name="image" class="form-file-input border" id="">
                </div>
                <button type="submit" name="btnSaveCategory" class="btn btn-primary">Save</button>
            </form>
        </div>
    </div>

</div>
<!-- /.container-fluid -->