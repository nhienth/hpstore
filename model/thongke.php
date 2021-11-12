<?php

function loadAll_thongke() {
    $sql = "SELECT DM.ten_danhmuc as ten_danhmuc, count(HH.ma_danhmuc) as countSP, min(HH.don_gia) as minPrice, max(HH.don_gia) as maxPrice, avg(HH.don_gia) as avgPrice ";
    $sql.= " FROM danh_muc DM left join hang_hoa HH on DM.ma_danhmuc = HH.ma_danhmuc";
    $sql.= " GROUP BY DM.ma_danhmuc ORDER BY DM.ma_danhmuc DESC";
    $listthongke = pdo_query($sql);
    return $listthongke;
}

// function loadAll_thongke() {
//     $sql = "SELECT DM.ten_danhmuc as ten_danhmuc, count(HH.ma_danhmuc) as countSP, min(HH.don_gia) as minPrice, max(HH.don_gia) as maxPrice, avg(HH.don_gia) as avgPrice"
// }
// function loadAll_thongke() {
//     $sql = "SELECT LH.ten_loai as ten_loai, count(HH.ma_loai) as countSP, min(HH.don_gia) as minPrice, max(HH.don_gia) as maxPrice, avg(HH.don_gia) as avgPrice";
//     $sql.= " FROM loai LH left join hang_hoa HH on LH.ma_loai = HH.ma_loai";
//     $sql.= " GROUP BY LH.ma_loai ORDER BY LH.ma_loai ASC";
//     $listStatistical = pdo_query($sql);
//     return $listStatistical;
// }


?>