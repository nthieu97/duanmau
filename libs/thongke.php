<?php
    require_once 'database.php';
    function count_product_cate(){
        $sql = "SELECT c.id,c.name as name , COUNT(*) as soluong from products p JOIN categories c on c.id = p.cate_id GROUP by c.id,c.name
        ";
        return query($sql);
    }
    function pro_comment_max(){
        $sql = "SELECT COUNT(*) as socomment , products.id , products.name as tensanpham FROM comments join products on comments.product_id = products.id GROUP BY products.id,products.name
        ";
        return query($sql);

    }
?>