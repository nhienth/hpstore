<?php

if(is_array($hanghoa)) extract($hanghoa);
// $ten_danhmuc = loadTen_danhmuc($ma_danhmuc);

?>

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
              <div class="function-title">Cập nhật sản phẩm</div>
              
            <div class="form-funtcion">
                <form action="index.php?act=update-pro" method="post" class="form-add--product" enctype="multipart/form-data">
                    <input type="hidden" name="ma_hanghoa" value="<?=$ma_hanghoa?>">
                    <label for="tensp">Tên sản phẩm</label>
                    <input type="text" name="tensp" id="tensp" value="<?=$ten_hanghoa?>">
                    <label for="danhmuc">Danh mục sản phẩm</label>
                    <select name="danhmuc" id="danhmuc">
                        <?php
                            foreach ($listdanhmuc as $danhmuc) {
                                extract($danhmuc);
                                echo '<option value="'.$ma_danhmuc.'">'.$ten_danhmuc.'</option>';
                            }
                        ?>
                    </select>
                    <label for="hinh">Hình sản phẩm</label>
                    <div class="edit-pro--img">
                        <img src="../uploads/<?=$hinh?>">
                    </div>
                    <input type="file" name="anhsp" id="hinh">
                    <label for="dongia">Giá sản phẩm</label>
                    <input type="text" name="dongia" id="dongia" value="<?=$don_gia?>">
                    <label for="giamgia">Giảm giá ( tính theo % )</label>
                    <input type="text" name="giamgia" id="giamgia" value=<?=$giam_gia?>>
                    <label for="mota">Mô tả</label>
                    <textarea name="mota" id="mota" cols="30" rows="8"><?=$mo_ta?></textarea>
                    <!-- <input type="submit" name="themmoi" value="Thêm sản phẩm" > -->
                    <button type="submit" name="btn-update">Cập nhật</button>
                    <button type="reset">Nhập lại</button>
                    <button> <a href="index.php?act=listhh"> Danh sách </a></button>
                </form>
            </div>

            </div>
          </div>
