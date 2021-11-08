<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN</title>
    <link rel="stylesheet" href="../cssadmin.css">
</head>
<?php 
    if(is_array($dm)){
        extract($dm);
    }
?>
<body>
   
    <div class="status1">
        <h3>SỬA LOẠI HÀNG</h3>
    </div>
    <div class="contenaddlh">
        <form action="" method="post">
            <label for="">MÃ LOẠI</label><br>
            <input type="text" disabled placeholder="AUTO NUMBER"><br>
            <label for="">TÊN LOẠI</label><br>
            <input type="text" name="tenloai" value="<?php if(isset($ten_danhmuc) && ($ten_danhmuc !="")) echo $ten_danhmuc; ?>"><br>
            <input type="hidden" name="maloai" value="<?php if(isset($ma_danhmuc)&&($ma_danhmuc>0)) echo $ma_danhmuc;?>">
            <a href=""><input type="submit" name="capnhat" value="CẬP NHẬT"></a>
            <a href="index.php?act=listdm"><input type="button" value="DANH SÁCH"></a>
        </form>
    </div>
</body>
</html>