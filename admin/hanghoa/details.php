
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
                <h1> <?=$ten_hanghoa?> </h1>
                <table border="1">
                    <tr>
                        <th>size</th>
                        <th>Số lượng</th>
                    </tr>
                    
                    <?php
                    
                    foreach ($listhanghoa as $hanghoa) {
                        extract($hanghoa);
                        echo '
                        <tr>
                        <td>'.$size.'</td>
                        <td>'.$so_luong.'</td>
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