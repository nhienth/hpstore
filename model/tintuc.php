<?php 
    function insert_tintuc($noidung,$tieude,$ngaydang,$hinh,$tomtat){
        $sql = "INSERT INTO tin_tuc(noi_dung , ngay_dang , tieu_de , hinh , tom_tat) VALUES('$noidung','$ngaydang' ,'$tieude' ,'$hinh' ,'$tomtat')";
        pdo_execute($sql);
    }
    function loadAll_tintuc(){
        $sql = "SELECT * FROM tin_tuc ";
        $listtintuc = pdo_query($sql);
        return $listtintuc;
    }
    function delete_tintuc($ma_tintuc){
        $sql = "DELETE FROM tin_tuc WHERE ma_tintuc =".$ma_tintuc;
        pdo_execute($sql);
    }
    function loadOne_tintuc($ma_tintuc){
        $sql = "SELECT * FROM tin_tuc WHERE ma_tintuc =".$ma_tintuc;
        $tintuc = pdo_query_one($sql);
        return $tintuc;
    }
    
    function update_tintuc($tieude, $noidung, $ngaydang, $hinh, $tomtat,$ma_tintuc){
        if($hinh != ""){
            $sql = "UPDATE tin_tuc SET noi_dung = '".$noidung."', ngay_dang = '".$ngaydang."', tieu_de = '".$tieude."', hinh = '".$hinh."', tom_tat = '".$tomtat."' WHERE ma_tintuc =".$ma_tintuc;
        }else{
            $sql = "UPDATE tin_tuc SET noi_dung = '".$noidung."', ngay_dang = '".$ngaydang."', tieu_de = '".$tieude."',  tom_tat = '".$tomtat."' WHERE ma_tintuc =".$ma_tintuc;
        }
        pdo_execute($sql);
    }
?>