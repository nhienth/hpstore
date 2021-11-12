

    <div class="bottom-nav">
      <div class="bottom-nav--title width-normal">
        <a href="../../index.html">Trang chủ</a>
        <i class="fas fa-chevron-right"></i>
        <span class="blue">Đăng nhập tài khoản</span>
      </div>
    </div>

    <section class="section-row width-normal">
      <div class="login-block">
        <div class="login-title">Đăng nhập tài khoản</div>
        <div class="login-title--else">
          Nếu bạn đã có tài khoản, đăng nhập tại đây
        </div>
        <form action="index.php?act=dangnhap" method="post" class="login-form" enctype="multipart/form-data">
          <label for="user">Tên đăng nhập<span class="red">*</span></label>
          <input type="text" id="user" name="user" placeholder="Tên đăng nhập" />
          <label for="pass">Mật khẩu<span class="red">*</span></label>
          <input type="password" id="pass" name="pass" placeholder="Mật khẩu" />
          <!-- <input type="submit" value="Đăng nhập" class="btn-submit" /> -->
          <button class="btn-submit" type="submit" name="dangnhap" >Đăng nhập</button>
        </form>
        <div class="login-register">
          Bạn chưa có tài khoản. Đăng ký <a href="index.php?act=dangki">tại đây</a>.
        </div>
        <a href="index.php?act=quenmk" class="login-forget">Quên mật khẩu?</a>
      </div>
    </section>

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
