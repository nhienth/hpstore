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
             
              <div class="function-title">Danh sách hóa đơn</div>
              <div class="function-table">
                <table class="tabel-list2">
                  <tr>
                    <th>Mã hóa đơn</th>
                    <th>Tổng tiền</th>
                    <th>Ngày mua</th>
                    <th>Mã khách hàng</th>
                    <th>Tình trạng</th>
                    <th>Thanh toán</th>
                    <th colspan="3">Sửa / Xóa</th>
                  </tr>
                  <tr>
                      <td>ha noi</td>
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
                      <td><a href="'.$suadm.'" class="a-edit"><i class="bi bi-bar-chart-steps"></i><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bar-chart-steps" viewBox="0 0 16 16">
  <path d="M.5 0a.5.5 0 0 1 .5.5v15a.5.5 0 0 1-1 0V.5A.5.5 0 0 1 .5 0zM2 1.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-4a.5.5 0 0 1-.5-.5v-1zm2 4a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-7a.5.5 0 0 1-.5-.5v-1zm2 4a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-6a.5.5 0 0 1-.5-.5v-1zm2 4a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-7a.5.5 0 0 1-.5-.5v-1z"/>
</svg></a>
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