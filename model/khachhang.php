<?php 
    function insert_khachhang($ten_dangnhap , $mat_khau , $ho_ten , $hinh , $so_dt , $email , $dia_chi){
    $sql = "INSERT INTO from khach_hang(ten_dangnhap,mat_khau,ho_ten,hinh,so_dien_thoai,email,dia_chi)
     VALUES('".$ten_dangnhap."','".$mat_khau."','".$ho_ten."','".$hinh."','".$so_dt."','".$email."','".$dia_chi."') ";
     pdo_execute($sql);
    }
?>