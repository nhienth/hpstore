<div class="bottom-nav">
      <div class="bottom-nav--title width-normal">
        <a href="index.php">Trang chủ</a>
        <i class="fas fa-chevron-right"></i>
        <span class="blue"><?=$ten_danhmuc?></span>
      </div>
    </div>

    <div class="container">
      <div class="product-adv width-normal">
        <div class="adv-img">
          <img src="./content/images/home/cate_1.jpg" alt="" />
        </div>
        <div class="adv-img">
          <img src="./content/images/home/cate_2.jpg" alt="" />
        </div>
      </div>
    </div>

    <div class="container">
      <div class="main-product--list width-normal">
        <div class="main-product--left">
          <div class="filter-title">
            <p class="filter-filer">Bộ lọc</p>
            <p class="filter-help">Giúp lọc nhanh sản phẩm bạn tìm kiếm</p>
          </div>
          <div class="product-left--filter">
            <div class="filter-name">Tên sản phẩm</div>
            <div class="filter-form">
              <form action="index.php?act=hanghoa" method="post">
                <input type="text" placeholder="Tìm theo tên" name="kyw"/>
                <button type="submit" name="timkiem" >
                  <i class="fas fa-search font-filter"></i>
                </button>
              </form>
            </div>
            <div class="filter-name">Giá sản phẩm</div>
            <form action="./index.php?act=load-filter" method="post" class="form-price">
              <select name="filterValue" id="">
                <option value="0">Tất cả</option>
                <option value="1">Dưới 300.000đ</option>
                <option value="2">Dưới 500.000đ</option>
                <option value="3">Dưới 1.000.000đ</option>
              </select>
              <button type="submit" name="btn-filter">
                <i class="fas fa-search font-filter"></i>
              </button>
            </form>
          </div>
          <div class="filter-title margin-top-20">
            <p class="filter-filer">Danh mục</p>
          </div>
          <div class="product-left--filter">
            <div class="vertical-navigation">
              <nav class="ver-nav">
                <ul>
                
                <?php 
                
                foreach ($listdanhmuc as $danhmuc) {
                    extract($danhmuc);
                    $linkdm = "index.php?act=hanghoa&&iddm=".$ma_danhmuc;
                    echo '<li><a href="'.$linkdm.'">'.$ten_danhmuc.'</a></li>';
                }
                
                ?>
                  <li><a href="#">Blog bóng chuyền</a></li>
                  <li><a href="#">Tin tức - sự kiện</a></li>
                  <li><a href="#">Đánh giá sản phẩm</a></li>
                </ul>
              </nav>
            </div>
          </div>
          <div class="filter-title margin-top-20">
            <p class="filter-filer">Top 10 yêu thích</p>
          </div>
          <div class="product-left--img">
            <img src="./content/images/home/aside_banner.png" />
          </div>
        </div>
        <div class="main-product--right">
          <div class="product-sort">
            <div class="producr-sort--right">
              <form action="" method="post">
                <label for="sort">Sắp xếp : </label>
                <select id="sort">
                  <option value="">Thứ tự</option>
                  <option value="">A - Z</option>
                  <option value="">Z - A</option>
                  <option value="">Giá tăng dần</option>
                  <option value="">Giá giảm dần</option>
                  <option value="">Hàng mới nhất</option>
                  <option value="">Hàng cũ nhất</option>
                </select>
                <button class="btn-sort"></button>
              </form>
            </div>
          </div>
          <div class="product-show">


          <?php 
          
                foreach ($hanghoa_danhmuc as $hanghoa) {
                    extract($hanghoa);
                    $linkDetails = "index.php?act=details-pro&&id=".$ma_hanghoa;
          ?>
                <div class="product-box">
                    <div class="item-option"><a style="color:white" href="<?=$linkDetails?>">Chi tiết</a></div>
                    <div class="item-image">
                        <?php
                            if($giam_gia > 0) echo '<div class="item-sale">Giảm '.$giam_gia.'%</div>';
                        ?>
                        <a href="<?=$linkDetails?>"> <img src="./uploads/<?=$hinh?>" /></a>
                    </div>
                    <div class="item-name"><a href="<?=$linkDetails?>"><?=$ten_hanghoa?></a></div>
                    <?php

                    if($giam_gia > 0) {
                        echo '
                        <div class="item-price">
                        <span class="price-off">'.number_format($don_gia * (100 - $giam_gia)*0.01).'đ</span>
                        <span class="price-sale">'.number_format($don_gia).'đ</span>
                        </div>
                        ';
                    }else{
                        echo '
                        <div class="item-price">
                            <span class="price-off">'.number_format($don_gia).'đ</span>
                        </div>';
                    }
                    
                    ?>
                    
                </div>

          <?php } ?>

          </div>
        </div>
      </div>
    </div>

 