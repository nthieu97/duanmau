<?php

    extract($_REQUEST);
    $result = search_products($keyword);
?>

<!-- Begin Page Content -->
<div class="container-fluid">    
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tìm kiếm &nbsp;</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <form action="" method="post" class="col-12">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                        <th><input type="checkbox" name="checkall" id="checkall"></th>
                            <th>Id</th>
                            <th>danh mục</th>
                            <th>Tên</th>
                            <th>Ảnh</th>
                            <th>Status</th>
                            <th>Giá</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th></th>
                        <th>Id</th>
                        <th>danh mục</th>
                            <th>Tên</th>
                            <th>Ảnh</th>
                            <th>Status</th>
                            <th>Giá</th>
                            <th></th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php foreach($result as $r):?>
                        <tr>
                            <td><input type="checkbox" name="id[]" value="<?=$r['id_product']?>" id=""></td>
                            <td><?=$r['id_product']?></td>
                            <td><?=$r['name_cate']?></td>
                            <td><?=$r['name_product']?></td>
                            <td><img src="../images/<?=$r['img_product']?>" width="120px" alt=""></td>
                            <td><?=$r['status']?'Có hàng':'Hết hàng'?></td>
                            <td><?=$r['price']?></td>
                            <td>
                                <a href="<?=ROOT?>admin/?page=products&action=edit&id=<?=$r['id_product']?>" class="btn btn-success" >Sửa</a>
                                <a href="<?=ROOT?>admin/?page=products&id=<?=$r['id_product']?>" onclick="return confirm('Bạn có chắc muốn xóa sản phẩm này không?')" class="btn btn-danger" >Xóa</a>
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