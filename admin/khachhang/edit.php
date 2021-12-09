<div class="layout-right">
<div class="right-top">
            <div class="website-title">Trang quản trị websitie</div>
            <div class="admin-info">
              <?php 
                  if(isset($_SESSION['user'])) {
                    $hinh = $_SESSION['user']['hinh'];
                    echo '
                    <div class="admin-name">'.$_SESSION['user']['ten_dangnhap'].'</div>
                    <div class="admin-img"><img src="../uploads/'.$hinh.'"></div>
                    ';
                  }
              ?>
            </div>
          </div>


<?php 
    if(is_array($khachhang)) extract($khachhang);
?>

<div class="right-bgc">
            <div class="layout-function">
            <?php
              
                if(isset($thongbao) && ($thongbao != "")) {
                echo ' <div class="thongbao"><i class="far fa-check-circle"></i> '.$thongbao.'</div>';
                }
            
            ?>
              <div class="function-title">Cập nhật tài khoản</div>
              
            <div class="form-funtcion">
                <form action="index.php?act=update-acc" method="post" class="form-add--product" enctype="multipart/form-data">
                    <input type="hidden" name="ma_khachhang" value="<?=$ma_khachhang?>">
                    <label for="tendn">Tên đăng nhập</label>
                    <input type="text" name="user" id="tendn" value="<?=$ten_dangnhap?>">
                    <label for="pass">Mật khẩu</label>
                    <input type="password" name="pass" id="pass" value="<?=$mat_khau?>">
                    <label for="name">Họ tên</label>
                    <input type="text" name="name" id="name" value="<?=$ho_ten?>">
                    <label for="hinh">Hình đại diện</label>
                    <div class="edit-pro--img">
                        <img src="../uploads/<?=$hinh?>">
                    </div>
                    <input type="file" name="avatar" id="hinh">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" value="<?=$email?>">
                    <label for="phone">Số điện thoại</label>
                    <input type="text" name="phone" id="phone" value="<?=$so_dien_thoai?>">
                    <label for="address">Địa chỉ</label>
                    <input type="text" name="address" id="address" value="<?=$dia_chi?>">
                    <label for="">Vai trò</label>
                    <div class="role-boxed">
                        <?php
                            if($vai_tro == 0){
                                echo '
                                <label for="kh" class="role-label">Khách hàng</label>
                                <input type="radio" value="0" name="vaitro" id="kh" class="role-input" checked>
                                <label for="nv" class="role-label">Nhân viên</label>
                                <input type="radio" value="1" name="vaitro" id="nv" class="role-input">
                                ';
                            }else{
                                echo '
                                <label for="kh" class="role-label">Khách hàng</label>
                                <input type="radio" value="0" name="vaitro" id="kh" class="role-input">
                                <label for="nv" class="role-label">Nhân viên</label>
                                <input type="radio" value="1" name="vaitro" id="nv" class="role-input" checked>
                                ';
                            }
                        ?>
                      
                    </div>
                    
                    <button type="submit" name="btn-update">Cập nhật</button>
                    <button type="reset">Nhập lại</button>
                    <button> <a href="index.php?act=listkh"> Danh sách </a></button>
                </form>
            </div>

            </div>
          </div>
