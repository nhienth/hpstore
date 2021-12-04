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
            <div class="mb50">
              <div class="function-title">Thống kê từng loại hàng hóa</div>
              <div class="function-table">
             
                <table class="tabel-list--normal">

                  <tr>
                    <th>Loại hàng</th>
                    <th>Số lượng</th>
                    <th>Giá cao nhất</th>
                    <th>Giá thấp nhất</th>
                    <th>Giá trung bình</th>
                  </tr>
            
                <?php
                
                foreach ($listthongke as $thongke) {
                    extract($thongke);
                    echo '
                    
                    <tr>
                        <td>'.$ten_danhmuc.'</td>
                        <td>'.$countSP.'</td>
                        <td>'.number_format($maxPrice).'đ</td>
                        <td>'.number_format($minPrice).'đ</td>
                        <td>'.number_format($avgPrice,2).'đ</td>
                    </tr>
                    
                    ';
                }

                ?>

                <tr>
                    <td colspan="5" class="table-td-button"> 
                        <button class="btn-chart"> <a href="index.php?act=chart-tk"> Xem biểu đồ</a> </button>
                    </td>
                </tr>

                </table>
              </div>
            </div>

            <div class="mb50">
              <div class="function-title">Thống kê hàng hóa tồn kho</div>
              <div class="function-table">
             
                <table class="tabel-list--normal">

                  <tr>
                    <th>Loại hàng</th>
                    <th>SL sản phẩm</th>
                    <th>Tổng SL tồn kho</th>
                    <th>SL thấp nhất</th>
                    <th>SL cao nhất</th>
                    <th>SL trung bình</th>
                  </tr>
            
                <?php
                
                foreach ($thongke_hanghoa as $hanghoa) {
                    extract($hanghoa);
                    echo '
                    
                    <tr>
                        <td>'.$ten_danhmuc.'</td>
                        <td>'.$countSP.'</td>
                        <td>'.$so_luong.'</td>
                        <td>'.$sl_min.'</td>
                        <td>'.$sl_max.'</td>
                        <td>'.number_format($sl_avg,0).'</td>
                    </tr>
                    
                    ';
                }

                ?>

                <tr>
                    <td colspan="5" class="table-td-button"> 
                        <button class="btn-chart"> <a href="index.php?act=chart-tksl"> Xem biểu đồ</a> </button>
                    </td>
                </tr>

                </table>
              </div>
            </div>
          </div>
        </div>