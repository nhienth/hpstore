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
             
              <div class="function-title">Chi tiết số lượng sản phẩm</div>
              <div class="function-table">
             
                <table class="tabel-list--normal">
                    <tr>
                        <td colspan=4> <div class="pro-name--table"><?=$ten_hanghoa?></div> </td>
                    </tr>
                  <tr>
                    <th>Size sản phẩm</th>
                    <th>Số lượng</th>
                    <th colspan="2">Sửa / Xóa</th>
                  </tr>
            

                <?php
                
                foreach ($listhanghoa as $hanghoa) {
                    extract($hanghoa);
                    $ten_danhmuc = loadTen_danhmuc($ma_danhmuc);
                    $deleteSL = "index.php?act=delete-SL&&id=".$ma_model;
                    $editSL = "index.php?act=edit-SL&&id=".$ma_model;

                    echo '   
                    <tr>
                        <td>'.$size.'</td>
                        <td>'.$so_luong.'</td>
                        <td> <a href="'.$editSL.'" class="a-edit"><i class="fas fa-edit"></i></a></td>
                        <td> <a href="'.$deleteSL.'" onclick="return confirm(\'Bạn chắc chắn muốn xóa ?\')" class="a-delete"
                        ><i class="fas fa-trash-alt"></i
                      ></a></td>
                    </tr>';
                  
                }
                
                ?>

            </table>
              </div>
            </div>
          </div>