<?php 
    function insert_tintuc($noidung,$ngaydang,$tieude,$hinh,$tomtat){
        $sql = "INSERT INTO tin_tuc(noi_dung , ngay_dang , tieu_de , hinh , tom_tat) VALUES('.$noidung.','.$ngaydang.' ,'.$tieude.' ,'.$hinh.' ,'.$tomtat.')";
        pdo_execute($sql);
    }
?>