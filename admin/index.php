<?php
    include "../model/pdo.php";
    include "../model/danhmuc.php";
    include "../model/sanpham.php";
    include "../model/taikhoan.php";
    include "../model/binhluan.php";
    include "../model/thongke.php";
    include "header.php";
    if (isset($_GET['act'])) {
        $act = $_GET['act'];
        switch ($act) {
            /* CONTROLLER DANH MỤC */
            case 'adddm':
                // kiểm tra người dùng có click vào nút add hay ko
                if (isset($_POST['themmoi'])&&($_POST['themmoi'])) {
                    $ten_loai=$_POST['ten_loai'];
                    add_danhmuc($ten_loai);
                    $thongbao="Thêm thành công";
                }
                include "danhmuc/add.php";
                break;
            case 'listdm':
                $lstdanhmuc = loadAll_danhmuc();
                include "danhmuc/list.php";
                break;
            case 'xoadm':
                if (isset($_GET['id'])&&($_GET['id']>0)) {
                    delete_danhmuc($_GET['id']);
                }
                $lstdanhmuc = loadAll_danhmuc();
                include "danhmuc/list.php";
                break;
            case 'suadm':
                if (isset($_GET['id'])&&($_GET['id']>0)) {
                    $dmuc = load_one_danhmuc($_GET['id']);
                }
                include "danhmuc/update.php";
                break;
            case 'updatedm':
                if (isset($_POST['capnhat'])&&($_POST['capnhat'])) {
                    $ten_loai=$_POST['ten_loai'];
                    $id=$_POST['id'];
                    update_danhmuc($id, $ten_loai);
                    $thongbao="Cập nhật thành công";
                }
                $lstdanhmuc = loadAll_danhmuc();
                include "danhmuc/list.php";
                break;
            /* CONTROLLER SẢN PHẨM */
            case 'addsp':
                // kiểm tra người dùng có click vào nút add hay ko
                if (isset($_POST['themmoi'])&&($_POST['themmoi'])) {
                    $iddm=$_POST['iddm'];
                    $tensp=$_POST['tensp'];
                    $giasp=$_POST['giasp'];
                    $mota=$_POST['mota'];
                    $hinh= $_FILES['hinh']['name'];
                    $target_dir ="../upload/";
                    $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                    if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                        //echo "The file ". htmlspecialchars( basename( $_FILES["hinh"]["name"])). " has been uploaded.";
                    }else {
                        //echo "Sorry, there was an error uploading your file.";
                    }
                    add_sanpham($tensp,$giasp,$hinh,$mota,$iddm);
                    $thongbao="Thêm sản phẩm thành công";
                }
                $lstdanhmuc = loadAll_danhmuc();
                // var_dump($lstdanhmuc);
                include "sanpham/add.php";
                break;

            case 'listsp':
                if (isset($_POST['listok'])&&($_POST['listok'])) {
                    $kyw = $_POST['keyw'];
                    $iddm = $_POST['iddm'];
                }else{
                    $kyw = '';
                    $iddm = 0;
                }
                $lstdanhmuc = loadall_danhmuc();
                $lstsanpham = loadall_sanpham($kyw,$iddm);
                include_once "sanpham/list.php";
                break;
            case 'xoasp':
                if (isset($_GET['id'])&&($_GET['id']>0)) {
                    delete_sanpham($_GET['id']);
                }
                $lstsanpham = loadAll_sanpham("",0);
                include "sanpham/list.php";
                break;
            case 'suasp':
                if (isset($_GET['id'])&&($_GET['id']>0)) {
                    $sanphamone = load_one_sanpham($_GET['id']);
                }
                $lstdanhmuc = loadAll_danhmuc();
                include "sanpham/update.php";
                break;
            case 'updatesp':
                if (isset($_POST['capnhat'])&&($_POST['capnhat'])) {
                    $ID=$_POST['id'];
                    $iddm=$_POST['iddm'];
                    $tensp=$_POST['tensp'];
                    $giasp=$_POST['giasp'];
                    $mota=$_POST['mota'];
                    $hinh= $_FILES['hinh']['name'];
                    $target_dir ="../upload/";
                    $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                    if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                        //echo "The file ". htmlspecialchars( basename( $_FILES["hinh"]["name"])). " has been uploaded.";
                    }else {
                        //echo "Sorry, there was an error uploading your file.";
                    }
                    update_sanpham($ID,$iddm,$tensp,$giasp,$hinh,$mota);
                    $thongbao="Cập nhật sản phẩm thành công";
                }
                $lstdanhmuc = loadAll_danhmuc();
                $listsanpham = loadAll_sanpham("",0);
                include "sanpham/update.php";
                break;
                case 'dskh':
                    $listtaikhoan = loadall_taikhoan();
                    include "taikhoan/list.php";
                    break;

                case 'xoatk':
                if (isset($_GET['id'])&&($_GET['id']>0)) {
                    delete_taikhoan($_GET['id']);
                }
                $listtaikhoan = loadall_taikhoan();
                include "taikhoan/list.php";
                break;

                case 'dsbl':
                    $listbinhluan = loadall_binhluan(0);
                    include_once "binhluan/list.php";
                    break;

                case 'xoabl':
                if (isset($_GET['id'])&&($_GET['id']>0)) {
                    delete_binhluan($_GET['id']);
                }
                $listbinhluan = loadall_binhluan(0);
                include_once "binhluan/list.php";
                break;

                case 'thongke':
                    $tksp=list_thongke();
                    include_once "thongke/list.php";
                    break;

                case 'bieudo':
                    $tksp=list_thongke();
                    include_once "thongke/bieudo.php";
                    break;

            default:
                include "home.php";
                break;
        }
    }else{
        include "home.php";

    }
    include "footer.php";
?>