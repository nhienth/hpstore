
<?php

function insert_khachhang($user, $pass, $name, $address, $phone, $email, $avatar){
    $sql = "INSERT INTO khach_hang(ten_dangnhap, mat_khau, ho_ten, hinh, so_dien_thoai, email, dia_chi) VALUES ('$user', '$pass', '$name', '$avatar', '$phone', '$email', '$address')";
    pdo_execute($sql);
}

function loadAll_khachhang(){
    $sql ="SELECT * FROM khach_hang";
    return pdo_query($sql);
}

function loadOne_khachhang($ma_khachhang){
    $sql = "SELECT * FROM khach_hang WHERE ma_khachhang =".$ma_khachhang;
    return pdo_query_one($sql);
}

function update_khachhang($user, $pass, $name, $address, $phone, $email, $role, $avatar, $ma_khachhang){
    if($avatar != ""){
        $sql = "UPDATE khach_hang SET ten_dangnhap = '".$user."', mat_khau = '".$pass."', ho_ten = '".$name."', hinh = '".$avatar."', so_dien_thoai = '".$phone."', email = '".$email."', dia_chi = '".$address."', vai_tro = '".$role."' WHERE ma_khachhang =".$ma_khachhang;
    }else{
        $sql = "UPDATE khach_hang SET ten_dangnhap = '".$user."', mat_khau = '".$pass."', ho_ten = '".$name."', so_dien_thoai = '".$phone."', email = '".$email."', dia_chi = '".$address."', vai_tro = '".$role."' WHERE ma_khachhang =".$ma_khachhang;
    }
    pdo_execute($sql);
}

function update_khachhang2($user,$name,$address,$phone,$email,$avatar,$ma_khachhang){
    if($avatar != ""){
        $sql = "UPDATE khach_hang SET ten_dangnhap = '".$user."',  ho_ten = '".$name."', hinh = '".$avatar."', so_dien_thoai = '".$phone."', email = '".$email."', dia_chi = '".$address."' WHERE ma_khachhang =".$ma_khachhang;
    }else{
        $sql = "UPDATE khach_hang SET ten_dangnhap = '".$user."',  ho_ten = '".$name."', so_dien_thoai = '".$phone."', email = '".$email."', dia_chi = '".$address."' WHERE ma_khachhang =".$ma_khachhang;
    }
    pdo_execute($sql);
}    

function countAll_khachhang(){
    $sql = "SELECT COUNT(*) FROM khach_hang";
    return pdo_query_value($sql);
}

function delete_khachhang($ma_khachhang) {
    $sql = "DELETE FROM khach_hang WHERE ma_khachhang =".$ma_khachhang;
    pdo_execute($sql);
}

function exist_khachhang($user){
    $sql = "SELECT count(*) FROM khach_hang WHERE ten_dangnhap LIKE '%".$user."%' ";
    $isExist = pdo_query_value($sql);
    return $isExist > 0;
}

function exitmk_khachhang($pass){
    $sql = "SELECT count(*) FROM khach_hang WHERE mat_khau LIKE '%".$pass."%' ";
    $isExist = pdo_query_value($sql);
    return $isExist > 0;
}

function laymk($user,$email){
    $sql = "SELECT * FROM khach_hang WHERE ten_dangnhap = '".$user."' AND email = '".$email."'";
    return pdo_query_one($sql);
}

function checkuser($user,$pass){
    $sql = "SELECT * FROM khach_hang WHERE ten_dangnhap = '".$user."' AND mat_khau = '".$pass."'";
    return pdo_query_one($sql);
}

function update_matkhaunew($pass2,$id){
    $sql = "UPDATE khach_hang SET mat_khau ='".$pass2."' where ma_khachhang =".$id;
    pdo_execute($sql);

}

?>