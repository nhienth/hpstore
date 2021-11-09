

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
        <h3>DANH SÁCH HÀNG HÓA</h3>
    </div>
    <div class="contenaddlh">
        <form action="" method="post">
            <div class="table2">
                <table border="1">
                    <tr>
                        <th>Mã hàng hóa</th>
                        <th>Tên hàng hóa</th>
                        <th>Đơn giá</th>
                        <th>Giảm giá</th>
                        <th>Hình</th>
                        <th>Loại hàng</th>
                        <th>Ngày nhập</th>
                        <th>Mô tả</th>
                        <th>THAO TÁC</th>
                    </tr>
                    <?php 
                    
                    foreach ($listhanghoa as $hanghoa) {
                        extract($hanghoa);
                        $ten_danhmuc = loadTen_danhmuc($ma_danhmuc);
                        echo '
                        <tr>
                        <td>'.$ma_hanghoa.'</td>
                        <td>'.$ten_hanghoa.'</td>
                        <td>'.$don_gia.'</td>
                        <td>'.$giam_gia.'</td>
                        <td>'.$hinh.'</td>
                        <td>'.$ten_danhmuc.'</td>
                        <td>'.$ngay_nhap.'</td>
                        <td>'.$mo_ta.'</td>
                        <td>
                            <a href=""><input type="button" value="Xóa" id="button1"></a>
                            <a href=""><input type="button" value="Sửa" id="button1"></a>
                        </td>
                    </tr>
                        ';
                    }
                    
                    ?>
                 
                </table>
                <a href=""><input type="button" value="Chọn tất cả"></a>
                <a href=""><input type="button" value="Bỏ chọn tất cả"></a>
                <a href=""><input type="button" value="Nhập thêm"></a>
            </div>
        </form>
    </div>
</body>
</html>