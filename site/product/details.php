<?php
    
    if(is_array($hanghoa)) extract ($hanghoa);
    $ten_danhmuc = loadTen_danhmuc($ma_danhmuc);
    $linkdm = "index.php?act=hanghoa&&iddm=".$ma_danhmuc;
?>

<div class="bottom-nav">
      <div class="bottom-nav--title width-normal">
        <a href="index.php">Trang chủ</a>
        <i class="fas fa-chevron-right"></i>
        <a href="<?=$linkdm?>"><?=$ten_danhmuc?></a>
        <i class="fas fa-chevron-right"></i>
        <span class="blue"><?=$ten_hanghoa?></span>
      </div>
    </div>


    <div class="container margin-bottom-20">
      <div class="detalils-name width-normal">
        <?=$ten_hanghoa?>
        <a href="#">Viết đánh giá</a>
      </div>
    </div>

    <div class="container">
      <div class="details-info width-normal">
        <div class="details-img">
          <img src="./uploads/<?=$hinh?>" />
          <div class="details-boxicon">
            <div class="details-icon">
              <img
                src="https://img.icons8.com/external-justicon-flat-justicon/64/000000/external-facebook-social-media-justicon-flat-justicon.png"
              />
            </div>
            <div class="details-icon">
              <img
                src="https://img.icons8.com/external-justicon-flat-justicon/64/000000/external-messenger-social-media-justicon-flat-justicon.png"
              />
            </div>
            <div class="details-icon">
              <img
                src="https://img.icons8.com/external-justicon-flat-justicon/64/000000/external-twitter-social-media-justicon-flat-justicon.png"
              />
            </div>
          </div>
        </div>
        <div class="details-choice">
          <div class="details-price">
            <?php
                if($giam_gia > 0){
                    $price = number_format($don_gia * (100-$giam_gia)*0.01);
                }else{
                    $price = number_format($don_gia);
                }
            ?>
            <?=$price?>đ</div>
          <p class="details-note">* Giá sản phẩm chưa bao gồm VAT</p>
          <p class="details-condition">
            <span>Tình trạng : </span> Chỉ còn <?=$sumSL?> sản phẩm
          </p>
          <form action="" method="post">
            <div class="details-size">
              <div class="details-size--title">Kích thước</div>
              <div class="box-size">

                <?php
                
                foreach ($listModel as $model) {
                    extract($model);
                ?>
                    <div class="size-checked">
                        <input type="radio" class="variant-0" id="<?=$size?>" value="<?=$size?>" name="size" />
                        <label for="<?=$size?>"><?=$size?></label>
                    </div>
                <?php } ?>
  
              </div>
            </div>
            <div class="details-quantity">
              <div class="details-quantity--title">Số lượng</div>
              <div class="quantity buttons_added">
                <input type="button" value="-" class="minus" /><input
                  type="number"
                  step="1"
                  min="1"
                  max=""
                  name="quantity"
                  value="1"
                  title="Qty"
                  class="input-text qty text"
                  size="4"
                  pattern=""
                  inputmode=""
                /><input type="button" value="+" class="plus" />
              </div>
            </div>
            <div class="details-buy">
              <button type="submit">
                <span class="txt-main">Mua ngay</span>
                <span class="txt-sub">Giao hàng tận nơi</span>
              </button>
            </div>
          </form>
        </div>
        <div class="details-help">
          <div class="details-help--title">
            Chúng tôi luôn sẵn sàng để giúp đỡ bạn
          </div>
          <img src="./content/images/home/support-online.jpg" alt="" />
          <div class="details-help--txt">Để được hỗ trợ tốt nhất. Hãy gọi</div>
          <div class="details-help--number">0866100339</div>
        </div>
      </div>
    </div>

    <div class="container margin-top">
      <div class="details-mid width-normal">
        <div class="details-description">
          <div class="details-description--title">Mô tả</div>
          <div class="details-description--content">
            <?=$mo_ta?>
          </div>
          <div class="details-description--comment">
            <div class="description--comment--top">
              <div class="comment-count">0 bình luận</div>
              <div class="comment-filter">
                <form action="" method="post">
                  <label for="filter-comment">Sắp xếp theo </label>
                  <select id="filter-comment">
                    <option value="">Mới nhất</option>
                    <option value="">Cũ nhất</option>
                  </select>
                </form>
              </div>
            </div>
          </div>
        </div>
        <div class="details-suggestions">
          <div class="details-suggestions--title">Sản phẩm gợi ý</div>

        <?php
        
        foreach ($listGoiY as $hanghoa) {
            extract($hanghoa);
        ?>

        <div class="details-suggestions--product">
            <div class="suggestions--product--img">
              <img
                src="./uploads/<?=$hinh?>"
              />
            </div>
            <div class="suggestions--product--info">
              <div class="suggestions--name"><?=$ten_hanghoa?></div>
              <div class="suggestions--name--price">
                <span class="suggestions--price--off"><?=number_format($don_gia * (100 - $giam_gia)*0.01)?>đ</span>
                <span class="suggestions--price--sale"><?=number_format($don_gia)?>đ</span>
              </div>
            </div>
        </div>

        <?php } ?>

        </div>
      </div>
    </div>

    <div class="container margin-top">
      <div class="similar-title">
        <a href="#">Sản phẩm cùng loại</a>
      </div>
    </div>

    <div class="container">
      <div class="similar-products width-normal">

        <?php
        
        foreach ($hanghoacungloai as $hanghoa) {
            extract($hanghoa);
            $linkDetails = "index.php?act=details-pro&&id=".$ma_hanghoa;
        ?>
            <div class="product width-20">
                <div class="product-option">
                    <a style="color:white" href="<?=$linkDetails?>">Chi tiết</a>
                </div>
                <div class="product-image width-img">
                    <a href="<?=$linkDetails?>"><img src="./uploads/<?=$hinh?>"/></a>
                </div>
                <div class="product-name"><?=$ten_hanghoa?></div>
                <div class="product-price"><?=number_format($don_gia)?>đ</div>
            </div>
        <?php } ?>

      </div>
    </div>