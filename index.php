<?php ob_start(); ?>
<?php
session_start();
include 'model/pdo.php';
include 'model/danhmuc.php';
include 'model/hanghoa.php';
include 'model/khachhang.php';
include 'model/tintuc.php';
include 'model/binhluan.php';
include 'model/donhang.php';
$listdanhmuc = loadall_danhmuc();
include 'site/header.php';

if(!isset($_SESSION['cart'])) $_SESSION['cart'] = [];

$productNew = loadNew_hanghoa();
$listGiay = loadGiay_hanghoa();
$listAo = loadAo_hanghoa();
$listPhuKien = loadPhuKien_hanghoa();
$listNews = loadHome_tintuc();
$dstop10 = loadall_sanpham_top10();


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
            $ten_danhmuc = load_ten_dm($id);
            $hanghoa_danhmuc = loadWhere_hanghoa($kyw, $id);
            include './site/product/product-by-category.php';
            break;
        case 'load-filter' :
            if(isset($_POST['btn-filter'])) {
                $value = $_POST['filterValue'];
                $hanghoa_danhmuc = filterPrice_hanghoa($value);
            }
            
            include 'site/product/product-by-category.php';
            break;
        case 'sapxep' :
            if(isset($_POST['btn-sx'])){
                $valuesx = $_POST['sapxephh'];
                $hanghoa_danhmuc = thutuhh($valuesx);
            }
            include 'site/product/product-by-category.php';
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
                    $thongbao = "Đăng ký tài khoản thành công !";
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
                    $thongbao = "Mật khẩu đã được gửi đến email của bạn !";
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
                }elseif(exist_khachhang($user) != $user){
                    $thongbao ="Tên đăng nhập không chính xác ! Vui lòng nhập lại !";
                }elseif(exitmk_khachhang($pass) != $pass){
                    $thongbao ="Mật khẩu không chính xác ! Vui lòng nhập lại !";
                }
                else {
                    $thongbao = "Tài khoản không tồn tại";
                    
                }
            }
            include 'site/account/login.php';
            break;
        case 'logout':
            session_unset();
            header("Location: index.php");
            break;
        case 'update-info' :
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
                $_SESSION['user'] = checkuser($user,$pass);
                $thongbao = "Tài khoản đã dược cập nhật !";
            }
            include "site/account/info-update.php";
            break;
        case 'info-acc' :
            $listbill = loadAll_byKH_hoadon($_SESSION['user']['ma_khachhang']);
            include "site/account/info.php";
            break;
        case 'addtocart':
            // add thông tin sp từ form add to cart đến session
            if(isset($_POST['add-cart'])) {
                $ma_hanghoa = $_POST['ma_hanghoa'];
                $ten_hanghoa = $_POST['ten_hanghoa'];
                $don_gia = $_POST['don_gia'];
                $hinh = $_POST['hinh'];
                $size = $_POST['size'];
                $so_luong = $_POST['quantity'];
                $thanh_tien = $don_gia * $so_luong;
                $productAdd = [$ma_hanghoa, $ten_hanghoa, $hinh, $don_gia, $size, $so_luong,$thanh_tien];
                array_push($_SESSION['cart'], $productAdd);
                $_SESSION['cart'];
            }
            include 'site/cart/viewcart.php';
            break;
        case 'delete-cart' :
            if(isset($_GET['id'])) {
                array_splice($_SESSION['cart'],$_GET['id'],1);
            }else{
                $_SESSION['cart']= [];
            }
            header('Location: index.php?act=viewcart');
            break;
        case 'viewcart' :
            include 'site/cart/viewcart.php';
            break;
        case 'checkout' :
            header('Location: ./site/cart/check-out.php');
            break;
        case 'billconfirm' :
            // Tao hoa don
            if(isset($_POST['btn-submit'])) {
                $iduser = $_SESSION['user']['ma_khachhang'];
                $name = $_POST['name'];
                $email = $_POST['email'];
                $tel = $_POST['tel'];
                $address = $_POST['address'];
                $note = $_POST['note'];
                $date = date("Y-m-d");
                $transport = $_POST['transport'];
                $paymentMethod = $_POST['payment'];
                $sumBill = sum_bill();

                $idbill = insert_bill($iduser,$name, $email, $address, $tel, $date, $transport, $paymentMethod, $sumBill, $note);

                //Insert into hoa_don_chi_tiet : $_SESSION['cart'] & idbill;

                foreach ($_SESSION['cart'] as $cart) {
                    insert_billDetail($cart[0], $cart[2], $cart[1], $cart[3], $cart[4], $cart[5], $cart[6], $idbill);
                    subpro_hoanghoa($cart[4], $cart[0], $cart[5]);
                }


                $_SESSION['cart'] = [];

            }
            // $bill = loadOne_bill($idbill);
            // $billDetails = loadAll_billDetail($idbill);
            // include 'site/cart/billconfirm.php';
            header('Location: index.php?act=info-acc');
            break;
        case 'mybill' :
            if(isset($_GET['id']) && ($_GET['id'] >0)) {
                $ma_hoadon = $_GET['id'];
                $bill = loadOne_bill($ma_hoadon);
                $listproduct = loadAll_billDetail($ma_hoadon);
            }
            include 'site/account/mybill.php'; 
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