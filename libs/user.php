<?php
    require_once 'database.php';
    function check_account(){
        if(isset($_SESSION['user'])){
            return true;
        }
        return false;
    }
    function check_user($username){
        $sql ="SELECT * FROM users WHERE username = '$username'";
        $user = query($sql);
        if(count($user)>0){
            return $user[0];
        }return false;
    }
    
    function list_all_users(){
        return listAll('users');
    }
    //lay ra mot ban ghi 
    function list_one_user($id){
        return listOne('users','id',$id);
    }
    //them mot dong
    function insert_user($fullname,$email,$phone,$username,$password,$image,$role,$gender,$address,$active){
        $created_at= date("y-m-d");
        $data=[
            'fullname'=>$fullname,
            'email'=>$email,
            'phone' => $phone,
            'image' => $image,
            'username'=>$username,
            'password'=>$password,
            'active' =>$active,
            'role'=>$role,
            'gender'=>$gender,
            'address'=>$address,
            'created_at'=>$created_at,
            ];
        return insert('users',$data);
    }
    //sua noi dung
    function update_user($fullname,$email,$phone,$username,$password,$image,$role,$gender,$address,$id,$active){
        $data = [
            'fullname'=>$fullname,
            'email'=>$email,
            'phone' => $phone,
            'image' => $image,
            'username'=>$username,
            'password'=>$password,
            'active'=>$active,
            'role'=>$role,
            'gender'=>$gender,
            'address'=>$address,
        ];
        return update('users',$data,'id',$id);
    }
    //xoa noi dung 
    function delete_user($id){
        return delete('users','id',$id);
    }
    function user_exist($account){
        $conn = connection();
        try{
            $sql = "SELECT * FROM users where username ='$account' or email='$account' or phone = '$account'";
            $stmt=$conn->prepare($sql);
            $stmt -> execute();
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
        }catch(PDOException $e){
            throw $e;
        }finally{
            unset($conn);
        }
        return $result;
    }
function disable_user($id){
    $sql= "UPDATE user Set active =0 where id = $id";
    $conn = connection();
    $stmt = $conn->prepare($sql);
    $stmt ->execute();
}
function enable_user($id){
    $sql= "UPDATE user Set active =1 where id = $id";
    $conn = connection();
    $stmt = $conn->prepare($sql);
    $stmt ->execute();
}