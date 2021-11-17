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
                echo ' <div class="thongbao">'.$thongbao.'</div>';
              }
              
              ?>
             
              <div class="function-title">Danh sách hóa đơn chi tiết</div>
              <div class="function-table">
                <table class="tabel-list5">
                  <tr>
                    <th>Mã hóa đơn</th>
                    <th>Mã hàng hóa</th>
                    <th>Kích thước</th>
                    <th>Số lượng</th>
                    <th>Đơn giá</th>
                    <th colspan="2">Sửa / Xóa</th>
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