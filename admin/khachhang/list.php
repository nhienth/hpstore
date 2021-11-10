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
             
              <div class="function-title">Danh sách khách hàng</div>
              <div class="function-table">
                <table class="tabel-list3">
                  <tr>
                    <th>Mã khách hàng</th>
                    <th>Tên đăng nhập</th>
                    <th>Họ tên</th>
                    <th>Hình</th>
                    <th>Số điện thoại</th>
                    <th>Email</th>
                    <th>Địa chỉ</th>
                    <th>Vai trò</th>
                    <th colspan="2">Sửa / Xóa</th>
                  </tr>

                <?php
                
                foreach ($listkhachhang as $khachhang) {
                  extract($khachhang);
                  $edit = "index.php?act=edit-acc&&id=".$ma_khachhang;
                  $delete = "index.php?act=delete-acc&&id=".$ma_khachhang;
                  if($vai_tro == 0){
                    $vai_tro = "Khách hàng";
                  }else{
                    $vai_tro = "Nhân viên";
                  }
                  echo '
                  
                  <tr>
                      <td>'.$ma_khachhang.'</td>
                      <td>'.$ten_dangnhap.'</td>
                      <td>'.$ho_ten.'</td>
                      <td><img src="../uploads/'.$hinh.'" alt=""></td>
                      <td>'.$so_dien_thoai.'</td>
                      <td>'.$email.'</td>
                      <td>'.$dia_chi.'</td>
                      <td>'.$vai_tro.'</td>
                      <td>
                      <a href="'.$edit.'" class="a-edit"><i class="fas fa-edit" ></i></a>
                    </td>
                      <td><a href="'.$delete.'" class="a-delete"
                        ><i class="fas fa-trash-alt" ></i
                      ></a></td>
                      
                  </tr>
                  
                  ';
                }
                
                ?>

                  
                <?php

                
                ?>

            </table>
              </div>
            </div>
          </div>