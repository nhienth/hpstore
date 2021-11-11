<?php

function insert_hanghoa($tensp, $dongia, $giamgia, $hinh, $danhmuc, $ngaynhap, $mota) {
    $sql = "INSERT INTO hang_hoa(ten_hanghoa, don_gia, giam_gia, hinh, ma_danhmuc, ngay_nhap, mo_ta) VALUES('$tensp','$dongia','$giamgia','$hinh','$danhmuc','$ngaynhap','$mota')";
    pdo_execute($sql);
}

function loadAll_hanghoa(){
    $sql = "SELECT * FROM hang_hoa";
    $listhanghoa = pdo_query($sql);
    return $listhanghoa;
}

function loadOne_hanghoa($ma_hanghoa){
    $sql ="SELECT * FROM hang_hoa WHERE ma_hanghoa=".$ma_hanghoa;
    $hanghoa = pdo_query_one($sql);
    return $hanghoa;
}

function  insertSL_hanghoa($masp, $size, $so_luong){
    $sql = "INSERT INTO model_hang_hoa(ma_hanghoa, size, so_luong) VALUES ('$masp','$size','$so_luong')";
    pdo_execute($sql);
}

function loadSP_by_ID($ma_hanghoa){
    $sql = "SELECT * FROM hang_hoa HH join model_hang_hoa MDHH on MDHH.ma_hanghoa = HH.ma_hanghoa WHERE HH.ma_hanghoa =".$ma_hanghoa;
    $listhanghoa = pdo_query($sql);
    return $listhanghoa;
}

function loadTen_hanghoa($ma_hanghoa){
    $sql = "SELECT * FROM hang_hoa where ma_hanghoa=".$ma_hanghoa;
    $hanghoa = pdo_query_one($sql);
    extract($hanghoa);
    return $ten_hanghoa;
}

function delete_hanghoa($ma_hanghoa){
    $sql ="DELETE FROM hang_hoa WHERE ma_hanghoa=".$ma_hanghoa;
    pdo_execute($sql);
}

function deleteModel_hanghoa($ma_hanghoa){
    $sql = "DELETE FROM model_hang_hoa WHERE ma_hanghoa =".$ma_hanghoa;
    pdo_execute($sql);
}

function update_hanghoa($tensp, $dongia, $giamgia, $hinhpath, $danhmuc, $mota, $ma_hanghoa){
    if($hinhpath != ""){
        $sql = "UPDATE hang_hoa SET ten_hanghoa = '".$tensp."', don_gia = '".$dongia."', giam_gia = '".$giamgia."', hinh = '".$hinhpath."', ma_danhmuc = '".$danhmuc."', mo_ta = '".$mota."' WHERE ma_hanghoa =".$ma_hanghoa;
    }else{
        $sql = "UPDATE hang_hoa SET ten_hanghoa = '".$tensp."', don_gia = '".$dongia."', giam_gia = '".$giamgia."', ma_danhmuc = '".$danhmuc."', mo_ta = '".$mota."' WHERE ma_hanghoa =".$ma_hanghoa;
    }
    pdo_execute($sql);
}

function countAll_hanghoa(){
    $sql = "SELECT COUNT(*) FROM hang_hoa";
    $count = pdo_query_value($sql);
    return $count;
}


?>