<?php

if(isset($_SESSION['user']) && (is_array($_SESSION['user']))) {
    extract($_SESSION['user']);
}

?>


<div class="bottom-nav">
      <div class="bottom-nav--title width-normal">
        <a href="index.php">Trang chủ</a>
        <i class="fas fa-chevron-right"></i>
        <span class="blue">Trang khách hàng</span>
      </div>
    </div>

    <div class="container">
      <div class="section-AF width-normal">
        <div class="account-info--title">
          <div class="info-title--txt">Quản lý tài khoản</div>
          <div class="info-hello">Xin chào, <?=$ho_ten?></div>
        </div>
        <div class="account-info--boxed">
          <div class="account-info--details">
            <div class="info-boxed--title">Thông tin khách hàng</div>
            <div class="account-details--boxed">
              <div class="account-details--img">
                <img src="./uploads/<?=$hinh?>" alt="" />
              </div>
              <div class="account-details--element">
                <i class="fas fa-user"></i> <?=$ho_ten?>
              </div>
              <div class="account-details--element">
                <i class="fas fa-map-marker-alt"></i> <?=$dia_chi?>
              </div>
              <div class="account-details--element">
                <i class="fas fa-phone-alt"></i> <?=$so_dien_thoai?>
              </div>
            
              <a href="index.php?act=update-info" class="btn-update inline">Cập nhật thông tin</a> 
              
            </div>
          </div>
          <div class="account-info--order">
            <div class="info-boxed--title">Đơn hàng gần nhất</div>
            <div class="account-order--list">
              <table class="order-table">
                <tr>
                  <th>#</th>
                  <th>Ngày mua</th>
                  <th>Địa chỉ</th>
                  <th>Tổng tiền</th>
                  <th>Tình trạng đơn hàng</th>
                </tr>
                <tr>
                  <td colspan="5">Không có đơn hàng nào</td>
                </tr>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>