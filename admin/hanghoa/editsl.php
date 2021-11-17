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

<div class="right-bgc">
            <div class="layout-function">
            <?php
              
                if(isset($thongbao) && ($thongbao != "")) {
                echo ' <div class="thongbao"><i class="far fa-check-circle"></i> '.$thongbao.'</div>';
                }
            
            ?>
              <div class="function-title">Cập nhật số lượng sản phẩm</div>
              
            <div class="form-funtcion">
                <form action="index.php?act=update-SL" method="post" class="form-add--product" enctype="multipart/form-data">
                    <?php 
                        if(is_array($model)) extract($model);
                        $chitietsl = "index.php?act=chitietsl&&id=".$ma_hanghoa;
                        $ten_hanghoa = loadTen_hanghoa($ma_hanghoa);
                    ?>
                    <div class="pro-quantity">
                        <div class="pro-quantity--name"><?=$ten_hanghoa?></div>
                        <a href="<?=$chitietsl?>">Xem số lượng chi tiết</a>
                    </div>
                    <input type="hidden" name="ma_model" value="<?=$ma_model?>">
                    <label for="size">Size</label>
                    <input type="text" name="size" id="size" value="<?=$size?>">
                    <label for="sl">Số lượng</label>
                    <input type="text" name="so_luong" id="sl" value="<?=$so_luong?>">
        
                    <button type="submit" name="btn-update">Cập nhật</button>
                    <button type="reset">Nhập lại</button>
                    <button> <a href="index.php?act=listhh"> Danh sách </a></button>
                </form>
            </div>

            </div>
          </div>
