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

            <div class="details-order--boxed mb50">
              <div class="function-title">Thông tin người mua</div>
              <div class="function-table">
                <?php if(is_array($bill)) extract($bill);
                    if($van_chuyen == 35000) {
                        $van_chuyen = "Giao hàng chậm";
                    }else{
                        $van_chuyen = "Giao hàng nhanh";
                    }
                ?>
                <table class="tabel-list--normal">
                  <tr>
                    <th>Tên khách hàng</th>
                    <th>Email</th>
                    <th>Số điện thoại</th>
                    <th>Địa chỉ</th>
                    <th>Ngày đặt hàng</th>
                  </tr>

                  <tr>
                    <td><?=$ten_khachhang?></td>
                    <td><?=$email?></td>
                    <td><?=$dien_thoai?></td>
                    <td><?=$dia_chi?></td>
                    <td><?=$ngay_dat?></td>
                  </tr>


                </table>
              </div>
            </div>

            <div class="details-order--boxed mb50">
              <div class="function-title">Thông tin vận chuyền</div>
              <div class="function-table">
             
                <table class="tabel-list--normal">
                  <tr>
                    <th>Tên người nhận</th>
                    <th>Địa chỉ nhận</th>
                    <th>Số điện thoại</th>
                    <th>Phương thức giao hàng</th>
                    <th>Ghi chú</th>
                  </tr>

                    <tr>
                    <td><?=$ten_khachhang?></td>
                    <td><?=$dia_chi?></td>
                    <td><?=$dien_thoai?></td>
                    <td><?=$van_chuyen?></td>
                    <td></td>
                  </tr>
            

                </table>
              </div>
            </div>

            <div class="details-order--boxed">
              <div class="function-title">Chi tiết đơn hàng</div>
              <div class="function-table">
             
                <table class="tabel-list--normal">
                  <tr>
                    <th>Tên sản phẩm</th>
                    <th>Hình sản phẩm</th>
                    <th>Size</th>
                    <th>Số lượng</th>
                    <th>Đơn giá</th>
                    <th>Tổng tiền</th>
                  </tr>

                  <?php
                  
                  foreach ($listhanghoa as $hanghoa) {
                      extract($hanghoa);
                      echo '
                      <tr>
                        <td>'.$ten_hanghoa.'</td>
                        <td><img src="../uploads/'.$hinh.'" style="margin : 0 auto" width="100px" height="100px"></td>
                        <td>'.$size.'</td>
                        <td>'.$so_luong.'</td>
                        <td>'.number_format($gia).'đ</td>
                        <td>'.number_format($so_luong * $gia).'đ</td>
                    </tr>
                      
                      ';
                  }
                  
                  ?>
            

                </table>
              </div>
            </div>


            </div>
          </div>
          

         