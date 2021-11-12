<?php 
    include "../model/pdo.php";
    include "../model/danhmuc.php";
    include "../model/hanghoa.php";
    include "../model/khachhang.php";
    include "../model/tintuc.php";
    include "../model/thongke.php";
    include "header.php";

    if(isset($_GET['act'])){
        $act=$_GET['act'];
        switch ($act) {
            case 'adddm' :
                if(isset($_POST['themmoi'])){
                    $ten_danhmuc = $_POST['tenloai'];
                    if($ten_danhmuc == ""){
                        $thongbao = "Vui lòng nhập tên loại hàng";
                    }else if(exist_danhmuc($ten_danhmuc)){
                        $thongbao = "Danh mục đã tồn tại !";
                    }else{
                        insert_danhmuc($ten_danhmuc);
                        $thongbao = "Thêm danh mục thành công !";
                        $ten_danhmuc = "";
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
                    $listhanghoa = loadAll_by_danhmuc($_GET['id']);
                    foreach ($listhanghoa as $hanghoa) {
                        extract($hanghoa);
                        deleteModel_hanghoa($ma_hanghoa);
                    }
                    deletePro_by_danhmuc($_GET['id']);
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
                    deleteModel_hanghoa($_GET['id']);
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
                    if($size == ""){
                        $thongbao = "Thêm thất bại. Không được để trống size mặt hàng !";
                    }else if($so_luong == ""){
                        $thongbao = "Thêm thất bại. Không được để trống số lượng mặt hàng !";
                    }else if(exist_model($size, $masp)){
                        $thongbao = "Thêm thất bại. Mặt hàng đã tồn tại size này !";
                    }else{
                        insertSL_hanghoa($masp, $size, $so_luong);
                        $thongbao = "Thêm số lượng thành công !";
                    }
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
            case 'edit-SL' :
                if(isset($_GET['id']) && ($_GET['id']) >0){
                    $model = loadOne_modelhh($_GET['id']);
                }
                include "hanghoa/editsl.php";
                break;
            case 'update-SL':
                if(isset($_POST['btn-update'])){
                    $ma_model = $_POST['ma_model'];
                    $size = $_POST['size'];
                    $so_luong = $_POST['so_luong'];
                    update_model($ma_model, $size, $so_luong);
                    $thongbao = "Sản phẩm đã được cập nhật !";
                }
                $listhanghoa = loadAll_hanghoa();
                include "hanghoa/list.php";
                break;
            case 'delete-SL' :
                if(isset($_GET['id']) && ($_GET['id'])>0){
                    delete_model($_GET['id']);
                    $thongbao = "Mặt hàng đã được xóa !";
                }
                $listhanghoa = loadAll_hanghoa();
                include "hanghoa/list.php";
                break;
            case 'addkh' :
                if(isset($_POST['btn-add'])){
                    $user = $_POST['user'];
                    $pass = $_POST['pass'];
                    $name = $_POST['name'];
                    $email = $_POST['email'];
                    $address = $_POST['address'];
                    $phone = $_POST['phone'];
                    $avatar = $_FILES['avatar']['name'];
                    //upload file
                    $target_dir = "../uploads/";
                    $target_file = $target_dir . basename($avatar);
                    move_uploaded_file($_FILES['avatar']['tmp_name'], $target_file);

                    if($user == ""){
                        $thongbao = "Không được để trống trên đăng nhập !";
                    }else if(exist_khachhang($user)){
                        $thongbao = "Tên đăng nhập đã tồn tại !";
                    }else if($pass == "") {
                        $thongbao = "Không được để trống mật khẩu !";
                    }else if(strlen($pass) < 5){
                        $thongbao = "Mật khẩu phải lớn hơn 5 ký tự !";
                    }else if($name == ""){
                        $thongbao = "Không được dể trống họ tên !";
                    }else if($email == ""){
                        $thongbao = "Không được để trống email !";
                    }else if($phone == ""){
                        $thongbao = "Không được để trống số điện thoại !";
                    }else if($address == ""){
                        $thongbao = "Không được để trống địa chỉ !";
                    }else{
                        insert_khachhang($user, $pass, $name, $address, $phone, $email, $avatar);
                        $thongbao = "Thêm tài khoản thành công !";
                        $user = "";
                        $pass = "";
                        $name = "";
                        $email = "";
                        $address = "";
                        $phone = "";
                    }
                }
                include "khachhang/add.php";
                break;
            case 'listkh' :
                $listkhachhang = loadAll_khachhang();
                include "khachhang/list.php";
                break;
            case 'edit-acc':
                if(isset($_GET['id']) && ($_GET['id'])>0){
                    $khachhang = loadOne_khachhang($_GET['id']);
                }
                include "khachhang/edit.php";
                break;
            case 'update-acc':
            if(isset($_POST['btn-update'])){
                $ma_khachhang = $_POST['ma_khachhang'];
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                $name = $_POST['name'];
                $email = $_POST['email'];
                $address = $_POST['address'];
                $phone = $_POST['phone'];
                $role = $_POST['vaitro'];
                $avatar = $_FILES['avatar']['name'];
                //upload file
                $target_dir = "../uploads/";
                $target_file = $target_dir . basename($avatar);
                move_uploaded_file($_FILES['avatar']['tmp_name'], $target_file);
                update_khachhang($user, $pass, $name, $address, $phone, $email, $role, $avatar, $ma_khachhang);
                $thongbao = "Tài khoản đã dược cập nhật !";
            }
            $listkhachhang = loadAll_khachhang();
            include "khachhang/list.php";
            break;
            case 'delete-acc':
            if(isset($_GET['id']) && ($_GET['id'])>0){
                delete_khachhang($_GET['id']);
                $thongbao = "Tài khoản đã được xóa !";
            }
            $listkhachhang = loadAll_khachhang();
            include "khachhang/list.php";
            break;
            case 'listhd' :
                include "hoadon/list.php";
                break;
            case 'listbl' :
                include "binhluan/list.php";
                break;
            case 'addtt' :
                if(isset($_POST['themmoi'])){
                    $tieude = $_POST['tieude'];
                    $noidung = $_POST['noidung'];
                    $ngaydang = date("Y-m-d");
                    $hinh = $_FILES['file']['name'];
                    $target_dir = "../uploads/";
                    $target_file = $target_dir . basename($hinh);
                    move_uploaded_file($_FILES['file']['tmp_name'], $target_file);
                    $tomtat = $_POST['tomtat'];
                    if($tieude == ""){
                        $thongbao = "Không được để trống tiêu đề !";
                    }else if($noidung == ""){
                        $thongbao = "Không được để trống nội dung !";
                    }else if($tomtat == ""){
                        $thongbao = "Không được để trống tóm tắt !";
                    }else if($hinh == ""){
                        $thongbao = "Vui lòng thêm hình mô tả cho tin tức !";
                    }else{
                        insert_tintuc($tieude,$noidung,$ngaydang,$hinh,$tomtat);
                        $thongbao = "Thêm tin tức thành công !";
                        $tieude = "";
                        $noidung = "";
                        $hinh = "";
                        $tomtat = "";
                    }
                    
                }
                include "tintuc/add.php";
                break;
            case 'listtt' :
                $listtintuc = loadAll_tintuc();
                include "tintuc/list.php";
                break;
            case 'delete-tt' :
                if(isset($_GET['id']) && ($_GET['id'])>0){
                    delete_tintuc($_GET['id']);
                    $thongbao = "Tin tức đã được xóa";
                }
                $listtintuc = loadAll_tintuc();
                include "tintuc/list.php";
                break;
            case 'update-tt':
                if(isset($_POST['btn-update'])){
                    $ma_tintuc = $_POST['ma_tintuc'];
                    $tieude = $_POST['tieude'];
                    $noidung = $_POST['noidung'];
                    $hinh = $_FILES['file']['name'];
                    //upload file
                    $target_dir = "../uploads/";
                    $target_file = $target_dir . basename($hinh);
                    move_uploaded_file($_FILES['file']['tmp_name'], $target_file);
                    $tomtat = $_POST['tomtat'];
                    update_tintuc($tieude, $noidung, $hinh, $tomtat,$ma_tintuc);
                    $thongbao = "Tin tức đã được cập nhật !";
                }
                $listtintuc = loadAll_tintuc();
                include "tintuc/list.php";
                break;
            case 'edit-tt':
                if(isset($_GET['id']) && ($_GET['id'])>0){
                    $tintuc = loadOne_tintuc($_GET['id']);
                }
                include "tintuc/edit.php";
                break;
            case 'list-tk':
                $listthongke = loadAll_thongke();
                include 'thongke/list.php';
                break;
            case 'chart-tk':
                $listthongke = loadAll_thongke();
                include 'thongke/chart.php';
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