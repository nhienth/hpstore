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
              echo ' <div class="thongbao"><i class="fas fa-bell"></i> '.$thongbao.'</div>';
              }
          
            ?>
             
              <div class="function-title">Danh sách sản phẩm</div>
              <div class="function-table">
                <table class="tabel-list">
                  <tr>
                    <th>ID</th>
                    <th>Tên sản phẩm</th>
                    <th>Hình ảnh</th>
                    <th>Loại hàng</th>
                    <th>Đơn giá</th>
                    <th>Giảm giá (%)</th>
                    <th>Ngày nhập</th>
                    <th>Mô tả</th>
                    <th>Tổng SL</th>
                    <th>Nhập SL</th>
                    <th colspan="2">Sửa / Xóa</th>
                  </tr>
                 


                <?php
                
                foreach ($listhanghoa as $hanghoa) {
                    extract($hanghoa);
                    $ten_danhmuc = loadTen_danhmuc($ma_danhmuc);
                    $deletePro = "index.php?act=delete-pro&&id=".$ma_hanghoa;
                    $editPro = "index.php?act=edit-pro&&id=".$ma_hanghoa;
                    $addSL = "index.php?act=add-sl&&id=".$ma_hanghoa;
                    $sumSL = sum_soLuong($ma_hanghoa);
                    echo '
                    
                    <tr>
                    <td>'.$ma_hanghoa.'</td>
                    <td>
                      <span
                        >'.$ten_hanghoa.'</span
                      >
                    </td>
                    <td>
                    <img src="../uploads/'.$hinh.'">
                    </td>
                    <td>'.$ten_danhmuc.'</td>
                    <td>'.number_format($don_gia).'</td>
                    <td>'.$giam_gia.'</td>
                    <td>'.$ngay_nhap.'</td>
                    <td>
                      <span>
                        '.$mo_ta.'
                      </span>
                    </td>
                    <td>'.$sumSL.'</td>
                    <td><a href="'.$addSL.'" class="a-add"><i class="fas fa-plus"></i></a></td>
                    <td>
                      <a href="'.$editPro.'" class="a-edit"><i class="fas fa-edit"></i></a>
                    </td>
                    <td>
                      <a href="'.$deletePro.'" onclick="return confirm(\'Bạn chắc chắn muốn xóa ?\')" class="a-delete"
                        ><i class="fas fa-trash-alt"></i
                      ></a>
                    </td>
                  </tr>
                    
                    ';
                }
                
                ?>

            </table>
              </div>
            </div>
          </div>