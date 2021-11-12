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
                        <td>'.number_format($maxPrice).'</td>
                        <td>'.number_format($minPrice).'</td>
                        <td>'.number_format($avgPrice,2).'</td>
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
          </div>