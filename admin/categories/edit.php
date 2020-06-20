<?php
    require_once '../libs/categories.php';
    $id=$_GET['id'];
    $cate=list_one_categories($id);
    
?>
<!-- Begin Page Content -->
<div class="container-fluid">    
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Sửa danh mục </h6>
        </div>
        <div class="card-body">
            <form action="categories/edit-save.php" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" class="form-control" value="<?=$cate['name']?>" placeholder="Nhap ten danh muc" required>
                </div>
                <?php 
                    if($cate['image'] !=''):
                ?>
                <img src="../images/<?=$cate['image']?>" width="120" alt="">
                <input type="hidden" name="hinh" value="<?=$cate['image']?>">
                <?php endif;?>
                <div class="form-group">
                    <input type="file" name="image" class="form-file-input border" id="">
                </div>
                <input type="hidden" name="id" value="<?=$cate['id']?>">
                <button type="submit" name="btnSave-category" class="btn btn-primary">Save</button>
            </form>
        </div>
    </div>

</div>
<!-- /.container-fluid -->