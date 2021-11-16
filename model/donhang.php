<?php

function sum_bill() {
    $tong = 0;
    foreach ($_SESSION['cart'] as $cart) {
        $tmp_tong = $cart[3] * $cart[5];
        $tong+= $tmp_tong;
    }
    return $tong;
}

function insert_bill($name, $email, $address, $tel, $date, $transport, $paymentMethod, $sumBill) {
    $sql = "INSERT INTO hoa_don(ten_khachhang, dia_chi, dien_thoai, email, thanh_toan, van_chuyen, ngay_dat, tong_tien) VALUES ('$name','$address','$tel','$email','$paymentMethod','$transport','$date','$sumBill') ";
    return pdo_execute_return_lastInsertId($sql);
}

function insert_billDetail($ma_khachhang, $ma_hanghoa, $hinh, $ten_hanghoa, $gia, $size, $so_luong, $thanh_tien, $idill) {
    $sql = "INSERT INTO hoa_don_chi_tiet(ma_khachhang, ma_hanghoa, hinh, ten_hanghoa, gia, size, so_luong, thanh_tien, idbill) VALUES ('$ma_khachhang','$ma_hanghoa','$hinh','$ten_hanghoa','$gia','$size','$so_luong','$so_luong','$idill') ";
    pdo_execute($sql);
}

function loadOne_bill($id) {
    $sql = "SELECT * FROM hoa_don WHERE ma_hoadon=".$id;
    return pdo_query_one($sql);
}

function loadAll_billDetail($id) {
    $sql = "SELECT * FROM hoa_don_chi_tiet WHERE idbill=".$id;
    return pdo_query($sql);
}

function loadAll_hoadon() {
    $sql = "SELECT * FROM hoa_don ORDER BY ma_hoadon DESC";
    return pdo_query($sql);
}

function update_hoadon($ma_hoadon, $trang_thai) {
    $sql = "UPDATE hoa_don SET trang_thai = '".$trang_thai."' WHERE ma_hoadon =".$ma_hoadon;
    pdo_execute($sql);
}

function countAll_hoadon(){
    $sql = "SELECT COUNT(*) FROM hoa_don";
    $count = pdo_query_value($sql);
    return $count;
}

?>