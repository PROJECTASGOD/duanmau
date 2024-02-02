<?php 
session_start();
include "model/pdo.php";
include "model/sanpham.php";
include "model/danhmuc.php";
include "model/taikhoan.php";
$dsdm = loadAll_danhmuc();
include "view/header.php";
include "global.php";
if(!isset($_SESSION['mycart'])) $_SESSION['mycart']=[];

$spnew= loadAll_sanpham_home();
$top10sp=loadAll_sanpham_top10();
if ((isset($_GET['act'])) &&($_GET['act']!="")) {
    $act = $_GET['act'];
    switch ($act) {
        /* CONTROLLER DANH MỤC */
        case 'lienhe':
            include "view/lienhe.php";
            break;
        case 'sanphamct':
            if ((isset($_GET['idsp'])) &&($_GET['idsp']>0)){
                $id=$_GET['idsp'];
                $onesp = load_one_sanpham($id);
                extract($onesp);
                $SP_cungloai=load_cungloai_sanpham($id,$iddm);
                include "view/sanphamct.php";
            }else{
                include "index.php";
            }
            
            break;
        case 'sanpham':
            if ((isset($_POST['text_seach'])) &&($_POST['text_seach']!="")){
                $kyw=$_POST['text_seach'];

            }else{
                $kyw="";
            }

            if ((isset($_GET['iddm'])) &&($_GET['iddm']>0)){
                $iddm=$_GET['iddm'];
                
            }else{
                $iddm=0;
            }
                $dssp= loadAll_sanpham($kyw,$iddm);
                $tendm=load_ten_dm($iddm);
                include "view/sanpham.php";
            break;
        
        case 'signin':
            if (isset($_POST['dangnhap']) && $_POST['dangnhap']) {

                $user = $_POST['user'];
                $pass = $_POST['pass'];
                $checkuser = checkuser($user, $pass);

                if (is_array($checkuser)) {
                    $_SESSION['user'] = $checkuser;
                    header('Location:index.php');
                    // $thongbao="bạn đã đăng nhập thành công";
                } else {
                    $thongbao = "Tài khoản không tồn tại";
                }
            }
            include "view/signin.php";
            break;
        case 'signup':
            if (isset($_POST['dangky']) && $_POST['dangky']) {
                $email = $_POST['email'];
                $user = $_POST['user'];
                $pass = $_POST['pass'];

                insert_taikhoan($email, $user, $pass);
                // header('Location: index.php');
                $thongbao = "Đăng kí thành công. Vui lòng đăng nhập để bình luận hoặc đặt hàng";
            }

            
            include "view/signup.php";
            break;

            case 'edit_taikhoan':
                if (isset($_POST['capnhat']) && $_POST['capnhat']) {
    
                    $user = $_POST['user'];
                    $pass = $_POST['pass'];
                    $email = $_POST['email'];
                    $address = $_POST['address'];
                    $tel = $_POST['tel'];
                    $id = $_POST['id'];
    
                    update_taikhoan($id, $user, $pass, $email, $address, $tel);
                    $_SESSION['user'] = checkuser($user, $pass);
                    $thongbao ="Cập nhật thành công";
                }
    
                include_once "view/edit_taikhoan.php";
                break;

                case 'quenmk':
                    if (isset($_POST['guiemail']) && $_POST['guiemail']) {
        
        
                        $email = $_POST['email'];
                        $checkemail = checkemail($email);
                        if (is_array($checkemail)) {
                            $thongbao = "Mật khẩu của bạn là:" . $checkemail['pass'];
                        } else {
                            $thongbao = "Mật khẩu này không tồn tại";
                        }
                    }
        
                    include "view/quenmk.php";
        
        
                    break;

                case 'thoat':
                    session_unset();
                    header("Location:index.php");
                    break;
                case 'addtocart':
                    if(isset($_POST['addtocart'])&&($_POST['addtocart'])){
                        $id = $_POST['id'];
                        $name = $_POST['name'];
                        $img = $_POST['img'];
                        $price = $_POST['price'];
                        
                        $soluong = 1;
                        $ttien= $soluong * $price;
                        $spadd=[$id, $name, $img, $price, $soluong, $ttien];
        
                        array_push($_SESSION['mycart'],$spadd);
                    }

                    include "view/viewcart.php";
                    break;

                case 'delcart':
                    if(isset($_GET['idcart'])){
                        array_slice($_SESSION['mycart'],$_GET['idcart'],1);
                    }
                    else{
                        $_SESSION['mycart']=[];
                    }
                    echo "<script>window.location.href='index.php?act=viewcart'</script>";
                    // header('Location: index.php?act=viewcart');
                    break;
                case 'viewcart':
                    include "view/viewcart.php";
                    break;

        default:
            include "home.php";
            break;
    }
    
}else{
    include "view/home.php";

}

include "view/footer.php";
?>
