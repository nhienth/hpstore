<?php

function insert_binhluan($ma_khachhang,$ten_dangnhap,$ten_khachhang,$ma_hanghoa,$avatar,$content,$date) {
    $sql = "INSERT INTO binh_luan(noi_dung, ma_hanghoa, ma_khachhang, ten_dangnhap, ten_khachhang, avatar, ngay_binhluan) VALUES ('$content','$ma_hanghoa','$ma_khachhang','$ten_dangnhap','$ten_khachhang','$avatar','$date')";
    pdo_execute($sql);
} 

function selectAll_binhluan($id) {
    $sql = "SELECT * FROM binh_luan WHERE ma_hanghoa = '".$id."' ORDER BY ma_binhluan DESC";
    $listcomment = pdo_query($sql);
    return $listcomment;
}

function thongke_binhluan() {
    $sql = "SELECT HH.ma_hanghoa as ma_hanghoa , HH.ten_hanghoa as ten_hanghoa, count(*) as so_luong, min(BL.ngay_binhluan) as cu_nhat, max(BL.ngay_binhluan) as moi_nhat";
    $sql.= " FROM binh_luan BL join hang_hoa HH on BL.ma_hanghoa = HH.ma_hanghoa";
    $sql.= " GROUP BY HH.ma_hanghoa, HH.ten_hanghoa HAVING so_luong > 0";
    return pdo_query($sql);
}

function thongke_donhang($value) {
    $sql = "SELECT HH.ma_danhmuc AS ma_danhmuc, HDCT.ma_hanghoa AS ma_hanghoa, HDCT.ten_hanghoa AS ten_hanghoa, sum(HDCT.so_luong) AS so_luong, sum(HDCT.thanh_tien) AS tong_tien, HDCT.hinh AS hinh";
    $sql.= " FROM hoa_don_chi_tiet HDCT JOIN hoa_don HD on HD.ma_hoadon = HDCT.idbill";
    $sql.= " JOIN hang_hoa HH on HH.ma_hanghoa = HDCT.ma_hanghoa";
    if($value == 1){
        $sql.= " WHERE HD.trang_thai = 3 GROUP BY HDCT.ma_hanghoa, HDCT.ten_hanghoa HAVING so_luong > 0 ORDER BY so_luong DESC LIMIT 5";
    }else if($value == 2) {
        $sql.= " WHERE HD.trang_thai = 3 GROUP BY HDCT.ma_hanghoa, HDCT.ten_hanghoa HAVING so_luong > 0 ORDER BY so_luong ASC LIMIT 5";
    }else{
        $sql.= " WHERE HD.trang_thai = 3 GROUP BY HDCT.ma_hanghoa, HDCT.ten_hanghoa HAVING so_luong > 0";
    }
    return pdo_query($sql);
}

function countAll_binhluan() {
    $sql = "SELECT count(*) FROM binh_luan";
    return pdo_query_value($sql);
}

function selectId_binhluan($ma_hanghoa) {
    $sql = "SELECT BL.*, HH.ten_hanghoa as ten_hanghoa";
    $sql .= " FROM binh_luan BL join hang_hoa HH on BL.ma_hanghoa = HH.ma_hanghoa WHERE BL.ma_hanghoa = '".$ma_hanghoa."' ORDER BY ngay_binhluan DESC";
    return pdo_query($sql);
}

function delete_binhluan($ma_binhluan) {
    $sql = "DELETE FROM binh_luan WHERE ma_binhluan =".$ma_binhluan;
    pdo_execute($sql);
}

function countCP_binhluan($ma_hanghoa) {
    $sql = "SELECT count(*) FROM binh_luan WHERE ma_hanghoa=".$ma_hanghoa;
    return pdo_query_value($sql);
}

function deleteCmt_hanghoa($ma_hanghoa) {
    $sql = "DELETE FROM binh_luan WHERE ma_hanghoa =".$ma_hanghoa;
    pdo_execute($sql);
}

?>