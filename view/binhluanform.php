<?php 
session_start();
include "../model/pdo.php";
include "../model/binhluan.php";
$idpro = $_REQUEST['idpro'];
$dsbl = loadall_binhluan($idpro);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        h2{
            color: #1B6844;
            font-size: 35px;
            font-weight: bold;

            margin-bottom: 20px;
        }
        .inp{
            width: 38%;
            height: 40px;
            border: 1px solid #37A9CD;
            font-size: 18px;
            border-radius: 5px;
            padding-left: 15px;
            margin-top: 20px;
        }
        .sub{
            width: 10%;
            height: 40px;
            background: #37A9CD;
            border-radius: 5px;
            font-size: 18px;
            line-height: 19px;
            color: #FFFFFF;
            font-weight: 600;
            margin-top: 20px;
        }
        
    </style>
    <title>Document</title>
</head>
<body>
<div class="boxcontent2 menudoc">
    <div class="boxtitle" >
        <h2>Bình luận</h2>
    </div>
        <table class="table">
            
            <?php 
            foreach ($dsbl as $bl) {
                extract($bl);
                if($iduser==0){
                    $vaitro="Khách hàng";
                }elseif($iduser==1){
                    $vaitro="Admin";
                }
                
                echo '<tr><td>'.$noidung.' </td>';
                echo '<td > '.$vaitro.' </td>';
                echo '<td > '.$ngaybinhluan.'</td></tr>';
            }
            ?>

        </table>
    </div>
    <div class="binhluanform">
        <form action="<?=$_SERVER['PHP_SELF']?>" method="POST">

        <?php 
                if(isset($_SESSION['user'])){ 

                ?>
                <input type="hidden" name="idpro" value="<?=$idpro?>">
                <input type="text" class="inp" placeholder="Nhập bình luận..." name="noidung">
                <input type="submit" name="guibinhluan" class="sub" value="Gửi bình luận">

                <?php

                }else{

                ?>

                <p style="margin-top:20px ;"><?php echo "Đăng nhập để bình luận." ?> <a href="index.php?act=signin">Đăng nhập ngay</a></p>

                <?php } ?>





            
        </form>
    </div>

    <?php
    if(isset($_POST['guibinhluan']) && $_POST['guibinhluan']){
        $noidung = $_POST['noidung'];
        $idpro = $_POST['idpro'];
        $iduser = $_SESSION['user']['role'];
        $ngaybinhluan = date('h:i:sa d/m/Y');
        insert_binhluan($noidung,$iduser,$idpro,$ngaybinhluan);
        header("location:".$_SERVER['HTTP_REFERER']);
    }
    ?>
</div>
</body>
</html>

