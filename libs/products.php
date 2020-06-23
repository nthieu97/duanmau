<?php
require_once "database.php";
//ham hien thi toan bo du lieu trong ban danh muc
function list_all_product(){
    return listAll('products');
}
//lay ra mot ban ghi 
function list_one_product($id){
    return listOne('products','id',$id);
}
//them mot dong
function insert_products($cate_id,$name,$description,$image,$price,$sale,$view,$status,$detail){
    $created_at= date("y-m-d");
    $data=[
        'cate_id'=>$cate_id,
        'description'=>$description,
        'name' => $name,
        'image' => $image,
        'price'=>$price,
        'sale'=>$sale,
        'view'=>$view,
        'status'=>$status,
        'detail'=>$detail,
        'created_at'=>$created_at,
        'updated_at'=>$created_at
        ];
    return insert('products',$data);
}
//sua noi dung
function update_products($cate_id,$name,$description,$image,$price,$sale,$view,$status,$detail,$id){
    $updated_at=date("y-m-d");
    $data = [
        'cate_id'=>$cate_id,
        'description'=>$description,
        'name' => $name,
        'image' => $image,
        'price'=>$price,
        'sale'=>$sale,
        'view'=>$view,
        'status'=>$status,
        'detail'=>$detail,
        'updated_at'=>$updated_at
    ];
    return update('products',$data,'id',$id);
}
//xoa noi dung 
function delete_products($id){
    return delete('products','id',$id);
}
function search_products($name){
    $sql="SELECT p.id as id_product,p.name as name_product,p.image as img_product, status , price,c.name as name_cate  FROM products p INNER JOIN categories c ON p.cate_id = c.id WHERE p.name LIKE '%$name%' ";
    return query($sql);
}
function list_limit_product($count){
    $sql = "SELECT * from products order by id desc limit 0,3";
    return query($sql);
}
function list_sale_products(){
    $array = ['sale','>',0];
    return query_where('products',$array);
}
function new_products(){
    $sql = "SELECT * FROM products order by id desc";
    return query($sql);
}
function filter_products(){
    $sql="SELECT p.id as id,p.name as name ,p.price as price,p.image as image,c.name AS cate_name FROM `products` as p INNER JOIN `categories` as c on p.cate_id=c.id";
    return query($sql);
}
function list_view_product(){
    $sql = "SELECT * FROM products order by view desc";
    return query($sql);
}
function list_pro_cate($id){
    $sql = "SELECT * FROM products where cate_id = $id";
    return query($sql);
}
function products_with_cate($id){
    $sql="SELECT p.id as id,p.name as name ,p.price as price,p.image as image,c.name AS cate_name,p.sale as sale,p.detail as detail FROM `products` as p INNER JOIN `categories` as c on p.cate_id=c.id where p.id=$id";
    return query($sql);
}
function update_views_by_product_id($id){
    $sql= "UPDATE products Set view =view+1 where id = $id";
    $conn = connection();
    $stmt = $conn->prepare($sql);
    $stmt ->execute();
}

?>