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
              <div class="function-title">Thêm tin tức</div>
              
            <div class="form-funtcion">
                <form action="index.php?act=addtt" method="post" class="form-add--product" enctype="multipart/form-data">
                    <label for="">Tiêu đề</label>
                    <input type="text" name="tieude" id="" value="<?php if(isset($tieude)) echo $tieude ?>">
                    <label for="">Nội dung</label>
                    <textarea name="noidung" id="" cols="30" rows="10" value="<?php if(isset($noidung)) echo $noidung ?>"></textarea>
                    <label for="">Ngày đăng</label>
                    <input type="text" name="ngaydang" id="" value="<?php if(isset($ngaydang)) echo $ngaydang ?>">
                    <label for="">Hình ảnh</label>
                    <input type="file" name="file">
                    <label for="">Tóm tắt</label>
                    <input type="text" name="tomtat" id="" value="<?php if(isset($tomtat)) echo $tomtat ?>">
                    <button type="submit" name="themmoi">Thêm tin</button>
                    <button type="reset">Nhập lại</button>
                    <button> <a href="index.php?act=listtt"> Danh sách </a></button>
                </form>
            </div>

            </div>
          </div>
