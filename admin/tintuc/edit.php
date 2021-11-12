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


<?php 
    if(is_array($tintuc)) extract($tintuc);
?>

<div class="right-bgc">
            <div class="layout-function">
            <?php
              
                if(isset($thongbao) && ($thongbao != "")) {
                echo ' <div class="thongbao"><i class="far fa-check-circle"></i> '.$thongbao.'</div>';
                }
            
            ?>
              <div class="function-title">Sửa tài khoản</div>
              
            <div class="form-funtcion">
                <form action="index.php?act=update-tt" method="post" class="form-add--product" enctype="multipart/form-data">
                    <input type="hidden" name="ma_tintuc" value="<?=$ma_tintuc?>">
                    <label for="">Tiêu đề</label>
                    <input type="text" name="tieude" value="<?=$tieu_de?>">
                    <label for="">Nội dung</label>
                    <textarea name="noidung" id="" cols="30" rows="10"><?=$noi_dung?></textarea>
                    <label for="">Hình</label>
                    <div class="edit-pro--img">
                        <img src="../uploads/<?=$hinh?>">
                    </div>
                    <input type="file" name="file" id="hinh">
                    <label for="">Tóm tắt</label>
                    <input type="text" name="tomtat"  value="<?=$tom_tat?>">
                    <button type="submit" name="btn-update">Cập nhật</button>
                    <button type="reset">Nhập lại</button>
                    <button> <a href="index.php?act=listkh"> Danh sách </a></button>
                </form>
            </div>

            </div>
          </div>
