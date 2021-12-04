<?php

function loadAll_thongke() {
    $sql = "SELECT DM.ten_danhmuc as ten_danhmuc, count(HH.ma_danhmuc) as countSP, min(HH.don_gia) as minPrice, max(HH.don_gia) as maxPrice, avg(HH.don_gia) as avgPrice ";
    $sql.= " FROM danh_muc DM left join hang_hoa HH on DM.ma_danhmuc = HH.ma_danhmuc";
    $sql.= " GROUP BY DM.ma_danhmuc ORDER BY DM.ma_danhmuc DESC";
    $listthongke = pdo_query($sql);
    return $listthongke;
}

function thongke_hanghoa() {
    $sql = "SELECT DM.ten_danhmuc as ten_danhmuc, count(HH.ma_danhmuc) as countSP, sum(MD.so_luong) as so_luong, min(MD.so_luong) as sl_min, max(MD.so_luong) as sl_max, avg(MD.so_luong) as sl_avg";
    $sql.= " FROM danh_muc DM join hang_hoa HH on DM.ma_danhmuc = HH.ma_danhmuc join model_hang_hoa MD on HH.ma_hanghoa = MD.ma_hanghoa";
    $sql.= " GROUP BY DM.ma_danhmuc ORDER BY DM.ma_danhmuc DESC";
    return pdo_query($sql);
}

?>