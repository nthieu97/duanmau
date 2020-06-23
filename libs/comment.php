<?php
    require_once 'database.php';

    // hien thi danh sach comment theo products_id
    function list_comment_products($product_id){
        $sql = "SELECT c.id comment_id, product_id ,content,username ,c.created_at created_comment ,u.image user_image
        from comments c inner join users u on c.user_id = u.id 
        where product_id = '$product_id' ";
        return query($sql);
    }
    function insert_comment($product_id,$user_id,$content){
        $date = date('y-m-d');
        $data = [
           'product_id'=>$product_id,
           'user_id'=>$user_id,
           'content'=>$content,
           'created_at'=>$date,
        ];
        insert('comments',$data);
    }
    function list_all_comment(){
        return listAll('comments');
    };
    function delete_comment($id){
        return delete('comments','id',$id);
    }
    function comment_product($id){
        $sql = "SELECT c.id as comment_id,content,user_id FROM comments c inner join products p on c.product_id = p.id WHERE p.id ='$id'";
        return query($sql);
    }
?>