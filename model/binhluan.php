<?php

function insert_binhluan($ma_khachhang,$ten_dangnhap,$ten_khachhang,$ma_hanghoa,$avatar,$content,$date) {
    $sql = "INSERT INTO binh_luan(noi_dung, ma_hanghoa, ma_khachhang, ten_dangnhap, ten_khachhang, avatar, ngay_binhluan) VALUES ('$content','$ma_hanghoa','$ma_khachhang','$ten_dangnhap','$ten_khachhang','$avatar','$date')";
    pdo_execute($sql);
}

function loadPro_binhluan($ma_hanghoa) {
    $sql = "SELECT * FROM binh_luan WHERE ma_hanghoa =".$ma_hanghoa;
    $listcomment = pdo_query($sql);
    return $listcomment;
}

?>