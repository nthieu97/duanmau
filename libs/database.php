<?php

//Hàm kết nối đến cơ sở dữ liệu
function connection()
{
    try {
        $conn = new PDO("mysql:host=localhost; dbname=pt15211_web204; charset=utf8", "root", "");
    } catch (PDOException $e) {
        echo "Lỗi kết nối đến cơ sở dữ liệu " . $e->getMessage();
    }
    return $conn;
}
 //lay toan bo danh sach
 function listAll($table){
    $conn = connection();
    try{
        $sql = "SELECT * FROM $table ORDER BY id DESC";
        $stmt=$conn->prepare($sql);
        $stmt->execute();
        $result = $stmt ->fetchAll(PDO::FETCH_ASSOC);
    }
    catch( PDOException $e){
        echo "loi xu li du lieu".$e->getMessage();
    }finally{
        unset($conn);
    }
    return $result;
};
//lay 1 phan tu theo id
function listOne($table,$id,$value){
    $conn = connection();
    try{
        $sql = "SELECT * FROM $table WHERE $id=:$id";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(":$id",$value);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
    }catch(PDOException $e){
        echo "loi xu ki du lieu".$e->getMessage();
    }finally{
        unset($conn);
    }
    return $result;
};
// ham them vao mot dong du lieu trong bang table
//la mot mang data bao gom co key va value
function insert($table,$data=array()){
    $conn=connection();
    try{
        $sql = "INSERT INTO $table SET ";
        //dung vong lap de lay du lieu tu mang
        foreach($data as $key=>$value){
            $sql.="$key=:$key, ";
        }
        //rtrim xoa bo 1 ki tu cuoi cung ben tay phai
        $sql=rtrim($sql,", ");
        $stmt = $conn->prepare($sql);
        //ham excute co the nhan tham so dang mang maf ko can dung cau lenh bind param
        $stmt->execute($data);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
    }catch(PDOException $e){
        echo "loi xu ki du lieu".$e->getMessage();
    }finally{
        unset($conn);
    }
    return $result;
};
//update mot dong du lieu trong bang table
function update($table,$data=array(),$id,$value_id){
        $conn=connection();
        try{
            $sql = "UPDATE $table SET ";
            foreach($data as $key=>$value){
                $sql.="$key =:$key, ";
            }
            $sql=rtrim($sql,", ");
            $data[$id]=$value_id; // them key id vao mang data
            $sql.=" WHERE $id=:$id";
            $stmt = $conn->prepare($sql);
            $stmt->execute($data);
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
        }catch(PDOException $e){
            echo "loi xu ki du lieu".$e->getMessage();
        }finally{
            unset($conn);
        }
        return $result;
};
//xoa mot dong du lieu 
function delete($table,$id,$value_id){
    $conn = connection();
    try{
        $sql = "DELETE FROM $table WHERE $id=:$id";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(":$id",$value_id);
        $result=$stmt->execute();
    }catch(PDOException $e){
        echo "loi xu ki du lieu".$e->getMessage();
    }finally{
        unset($conn);
    }
    return $result;
}
//phuong thuc thuc thi cau lenh sql select
//tra ve gia tri la ban ghi lay duoc
function query($sql){
    $conn=connection();
    try{
        $stmt=$conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    catch(PDOException $e){
        echo "loi xu ki du lieu".$e->getMessage();
    }finally{
        unset($conn);
    }
    return $result;
}
//phuong thuc sql co dk
function query_where($table,$array){
    $conn = connection();
    try{
        $sql = "SELECT * From $table where $array[0] $array[1] :$array[0] ";
        $stmt=$conn->prepare($sql);
        $data = [$array[0]=>$array[1]];
        $stmt->execute($data);
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    catch(PDOException $e){
        echo "loi xu ki du lieu".$e->getMessage();
    }finally{
        unset($conn);
    }
    return $result;
}
?>