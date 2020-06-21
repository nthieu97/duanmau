<?php
    require_once 'database.php';

    function list_all_slider(){
        return listAll('slider');
    }
    function list_one_slider($id){
        return listOne('slider','id',$id);
    }
   
//sua noi dung
function update_slider($image,$alt,$id){
    $data = [
        'image' => $image,
        'alt'=>$alt,
    ];
    return update('slider',$data,'id',$id);
}
function delete_slider($id){
    return delete('slider','id',$id);
}
function insert_slider($image,$alt){
    
    $data=[
        'alt' => $alt,
        'image' => $image,
    ];
    return insert('slider',$data);
}
?>