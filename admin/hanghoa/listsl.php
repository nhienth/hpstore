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
                    $deletePro = "index.php?act=delete-pro&&id=".$ma_hanghoa;
                    $editPro = "index.php?act=edit-pro&&id=".$ma_hanghoa;
                    $addSL = "index.php?act=add-sl&&id=".$ma_hanghoa;

                    echo '   
                    <tr>
                        <td>'.$size.'</td>
                        <td>'.$so_luong.'</td>
                        <td> <a href="" class="a-edit"><i class="fas fa-edit"></i></a></td>
                        <td> <a href="" class="a-delete"
                        ><i class="fas fa-trash-alt"></i
                      ></a></td>
                    </tr>';
                  
                }
                
                ?>

            </table>
              </div>
            </div>
          </div>