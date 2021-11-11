<?php 
    include "../model/pdo.php";
    include "../model/danhmuc.php";
    include "../model/hanghoa.php";
    include "../model/khachhang.php";
    include "header.php";

    if(isset($_GET['act'])){
        $act=$_GET['act'];
        switch ($act) {
            case 'adddm' :
                if(isset($_POST['themmoi']) && $_POST['themmoi']){
                    $ten_danhmuc = $_POST['tenloai'];
                    if($ten_danhmuc == ""){
                        $thongbao2 = "Vui lòng nhập tên loại hàng";
                        echo $thongbao2;
                    }else{
                        insert_danhmuc($ten_danhmuc);
                        $thongbao2 = "THÊM THÀNH CÔNG";
                        echo $thongbao2;
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
                    $thongbao = "CẬP NHẬT THÀNH CÔNG";
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
                    $hinh=$_FILES['file']['name'];
                    $linkup = "../content/images/product/";
                    move_uploaded_file($_FILES['file']['tmp_name'], $linkup,$hinh);
                    $danhmuc = $_POST['danhmuc'];
                    $mota = $_POST['mota'];
                    $ngaynhap = date("Y-m-d");
                    insert_hanghoa($tensp, $dongia, $giamgia, $hinh, $danhmuc, $ngaynhap, $mota);
                    $thongbao ="THÊM THÀNH CÔNG";
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
                if(isset($_POST['themmoi']) && ($_POST['themmoi'])){
                    $ten_dangnhap = $_POST['user'];
                    $mat_khau = $_POST['pass'];
                    $email = $_POST['email'];
                    $so_dt = $_POST['sdt'];
                    $ho_ten = $_POST['fullname'];
                    $dia_chi = $_POST['address'];
                    $hinh = $_FILES['file']['name'];
                    $linkup = "img/";
                    move_uploaded_file($_FILES['file']['tmp_name'],$linkup,$hinh);
                    insert_khachhang($ten_dangnhap,$mat_khau,$ho_ten,$hinh,$so_dt,$email,$dia_chi);
                    $thongbao = "Thêm thành công";
                    echo $thongbao;
                }
                include "khachhang/add.php";
                break;
            case 'listtt' :
                include "tintuc/list.php";
                break;
            case 'addtt' :
                include "tintuc/add.php";
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