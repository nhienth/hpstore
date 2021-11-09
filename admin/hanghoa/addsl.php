<?php

if(is_array($hanghoa)) extract($hanghoa);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="..//cssadmin.css">
</head>
<body>
    <div class="status1">
        <h3>THÊM SỐ LƯỢNG</h3>
    </div>
    <div class="contenaddlh">
        <form action="index.php?act=addsl2" method="post">
            <input type="hidden" name="ma_hanghoa" value="<?=$ma_hanghoa?>">
            <label for="">TÊN SẢN PHẨM</label><br>
            <input type="text" name="tensp" value="<?=$ten_hanghoa?>"><br>
            <label for="">HÌNH</label><br>
            <input type="file" name="img" value="<?=$hinh?>"><br>
            <label for="">SIZE</label>
            <input type="text" name="size"><br>
            <label for="">SỐ LƯỢNG</label>
            <input type="text" name="so_luong"> <br>
            <a href=""><input type="submit" name="btn-addsl" value="THÊM"></a>
            <a href="index.php?act=listhh"><input type="button" value="DANH SÁCH"></a>
        </form>
    </div>
</body>
</html>