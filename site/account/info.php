

    <div class="bottom-nav">
      <div class="bottom-nav--title width-normal">
        <a href="../../index.html">Trang chủ</a>
        <i class="fas fa-chevron-right"></i>
        <span class="blue">Trang khách hàng</span>
      </div>
    </div>
    <?php 
        if(isset($_SESSION['user'])&&(is_array($_SESSION['user']))){
            extract($_SESSION['user']);
        }
    ?>
    <div class="container">
      <div class="section-AF width-normal">
        <div class="account-info--title">
          <div class="info-title--txt">Quản lý tài khoản</div>
          <div class="info-hello">Xin chào <?=$ten_dangnhap?></div>
        </div>
        <div class="account-info--boxed">
          <div class="account-info--details">
            <div class="info-boxed--title">Thông tin khách hàng</div>
            <div class="account-details--boxed">
              <!-- <div class="account-details--img">
                <img src="../../content/images/home/banner_1.jpg" alt="" />
              </div>
              <div class="account-details--element">
                <i class="fas fa-user"></i> Trần Hoàng Nhiên
              </div>
              <div class="account-details--element">
                <i class="fas fa-map-marker-alt"></i> Đà Nẵng
              </div>
              <div class="account-details--element">
                <i class="fas fa-phone-alt"></i> 0123456789
              </div>
              <button class="btn-update">Cập nhật thông tin</button>
            </div> -->
          
            <div class="form-funtcion">
              <form action="index.php?act=update-tk" method="post" class="login-form" enctype="multipart/form-data">
                  <label for="tendn">Tên đăng nhập</label>
                  <input type="text" name="user" id="tendn" value="<?=$ten_dangnhap?>">
                  <label for="pass">Mật khẩu</label>
                  <input type="password" name="pass" id="pass" value="<?=$mat_khau?>">
                  <label for="name">Họ tên</label>
                  <input type="text" name="name" id="name" value="<?=$ho_ten?>">
                  <label for="hinh">Hình đại diện</label>
                  <div class="margin-bottom-20">
                      <img src="./uploads/<?=$hinh?>" height="250px"; width="250px">
                  </div>
                  <input type="file" name="avatar" id="hinh">
                  <label for="email">Email</label>
                  <input type="email" name="email" id="email" value="<?=$email?>">
                  <label for="phone">Số điện thoại</label>
                  <input type="text" name="phone" id="phone" value="<?=$so_dien_thoai?>">
                  <label for="address">Địa chỉ</label>
                  <input type="text" name="address" id="address" value="<?=$dia_chi?>"> 
                  <input type="hidden" name="ma_khachhang" value="<?=$ma_khachhang?>">                
                  <button type="submit" name="btn-update" class="btn-update">Cập nhật</button>
              </form>
          </div>
          <div class="account-info--order">
            <div class="info-boxed--title">Đơn hàng gần nhất</div>
            <div class="account-order--list">
              <table class="order-table">
                <tr>
                  <th>#</th>
                  <th>Ngày mua</th>
                  <th>Địa chỉ</th>
                  <th>Tổng tiền</th>
                  <th>Tình trạng đơn hàng</th>
                </tr>
                <tr>
                  <td colspan="5">Không có đơn hàng nào</td>
                </tr>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>

    <footer>
      <div class="footer">
        <div class="footer-about footer-row">
          <div class="footer-title">Về chúng tôi</div>
          <ul>
            <li><a href="#">Giới thiệu</a></li>
            <li><a href="#">Liên hệ</a></li>
          </ul>
        </div>
        <div class="footer-category footer-row">
          <div class="footer-title">Danh mục</div>
          <ul>
            <li><a href="#">giày bóng chuyền</a></li>
            <li><a href="#">đồng phục bóng chuyền</a></li>
            <li><a href="#">phụ kiện bóng chuyền</a></li>
            <li><a href="#">lưu niệm bóng chuyền</a></li>
            <li><a href="#">blog bóng chuyền</a></li>
            <li><a href="#">tin tức - sự kiện</a></li>
            <li><a href="#">đánh giá sản phẩm</a></li>
            <li><a href="#">flash sale 2022</a></li>
          </ul>
        </div>
        <div class="footer-support footer-row">
          <div class="footer-title">Hỗ trợ khách hàng</div>
          <ul>
            <li><a href="#">Hướng dẫn mua hàng</a></li>
            <li><a href="#">Hướng dẫn chọn size</a></li>
            <li><a href="#">Bảo hành - đổi trả</a></li>
            <li><a href="#">Phản hồi - góp ý</a></li>
          </ul>
        </div>
        <div class="footer-advise footer-row">
          <div class="footer-title">Tư vấn - hỗ trợ</div>
          <div class="advise-holine">
            <div class="hotline-content">
              <p class="hotline-title">Hotline 1</p>
              <p class="hotline-phone">0866100339</p>
            </div>
            <div class="hotline-content">
              <p class="hotline-title">Hotline 2</p>
              <p class="hotline-phone">0866100339</p>
            </div>
          </div>
          <div class="transport-connect">
            <div class="transport">
              <div class="transport-connect-title">Đối tác vận chuyển</div>
              <div class="transport-img">
                <img src="../../content/images/footer/payment_1.png" />
                <img src="../../content/images/footer/payment_2.png" />
                <img src="../../content/images/footer/payment_3.png" />
              </div>
            </div>
            <div class="connect">
              <div class="transport-connect-title">Kết nối với chúng tôi</div>
              <div class="connect-icon">
                <img src="../../content/images/footer/icon-fb.jpg" />
                <div class="connect-content">Facebook</div>
              </div>
              <div class="connect-icon">
                <img src="../../content/images/footer/icon-twitter.jpg" />
                <div class="connect-content">Twiiter</div>
              </div>
              <div class="connect-icon">
                <img src="../../content/images/footer/icon-google-plus.jpg" />
                <div class="connect-content">Gooole+</div>
              </div>
              <div class="connect-icon">
                <img src="../../content/images/footer/icon-youtube.jpg" />
                <div class="connect-content">Youtube</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>

    <script
      type="text/javascript"
      src="https://code.jquery.com/jquery-1.11.0.min.js"
    ></script>
    <script
      type="text/javascript"
      src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"
    ></script>
    <script
      type="text/javascript"
      src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"
    ></script>
    <script src="./content/js/Slider.js"></script>
  </body>
</html>
