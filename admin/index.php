<?php 
    include "../model/pdo.php";
    include "../model/danhmuc.php";
    include "../model/hanghoa.php";
    include "header.php";

    if(isset($_GET['act'])){
        $act=$_GET['act'];
        switch ($act) {
            case 'adddm' :
                if(isset($_POST['themmoi'])){
                    $ten_danhmuc = $_POST['tenloai'];
                    if($ten_danhmuc == ""){
                        $thongbao = "Vui lòng nhập tên loại hàng";
                    }else{
                        insert_danhmuc($ten_danhmuc);
                        $thongbao = "Thêm danh mục thành công !";
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
                    $thongbao = "Danh mục đã được xóa !";
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
                if(isset($_POST['capnhat'])){
                    $ten_danhmuc=$_POST['tenloai'];
                    $ma_danhmuc=$_POST['maloai'];
                    update_danhmuc($ma_danhmuc,$ten_danhmuc);
                    $thongbao = "Danh mục đã được cập nhật !";
                }
                $listdanhmuc=loadall_danhmuc();
                include "danhmuc/list.php";
                break;
                // controller phần hàng hóa 
            case 'addhh' :
                $listdanhmuc=loadall_danhmuc();
                if(isset($_POST['themmoi']) ){
                    $tensp = $_POST['tensp'];
                    $dongia = $_POST['dongia'];
                    $giamgia = $_POST['giamgia'];
                    $hinhpath = $_FILES['anhsp']['name'];
                    //upload file
                    $target_dir = "../uploads/";
                    $target_file = $target_dir . basename($hinhpath);
                    move_uploaded_file($_FILES['anhsp']['tmp_name'], $target_file);
                    $danhmuc = $_POST['danhmuc'];
                    $mota = $_POST['mota'];
                    $ngaynhap = date("Y-m-d");
                    insert_hanghoa($tensp, $dongia, $giamgia, $hinhpath, $danhmuc, $ngaynhap, $mota);
                    $thongbao ="Thêm sản phẩm thành công !";
                }
                include "hanghoa/add.php";
                break;
            case 'delete-pro':
                if(isset($_GET['id']) && ($_GET['id'])>0){
                    delete_hanghoa($_GET['id']);
                    $thongbao ="Đã xóa sản phẩm !";
                }
                $listhanghoa = loadAll_hanghoa();
                include 'hanghoa/list.php';
                break;
            case 'add-sl':
                if(isset($_GET['id']) && ($_GET['id'])>0){
                    $hanghoa = loadOne_hanghoa($_GET['id']);
                }
                include "hanghoa/addsl.php";
                break;
            case 'addsll' :
                if(isset($_POST['btn-addsl'])){
                    $masp = $_POST['ma_hanghoa'];
                    $size = $_POST['size'];
                    $so_luong = $_POST['so_luong'];
                    insertSL_hanghoa($masp, $size, $so_luong);
                    $thongbao = "Thêm số lượng thành công !";
                }
                $listhanghoa = loadAll_hanghoa();
                include "hanghoa/list.php";
                break;
            case 'chitietsl' :
                if(isset($_GET['id']) && ($_GET['id'])>0){
                    $listhanghoa = loadSP_by_ID($_GET['id']);
                    $ten_hanghoa = loadTen_hanghoa($_GET['id']);
                }
                include "hanghoa/listsl.php";
                break;
            case 'edit-pro' :
                if(isset($_GET['id']) && ($_GET['id'])>0){
                    $listdanhmuc=loadall_danhmuc();
                    $hanghoa = loadOne_hanghoa($_GET['id']);
                }
                include 'hanghoa/edit.php';
                break;
            case 'update-pro':
                if(isset($_POST['btn-update'])){
                    $ma_hanghoa = $_POST['ma_hanghoa'];
                    $tensp = $_POST['tensp'];
                    $dongia = $_POST['dongia'];
                    $giamgia = $_POST['giamgia'];
                    $hinhpath = $_FILES['anhsp']['name'];
                    //upload file
                    $target_dir = "../uploads/";
                    $target_file = $target_dir . basename($hinhpath);
                    move_uploaded_file($_FILES['anhsp']['tmp_name'], $target_file);
                    $danhmuc = $_POST['danhmuc'];
                    $mota = $_POST['mota'];
                    update_hanghoa($tensp, $dongia, $giamgia, $hinhpath, $danhmuc, $mota, $ma_hanghoa);
                    $thongbao ="Cập nhật sản phẩm thành công !";
                }
                $listhanghoa = loadAll_hanghoa();
                include 'hanghoa/list.php';
                break;
            case 'listhh' :
                $listhanghoa = loadAll_hanghoa();
                include "hanghoa/list.php";
                break;
            case 'listkh' :
                include "khachhang/list.php";
                break;
            case 'listhd' :
                include "hoadon/list.php";
                break;
            case 'listbl' :
                include "binhluan/list.php";
                break;
            case 'addkh' :
                include "khachhang/add.php";
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