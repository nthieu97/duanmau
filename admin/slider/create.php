<?php
require_once '../libs/slider.php';

?>
<!-- Begin Page Content -->
<div class="container-fluid">    
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Thêm slide </h6>
        </div>
        <div class="card-body">
            <form action="slider/create-save.php" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="alt">Alt</label>
                    <input type="text" name="alt" class="form-control" placeholder="Nhap ten Slide" required>
                </div>
                <div class="form-group">
                    <input type="file" name="image" class="form-file-input border" id="">
                </div>
                <button type="submit" name="btnSaveSlider" class="btn btn-primary">Save</button>
            </form>
        </div>
    </div>

</div>