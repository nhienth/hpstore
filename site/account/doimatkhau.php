<!-- <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="icon"
      href="//bizweb.dktcdn.net/100/180/515/themes/683553/assets/favicon.png?1624423469475"
      type="image/x-icon"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
      integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <script
      src="https://kit.fontawesome.com/497e58feb8.js"
      crossorigin="anonymous"
    ></script>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Fira+Sans:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,700&display=swap"
      rel="stylesheet"
    />
    <script
      type="module"
      src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"
    ></script>
    <script
      nomodule
      src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"
    ></script>
    <link rel="stylesheet" href="../../content/css/reset.css" />
    <link
      rel="stylesheet"
      type="text/css"
      href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"
    />
    <link rel="stylesheet" href="../../content/css/app.css" />
    <link rel="stylesheet" href="../../content/css/header.css" />
    <link rel="stylesheet" href="../../content/css/footer.css" />
    <link rel="stylesheet" href="../../content/css/main.css" />
    <link rel="stylesheet" href="../../content/css/login.css" />
    <title>Quên mật khẩu</title>
  </head>
  <body>
    <header class="header">
      <div class="header-top">
        <div class="header-top-logo">
          <img src="../../content/images/home/logo.png" alt="" />
        </div>
        <div class="header-top-search">
          <div class="header-inputSearch"> -->
          <!-- <form action="" method="post">
            <input type="text" placeholder="Bạn cần tìm gì hôm nay ?" />
            <button type="submit">
              <i class="fas fa-search"></i>
            </button>
          </form> -->
          <!-- </div> -->
        <!-- </div>
        <div class="header-top-phone">
          <- <ion-icon name="phone-portrait-outline"></ion-icon> -->
          <!-- <div class="phone-icon">
            <i class="fas fa-mobile-alt"></i>
          </div>
          <div class="phone-number">0866100339</div> -->
        <!-- </div>
        <div class="header-top-account">
          <div class="account-hover">
            <ul>
              <li><a href="login.html">Đăng nhập</a></li>
              <li><a href="register.html">Đăng ký</a></li>
              <li><a href="#">Quên mật khẩu</a></li>
            </ul>
          </div>
          <div class="account-icon"><i class="fas fa-user"></i></div>
          <div class="account-content">
            <h4 class="account-title">Tài khoản</h4>
            <p class="account-hello">Xin chào</p>
          </div>
        </div>
        <div class="header-top-cart">
          <div class="cart-icon">
            <i class="fas fa-shopping-bag"></i>
          </div>
          <div class="cart-count">0</div>
        </div>
      </div>
    </header> -->
    <!-- <div class="main-navagation">
      <nav class="navigation-horizontal width-normal">
        <ul>
          <li><a href="#">Giày bóng chuyền</a></li>
          <li><a href="#">Đồng phục bóng chuyền</a></li>
          <li><a href="#">Phụ kiện bóng chuyền</a></li>
          <li><a href="#">Lưu niệm bóng chuyền</a></li>
          <li><a href="#">Blog bóng chuyền</a></li>
          <li><a href="#">Tin tức - sự kiện</a></li>
          <li><a href="#">Đánh giá sản phẩm</a></li>
          <li><a href="#">Flash Sale 2020</a></li>
        </ul>
      </nav>
    </div> --> 

    <div class="bottom-nav">
      <div class="bottom-nav--title width-normal">
        <a href="../../index.html">Trang chủ</a>
        <i class="fas fa-chevron-right"></i>
        <span class="blue">Đổi lại mật khẩu</span>
      </div>
    </div>

    <section class="section-row width-normal">
      <div class="login-block">
        <div class="login-title">Đổi mật khẩu</div>
        <div class="login-title--else">
          
        </div>
        <form action="index.php?act=doimatkhau" class="login-form" method="post" enctype="multipart/form-data">
           
          <label for="user">Mật khẩu cũ<span class="red">*</span></label>
          <input type="password" id="pass" name="pass" placeholder="Mật khẩu cũ" />
          <label for="email">Mật khẩu mới<span class="red">*</span></label>
          <input type="password" id="email" name="pass1" placeholder="Mật khẩu mới" />
          <label for="email">Nhập lại mật khẩu mới<span class="red">*</span></label>
          <input type="password" id="email" name="pass2" placeholder="Nhập lại mật khẩu mới" />
          <!-- <input type="submit" value="Đăng nhập" class="btn-submit" /> -->
          <button class="btn-submit" name="doimatkhau" type="submit">Đổi mật khẩu</button>
        </form>
      </div>
    </section>
    <h2 style="color : red; font-size:25px; margin-left:560px;">
      <?php 
          if(isset($thongbao) && ($thongbao!="")){
              echo $thongbao;
          }
      ?>
    </h2>
    

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