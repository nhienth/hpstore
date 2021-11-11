<div class="layout-right">
<div class="right-top">
            <div class="website-title">Trang quản trị websitie</div>
            <div class="admin-info">
              <div class="admin-name">ADMIN</div>
              <div class="admin-img">
                <img src="../content/images/home/ec9a4c0a7f3aea8a819354a0933540ad.jpg" alt="">
              </div>
            </div>
          </div>

<div class="right-bgc">
            <div class="layout-function">
            <?php
              
                if(isset($thongbao) && ($thongbao != "")) {
                echo ' <div class="thongbao"><i class="far fa-check-circle"></i> '.$thongbao.'</div>';
                }
            
            ?>
              <div class="function-title">Thêm tài khoản</div>
              
            <div class="form-funtcion">
                <form action="index.php?act=addkh" method="post" class="form-add--product" enctype="multipart/form-data">
                    <label for="tendn">Tên đăng nhập</label>
                    <input type="text" name="user" id="tendn" value="<?php if(isset($user)) echo $user ?>">
                    <label for="pass">Mật khẩu</label>
                    <input type="password" name="pass" id="pass" value="<?php if(isset($pass)) echo $pass ?>">
                    <label for="name">Họ tên</label>
                    <input type="text" name="name" id="name" value="<?php if(isset($name)) echo $name ?>">
                    <label for="hinh">Hình ảnh</label>
                    <input type="file" name="avatar" id="hinh">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" value="<?php if(isset($email)) echo $email ?>">
                    <label for="phone">Số điện thoại</label>
                    <input type="text" name="phone" id="phone" value="<?php if(isset($phone)) echo $phone ?>">
                    <label for="address">Địa chỉ</label>
                    <input type="text" name="address" id="address" value="<?php if(isset($address)) echo $address ?>">
                    <!-- <input type="submit" name="btn-add" value="Thêm tài khoản" > -->
                    <button type="submit" name="btn-add">Thêm tài khoản</button>
                    <button type="reset">Nhập lại</button>
                    <button> <a href="index.php?act=listkh"> Danh sách </a></button>
                </form>
            </div>

            </div>
          </div>
