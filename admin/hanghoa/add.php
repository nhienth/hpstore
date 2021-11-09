
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
        <h3>THÊM SẢN PHẨM</h3>
    </div>
    <div class="contenaddlh">
        <form action="index.php?act=addsp" method="post">
            <label for="">MÃ SẢN PHẨM</label><br>
            <input type="text"><br>
            <label for="">TÊN SẢN PHẨM</label><br>
            <input type="text" name="tensp"><br>
            <label for="">ĐƠN GIÁ</label><br>
            <input type="text" name="dongia"><br>
            <label for="">GIẢM GIÁ</label><br>
            <input type="text" name="giamgia"><br>
            <label for="">HÌNH</label><br>
            <input type="file"><br>
            <label for="">LOẠI DANH MỤC</label><br>
            <select name="" id="">
                <?php 
                    foreach ($listdanhmuc as $danhmuc) {
                        extract($danhmuc);
                        echo '<option value="'.$ma_danhmuc.'">'.$ten_danhmuc.'</option>';
                    }
                ?>
            </select><br>
            <label for="">NGÀY NHẬP</label><br>
            <input type="text"><br>
            <label for="">MÔ TẢ</label><br>
            <textarea name="mota" id="" cols="53" rows="10"></textarea><br>
            <label for=""></label>
            <a href=""><input type="submit"  name="btn-add" value="THÊM"></a>
            <a href="index.php?act=listhh"><input type="button" value="DANH SÁCH"></a>
        </form>
    </div>
</body>
</html>