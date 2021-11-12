<!DOCTYPE html>
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
    <link rel="stylesheet" href="./content/css/reset.css" />
    <link
      rel="stylesheet"
      type="text/css"
      href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"
    />
    <link rel="stylesheet" href="content/css/app.css" />
    <link rel="stylesheet" href="content/css/header.css" />
    <link rel="stylesheet" href="content/css/footer.css" />
    <link rel="stylesheet" href="content/css/main.css" />
    <link rel="stylesheet" href="content/css/login.css" />
    <link rel="stylesheet" href="content/css/product.css" />
    <link rel="stylesheet" href="content/css/details.css" />
    <link rel="stylesheet" href="content/css/comment.css" />
    <title>Cửa hàng bóng chuyển HPstore</title>
  </head>
  <body>
    <header class="header">
      <div class="header-top">
        <div class="header-top-logo">
          <a href="index.php"><img src="./content/images/home/logo.png" /></a>
        </div>
        <div class="header-top-search">
          <!-- <div class="header-inputSearch"> -->
          <form action="" method="post">
            <input type="text" placeholder="Bạn cần tìm gì hôm nay ?" />
            <button type="submit">
              <i class="fas fa-search"></i>
            </button>
          </form>
          <!-- </div> -->
        </div>
        <div class="header-top-phone">
          <!-- <ion-icon name="phone-portrait-outline"></ion-icon> -->
          <div class="phone-icon">
            <i class="fas fa-mobile-alt"></i>
          </div>
          <div class="phone-number">0866100339</div>
        </div>
        <div class="header-top-account">
          <div class="account-hover">
            <ul>
              <li><a href="index.php?act=dangnhap">Đăng nhập</a></li>
              <li><a href="index.php?act=dangki">Đăng ký</a></li>
              <li>
                <a href="index.php?act=quenmk">Quên mật khẩu</a>
              </li>
            </ul>
          </div>
         

          <div class="account-icon"><i class="fas fa-user"></i></div>
          <!-- <div class="account-icon">
            <img src="./content/images/home/cate_2.jpg" alt="" />
          </div> -->
          <div class="account-content">
            <h4 class="account-title">Tài khoản</h4>
            <p class="account-hello">Xin chào</p> 

           
          </div>
      
        </div>
        <div class="header-top-cart">
          <div class="cart-icon">
            <a href="./site/cart/list-cart.html" style="color: white"
              ><i class="fas fa-shopping-bag"></i
            ></a>
          </div>
          <div class="cart-count">0</div>
        </div>
      </div>
    </header>

    <div class="main-navagation">
      <nav class="navigation-horizontal width-normal">
        <ul>

        <?php 
        
        foreach ($listdanhmuc as $danhmuc) {
            extract($danhmuc);
            $linkdm = "index.php?act=hanghoa&&iddm=".$ma_danhmuc;
            echo '
            
            <li>
                <a href="'.$linkdm.'">'.$ten_danhmuc.'<span></span><span></span><span></span><span></span></a>
            </li>
            
            ';
        }
        
        ?>
          <li>
            <a href="#"
              >Blog bóng chuyền <span></span><span></span><span></span
              ><span></span
            ></a>
          </li>
          <li>
            <a href="#"
              >Tin tức - sự kiện <span></span><span></span><span></span
              ><span></span
            ></a>
          </li>
          <li>
            <a href="#"
              >Đánh giá sản phẩm <span></span><span></span><span></span
              ><span></span
            ></a>
          </li>
          <li>
            <a href="#"
              >Flash Sale 2020 <span> </span><span></span><span></span
              ><span></span
            ></a>
          </li>
        </ul>
      </nav>
    </div>