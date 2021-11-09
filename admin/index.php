<?php 
    include "../model/pdo.php";
    include "../model/danhmuc.php";
    include "../model/hanghoa.php";
    include "header.php";

    if(isset($_GET['act'])){
        $act=$_GET['act'];
        switch ($act) {
            case 'adddm' :
                if(isset($_POST['themmoi']) && $_POST['themmoi']){
                    $ten_danhmuc = $_POST['tenloai'];
                    if($ten_danhmuc == ""){
                        echo "Vui lòng nhập tên loại hàng";
                    }else{
                        insert_danhmuc($ten_danhmuc);
                        echo "Thêm thành công";
                    }
                }
                include "danhmuc/add.php";
                break;
            case 'listdm' :
                $listdanhmuc = loadall_danhmuc();
                include "danhmuc/list.php";
                break;
            case 'xoadm' :
                if(isset($_GET['id'])&&($_GET['id']>0)){
                    delete_danhmuc($_GET['id']);
                }
                $listdanhmuc=loadall_danhmuc();
                include "danhmuc/list.php";
                break;
            case 'suadm' :
                if(isset($_GET['id'])&&($_GET['id']>0)){
                    $dm=loadone_danhmuc($_GET['id']);
                }
                include "danhmuc/update.php";
                break;
            case 'updatedm' :
                if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
                    $ten_danhmuc=$_POST['tenloai'];
                    $ma_danhmuc=$_POST['maloai'];
                    update_danhmuc($ma_danhmuc,$ten_danhmuc);
                    $thongbao = "Cập nhật thành công";
                }
                $listdanhmuc=loadall_danhmuc();
                include "danhmuc/list.php";
                break;
            case 'addhh' :
                $listdanhmuc=loadall_danhmuc();
                if(isset($_POST['btn-add']) && ($_POST['btn-add'])){
                    $tensp = $_POST['tensp'];
                    $dongia = $_POST['dongia'];
                    $giamgia = $_POST['giamgia'];
                    $hinh = $_POST['img'];
                    $danhmuc = $_POST['danhmuc'];
                    $mota = $_POST['mota'];
                    $ngaynhap = date("Y-m-d");
                    insert_hanghoa($tensp, $dongia, $giamgia, $hinh, $danhmuc, $ngaynhap, $mota);
                    $thongbao ="Theem thafnh cong";
                }
                include "hanghoa/add.php";
                break;
            case 'addsl':
                if(isset($_GET['id']) && ($_GET['id'])>0){
                    $hanghoa = loadOne_hanghoa($_GET['id']);
                }
                include "hanghoa/addsl.php";
                break;
            case 'addsl2' :
                if(isset($_POST['btn-addsl']) && ($_POST['btn-addsl'])){
                    $masp = $_POST['ma_hanghoa'];
                    $size = $_POST['size'];
                    $so_luong = $_POST['so_luong'];
                    insertSL_hanghoa($masp, $size, $so_luong);
                }
                $listhanghoa = loadAll_hanghoa();
                include "hanghoa/list.php";
                break;
            case 'chitiethh' :
                if(isset($_GET['id']) && ($_GET['id'])>0){
                    $listhanghoa = loadSP_by_ID($_GET['id']);
                    $ten_hanghoa = loadTen_hanghoa($_GET['id']);
                }
                include "hanghoa/details.php";
                break;
            case 'listkh' :
                include "danhmuc/add.php";
                break;
            case 'listbl' :
                include "binhluan/list.php";
                break;
            case 'listhh' :
                $listhanghoa = loadAll_hanghoa();
                include "hanghoa/list.php";
                break;
            default :
                include "home.php";
                break;
        }
        
    }else{
        include "home.php";
    }
    include "footer.php";
?>