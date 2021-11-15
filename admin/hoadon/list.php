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
             
              <div class="function-title">Danh sách đơn hàng</div>
              <div class="function-table">
             
                <table class="tabel-list--normal">
                  <tr>
                    <th>Mã đơn</th>
                    <th>Người đặt hàng</th>
                    <th>Tổng tiền</th>
                    <th>Hình thức thanh toán</th>
                    <th>Trạng thái</th>
                    <th>Cập nhật trạng thái</th>
                    <th>Xem chi tiết</th>
                  </tr>
            

                <?php
                
                foreach ($listhoadon as $hoadon) {
                    extract($hoadon);
                    $details = "";
                    if($thanh_toan == 0){
                      $thanh_toan = "Thanh toán khi nhận hàng";
                    }else{
                      $thanh_toan = "Thanh toán online";
                    }

                    if($trang_thai == 0){
                      $trang_thai = "Đơn hàng mới";
                    }else if($trang_thai == 1){
                      $trang_thai = "Đang xử lý";
                    }else if($trang_thai == 2){
                      $trang_thai = "Đang giao hàng";
                    }else{
                      $trang_thai = "Đã hoàn thành";
                    }
                    echo '   
                    <tr>
                      <td>'.$ma_hoadon.'</td>
                      <td>'.$ten_khachhang.'</td>
                      <td>'.number_format($tong_tien).'đ</td>
                      <td>'.$thanh_toan.'</td>
                      <td>'.$trang_thai.'</td>
                      <td>
                        <form action="index.php?act=update-listhd" method="post" class="bill-form">
                          <input type="hidden" name="ma_hoadon" value="'.$ma_hoadon.'">
                          <select name="trang_thai" id="">
                            <option value="0">Đơn hàng mới</option>
                            <option value="1">Đang xử lý</option>
                            <option value="2">Đang giao hàng</option>
                            <option value="3">Đã giao hàng</option>
                          </select>
                          <button type="submit" name="btn-update">Cập nhật</button>
                        </form>
                      </td>
                      <td><a href="'.$details.'" class="a-edit"><i class="fas fa-eye"></i></a></td>
                    </tr>';
                  
                }
                
                ?>

            </table>
              </div>
            </div>
          </div>
          

         