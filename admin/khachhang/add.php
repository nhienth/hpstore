<div class="layout-right">
<div class="right-top">
            <div class="website-title">Trang quản trị websitie</div>
            <div class="admin-info">
              <div class="admin-name">ADMIN</div>
              <div class="admin-img">
                <img src="../content/images/home/support-online.jpg" alt="">
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
                <form action="index.php?act=addkh" method="post" class="form-add--product">
                    <label for="">Tên đăng nhập</label>
                    <input type="text" name="user" id="">
                    <label for="">Mật khẩu</label>
                    <input type="password" name="pass" id="">
                    <label for="">Họ tên</label>
                    <input type="text" name="fullname" id="">
                    <label for="">Hình ảnh</label>
                    <input type="file" name="file">
                    <label for="">Email</label>
                    <input type="text" name="email" id="">
                    <label for="">Số điện thoại</label>
                    <input type="text" name="sdt" id="">
                    <label for="">Địa chỉ</label>
                    <input type="text" name="address" id="">
                    <input type="submit" name="themmoi" value="Thêm tài khoản" >
                    <button type="reset">Nhập lại</button>
                    <button> <a href="index.php?act=listkh"> Danh sách </a></button>
                </form>
            </div>

            </div>
          </div>
