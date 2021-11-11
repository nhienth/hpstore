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
                echo ' <div class="thongbao">'.$thongbao.'</div>';
              }
              
              ?>
             
              <div class="function-title">Danh sách bình luận</div>
              <div class="function-table">
                <table class="tabel-list4">
                  <tr>
                    <th>Mã bình luận</th>
                    <th>Nội dung</th>
                    <th>Mã hàng hóa</th>
                    <th>Ngày bình luận</th>
                    <th>Mã khách hàng</th>
                    <th colspan="3">Sửa / Xóa</th>
                  </tr>
                  <tr>
                      <td>ha noi</td>
                      <td>ha noi</td>
                      <td>ha noi</td>
                      <td>ha noi</td>
                      <td>ha noi</td>
                      <td><a href="'.$xoadm.'" class="a-delete"
                        ><i class="fas fa-trash-alt" ></i
                      ></a></td>
                      <td>
                      <a href="'.$suadm.'" class="a-edit"><i class="fas fa-edit" ></i></a>
                    </td>
                    
                  </tr>
                <?php

                
                // foreach ($listdanhmuc as $danhmuc) {
                //     extract($danhmuc);
                //     $suadm="index.php?act=suadm&id=".$ma_danhmuc;
                //     $xoadm="index.php?act=xoadm&id=".$ma_danhmuc;
                //     echo '
                    
                //     <tr>
                //     <td>ff</td>
                //     <td>
                //       <span>ff</span>
                //     </td>
                //     <td>ff</td>
                //     <td>ff</td>
                //     <td>ff</td>
                //     <td>ff</td>
                //     <td>
                //       <a href="'.$suadm.'" class="a-edit"><i class="fas fa-edit" ></i></a>
                //     </td>
                //     <td>
                //       <a href="'.$xoadm.'" class="a-delete"
                //         ><i class="fas fa-trash-alt" ></i
                //       ></a>
                //     </td>
                //   </tr>
                    
                //     ';
                // }
                
                ?>

            </table>
              </div>
            </div>
          </div>