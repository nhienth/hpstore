<?php 
    function insert_danhmuc($ten_danhmuc){
        $sql="insert into danh_muc(ten_danhmuc) values('$ten_danhmuc')";
        pdo_execute($sql);
    }
    function loadall_danhmuc(){
        $sql="select * from danh_muc order by ma_danhmuc desc";
        $listdanhmuc=pdo_query($sql);
        return $listdanhmuc;
    }
    function delete_danhmuc($ma_danhmuc){
        $sql= "delete from danh_muc where ma_danhmuc=".$ma_danhmuc;
        pdo_execute($sql);

    }
    function update_danhmuc($ma_danhmuc,$ten_danhmuc){
        $sql="update danh_muc set ten_danhmuc='".$ten_danhmuc."'  where ma_danhmuc=".$ma_danhmuc;
        pdo_execute($sql);
    }
    function loadone_danhmuc($ma_danhmuc){
        $sql="select * from danh_muc where ma_danhmuc=".$ma_danhmuc;
        $dm=pdo_query_one($sql);
        return $dm;
    }
?>