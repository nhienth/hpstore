<div class="layout-right">
<div class="right-top">
            <div class="website-title">Trang quản trị websitie</div>
            <div class="admin-info">
              <div class="admin-name">ADMIN</div>
              <div class="admin-img">
                <img src="../content/images/home/support-online.jpg" alt="">
              </div>
            </div>
          </div>

<div class="right-bgc">
            <div class="layout-function">
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
                    <th colspan="2">SL</th>
                    <th colspan="2">Sửa / Xóa</th>
                  </tr>


                <?php
                
                foreach ($listhanghoa as $hanghoa) {
                    extract($hanghoa);
                    $ten_danhmuc = loadTen_danhmuc($ma_danhmuc);
                    echo '
                    
                    <tr>
                    <td>'.$ma_hanghoa.'</td>
                    <td>
                      <span
                        >'.$ten_hanghoa.'</span
                      >
                    </td>
                    <td><img src="./beyono-golden-start-c-1.jpg" alt="" /></td>
                    <td>'.$ten_danhmuc.'</td>
                    <td>'.$don_gia.'</td>
                    <td>'.$giam_gia.'</td>
                    <td>'.$ngay_nhap.'</td>
                    <td>
                      <span>
                        '.$mo_ta.'
                      </span>
                    </td>
                    <td><a href="">Nhập</a></td>
                    <td><a href="">Thay đổi</a></td>
                    <td>
                      <a href="" class="a-edit"><i class="fas fa-edit"></i></a>
                    </td>
                    <td>
                      <a href="" class="a-delete"
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