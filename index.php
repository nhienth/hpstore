<?php
include 'model/pdo.php';
include 'model/danhmuc.php';
include 'model/hanghoa.php';
include 'model/khachhang.php';
include 'model/tintuc.php';
$listdanhmuc = loadall_danhmuc();
include 'site/header.php';

$productNew = loadNew_hanghoa();
$listGiay = loadGiay_hanghoa();
$listAo = loadAo_hanghoa();
$listPhuKien = loadPhuKien_hanghoa();
$listNews = loadHome_tintuc();



if(isset($_GET['act']) && ($_GET['act'] != "")){
    $act = $_GET['act'];
    switch ($act) {
        case 'hanghoa':
            if(isset($_POST['kyw']) && ($_POST['kyw']!="")) {
                $kyw = $_POST['kyw'];
            }else{
                $kyw = "";
            }
            if(isset($_GET['iddm']) && ($_GET['iddm'])>0) {
                $id = $_GET['iddm'];
            }else{
                $id = 0;
            }
            $ten_danhmuc = loadTen_danhmuc($id);
            $hanghoa_danhmuc = loadWhere_hanghoa($kyw, $id);
            include './site/product/product-by-category.php';
            break;
        case 'details-pro' :
            if(isset($_GET['id']) && ($_GET['id']>0)){
                $id = $_GET['id'];
                addViews_hanghoa($id);
                $hanghoa = loadOne_hanghoa($id);
                extract($hanghoa);
                $listModel = loadSP_by_ID($ma_hanghoa);
                $hanghoacungloai = selectCungloai_hanghoa($ma_danhmuc,$ma_hanghoa);
                $listGoiY = loadGoiy_hanghoa();
                $sumSL = sum_soLuong($ma_hanghoa);
                include 'site/product/details.php';
            }else{
                include 'site/home.php';
            }
            break;
        default:
            include 'site/home.php';
            break;
    }

}else{
    include 'site/home.php';
}

include 'site/footer.php';



?>