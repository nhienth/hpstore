<?php ob_start(); ?>
<?php
session_start();
include 'model/pdo.php';
include 'model/danhmuc.php';
include 'model/hanghoa.php';
include 'model/khachhang.php';
include 'model/tintuc.php';
include 'model/binhluan.php';
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
        case 'dangki' :
            if(isset($_POST['btn-add'])){
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                $name = $_POST['name'];
                $email = $_POST['email'];
                $address = $_POST['address'];
                $phone = $_POST['phone'];
                $avatar = $_FILES['avatar']['name'];
                //upload file
                $target_dir = "./uploads/";
                $target_file = $target_dir . basename($avatar);
                move_uploaded_file($_FILES['avatar']['tmp_name'], $target_file);

                if($user == ""){
                    $thongbao = "Không được để trống trên đăng nhập !";
                }else if(exist_khachhang($user)){
                    $thongbao = "Tên đăng nhập đã tồn tại !";
                }else if($pass == "") {
                    $thongbao = "Không được để trống mật khẩu !";
                }
                else if(strlen($pass) < 5){
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
            include "site/account/register.php";
            break;
        case 'quenmk' :
            if(isset($_POST['laylaimk'])){
                $user = $_POST['user'];
                $email = $_POST['email'];
                $check = laymk($user,$email);
                if(is_array($check)){
                    $thongbao = "Mật khẩu của bạn là :".$check['mat_khau'];
                }else {
                    $thongbao = "Tài khoản không tồn tại";
                }
            }
            include "site/account/forget-pass.php";
                break;
        case 'dangnhap' :
            if(isset($_POST['dangnhap'])){
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                $checkuser = checkuser($user,$pass);
                if(is_array($checkuser)){
                    $_SESSION['user'] = $checkuser;
                    header("location: index.php");
                }else {
                    $thongbao = "Tài khoản không tồn tại";
                }
            }
            include 'site/account/login.php';
            break;
        case 'logout':
            session_unset();
            header("Location: index.php");
            break;
        case 'update-tk' :
            if(isset($_POST['btn-update'])){
                $ma_khachhang = $_POST['ma_khachhang'];
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                $name = $_POST['name'];
                $email = $_POST['email'];
                $address = $_POST['address'];
                $phone = $_POST['phone'];
                $avatar = $_FILES['avatar']['name'];
                //upload file
                $target_dir = "./uploads/";
                $target_file = $target_dir . basename($avatar);
                move_uploaded_file($_FILES['avatar']['tmp_name'], $target_file);
                update_khachhang2($user,$pass,$name,$address,$phone,$email,$avatar,$ma_khachhang);
                
                $_SESSION['user'] =checkuser($user,$pass);
                header("location: index.php?act=update-tk");
                $thongbao = "Tài khoản đã dược cập nhật !";
                // header("Location: site/account/info.php");
            }
            include "site/account/info.php";
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
<?php ob_end_flush(); ?>