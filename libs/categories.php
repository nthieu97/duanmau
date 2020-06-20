<?php
    require_once "database.php";
    //ham hien thi toan bo du lieu trong ban danh muc
    function list_all_categories(){
        return listAll('categories');
    }
    //lay ra mot ban ghi 
    function list_one_categories($id){
        return listOne('categories','id',$id);
    }
    //them mot dong
    function insert_categories($name,$image){
        $created_at= date("y-m-d");
        $data=[
            'name' => $name,
            'image' => $image,
            'created_at' =>$created_at,
            'updated_at' =>$created_at
        ];
        return insert('categories',$data);
    }
    //sua noi dung
    function update_categories($name,$image,$id){
        $data = [
            'name' => $name,
            'image'=> $image
        ];
        return update('categories',$data,'id',$id);
    }
    //xoa noi dung 
    function delete_categories($id){
        return delete('categories','id',$id);
    }
?>