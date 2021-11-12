

    <div class="bottom-nav">
      <div class="bottom-nav--title width-normal">
        <a href="index.php">Trang chủ</a>
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
          <button class="btn-submit" type="submit" name="dangnhap" >Đăng nhập</button>
        </form>
        <div class="login-register">
          Bạn chưa có tài khoản. Đăng ký <a href="index.php?act=dangki">tại đây</a>.
        </div>
        <a href="index.php?act=quenmk" class="login-forget">Quên mật khẩu?</a>
      </div>
    </section>
