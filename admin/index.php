<?php 
    include "../model/pdo.php";
    include "../model/danhmuc.php";
    include "header.php";

    if(isset($_GET['act'])){
        $act=$_GET['act'];
        switch ($act) {
            case 'adddm' :
                if(isset($_POST['themmoi']) && $_POST['themmoi']){
                    $ten_danhmuc = $_POST['tenloai'];
                    if($ten_danhmuc == ""){
                        echo "Vui lòng nhập tên loại hàng";
                    }else{
                        insert_danhmuc($ten_danhmuc);
                        echo "Thêm thành công";
                    }
                }
                include "danhmuc/add.php";
                break;
            case 'listdm' :
                $listdanhmuc = loadall_danhmuc();
                include "danhmuc/list.php";
                break;
            case 'xoadm' :
                if(isset($_GET['id'])&&($_GET['id']>0)){
                    delete_danhmuc($_GET['id']);
                }
                $listdanhmuc=loadall_danhmuc();
                include "danhmuc/list.php";
                break;
            case 'suadm' :
                if(isset($_GET['id'])&&($_GET['id']>0)){
                    $dm=loadone_danhmuc($_GET['id']);
                }
                include "danhmuc/update.php";
                break;
            case 'updatedm' :
                if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
                    $ten_danhmuc=$_POST['tenloai'];
                    $ma_danhmuc=$_POST['maloai'];
                    update_danhmuc($ma_danhmuc,$ten_danhmuc);
                    $thongbao = "Cập nhật thành công";
                }
                $listdanhmuc=loadall_danhmuc();
                include "danhmuc/list.php";
                break;
            case 'addhh' :
                include "hanghoa/add.php";
                break;
            case 'listkh' :
                include "danhmuc/add.php";
                break;
            case 'listbl' :
                include "binhluan/list.php";
                break;
            case 'listhh' :
                include "hanghoa/list.php";
                break;
            default :
                include "home.php";
                break;
        }
        
    }else{
        include "home.php";
    }
    include "footer.php";
?>