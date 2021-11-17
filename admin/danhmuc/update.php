
<?php 
    if(is_array($dm)){
        extract($dm);
    }
?>

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
             
              <div class="function-title">Sửa danh mục</div>
              <div class="function-table">
              <div class="form-funtcion">
                <form action="index.php?act=updatedm" method="post" class="form-add--product">
                    <label for="">Mã danh mục</label>
                    <input type="text" disabled value="<?=$ma_danhmuc?>" >
                    <label for="">Tên danh mục</label>
                    <input type="text" name="tenloai" value="<?php if(isset($ten_danhmuc) && ($ten_danhmuc !="")) echo $ten_danhmuc; ?>"><br>
                    <input type="hidden" name="maloai" value="<?php if(isset($ma_danhmuc)&&($ma_danhmuc>0)) echo $ma_danhmuc;?>">
                    <!-- <input type="submit" value="CẬP NHẬT" name="capnhat"> -->
                    <button type=submit name="capnhat">Cập nhật</button>
                    <button><a href="index.php?act=listdm">DANH SÁCH<a></button>
                    
                </form>
            </div>
              </div>
            </div>
          </div>