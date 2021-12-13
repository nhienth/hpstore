<?php 
    function insert_danhmuc($ten_danhmuc){
        $sql="insert into danh_muc(ten_danhmuc) values('$ten_danhmuc')";
        pdo_execute($sql);
    }
    function loadall_danhmuc(){
        $sql="select * from danh_muc order by ma_danhmuc desc";
        return pdo_query($sql);
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
        return pdo_query_one($sql);
    }

    function loadTen_danhmuc($ma_danhmuc){
        $sql = "SELECT * FROM danh_muc WHERE ma_danhmuc =".$ma_danhmuc;
        $tenDM = pdo_query_one($sql);
        extract($tenDM);
        return $ten_danhmuc;
    }

    function countAll_danhmuc(){
        $sql = "SELECT count(*) FROM danh_muc";
        $count = pdo_query_value($sql);
        return $count;
    }
    


    function exist_danhmuc($ten_danhmuc){
        $sql = "SELECT count(*) FROM danh_muc WHERE ten_danhmuc LIKE '%".$ten_danhmuc."%' ";
        $isExist = pdo_query_value($sql);
        return $isExist > 0;
    }




?>