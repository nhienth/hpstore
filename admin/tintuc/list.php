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
             
              <div class="function-title">Danh sách tin tức</div>
              <div class="function-table">
                <table class="tabel-list6">
                  <tr>
                    <th>Mã tin tức</th>
                    <th>Tiêu đề</th>
                    <th>Tóm tắt</th>
                    <th>Nội dung</th>
                    <th>Hình</th>
                    <th>Ngày đăng</th>
                    <th colspan="2">Sửa / Xóa</th>
                  </tr>
                  <?php 
                      foreach ($listtintuc as $tintuc) {
                        extract($tintuc); 
                        $edit = "index.php?act=edit-tt&&id=".$ma_tintuc;
                        $delete = "index.php?act=delete-tt&&id=".$ma_tintuc;
                      echo '
                  
                      <tr>
                          <td>'.$ma_tintuc.'</td>
                          <td>'.$tieu_de.'</td>
                          <td><span>'.$tom_tat.'</span></td>
                          <td><span>'.$noi_dung.'</span></td>
                          <td><img src="../uploads/'.$hinh.'" alt=""></td>
                          <td>'.$ngay_dang.'</td>
                          <td>
                          <a href="'.$edit.'" class="a-edit"><i class="fas fa-edit" ></i></a>
                        </td>
                          <td><a href="'.$delete.'" onclick="return confirm(\'Bạn chắc chắn muốn xóa ?\')" class="a-delete"
                            ><i class="fas fa-trash-alt" ></i
                          ></a></td>
                          
                      </tr>
                      
                      ';
                    }
                  ?>             
            </table>
              </div>
            </div>
          </div>