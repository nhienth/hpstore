

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
        <h3>DANH SÁCH</h3>
    </div>
    <div class="contenaddlh">
        <form action="" method="post">
            <div class="table1">
                <table border="1">
                    <tr>
                        <th></th>
                        <th>MÃ LOẠI</th>
                        <th>TÊN LOẠI</th>
                        <th>THAO TÁC</th>
                    </tr>
                    <?php 
                        foreach ($listdanhmuc as $danhmuc) {
                            extract($danhmuc);
                            $suadm = "index.php?act=suadm&id=".$ma_danhmuc;
                            $xoadm = "index.php?act=xoadm&id=".$ma_danhmuc;
                            echo '
                                <tr>
                                    <td><input type="checkbox"></td>
                                    <td>'.$ma_danhmuc.'</td>
                                    <td>'.$ten_danhmuc.'</td>
                                    <td>
                                    <a href="'.$suadm.'"><input type="button" value="Sửa"></a><a href="'.$xoadm.'"><input type="button" value="Xóa"></a>
                                    </td>
                                </tr>
                            ';
                        }
                    ?>
                </table>
                <a href=""><input type="button" value="Chọn tất cả"></a>
                <a href=""><input type="button" value="Bỏ chọn tất cả"></a>
                <a href="index.php?act=adddm"><input type="button" value="Nhập thêm"></a>
            </div>
        </form>
    </div>
</body>
</html>