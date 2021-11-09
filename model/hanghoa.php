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

?>