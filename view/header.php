<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    
    <link rel="stylesheet" href="../src/css/index.css">
    <link rel="stylesheet" href="src/css/infor1.css">
    <style>
    /* Table */
        .table {
            border-collapse: collapse;
            width: 100%;
        }
        .table,
        .table tr,
        .table td,
        .table th {
            border: 1px solid #ccc;
            text-align: center;
        }
        .table th,
        .table td {
            padding: 10px;
        }
        .table tbody tr:nth-child(2n + 1) {
            background-color: #eee;
        }
        table thead tr {
            background-color: #b7f0b7;
            color: #333;
        }
        .btn {
            margin-top: 15px;
            padding: 10px 20px;
            margin-left: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
            cursor: pointer;
            color: #333;
            background-color: #fff;
        }
    </style>
</head>
<body>
    <div class="container">
        <header>

            <div class="menu">
                <ul>
                    <li><a href="index.php">Trang chủ</a></li>
                    <li><a href="#">Danh mục sản phẩm</a>
                        <ul>
                        <?php
                        foreach($dsdm as $dm){
                            extract($dm);
                            $linkdm = "index.php?act=sanpham&iddm=".$ID;
                        echo '
                        <li><a href='.$linkdm.'>'.$name.'</a></li>
                        ';

                }
                
                ?>
                            <!-- <li><a href="flowerpots.html">Chậu cây</a></li>
                            <li><a href="tree.html">Cây</a></li>
                            <li><a href="Terrarium.html">Terrarium</a></li> -->
                        </ul>
                    </li>
                    <li><a href="index.php?act=lienhe">Liên hệ</a></li>
                </ul>
            </div>

            <div class="logo">
                <a href="index.html"><img src="src/img/index/Logo.png" ></a>
            </div>

            <div class="authenticate">
                <a href=""><img src="src/img/index/Giỏ hàng.jpg" alt="" style="width:80px; height:50px"></a>

                <?php 
                if(isset($_SESSION['user'])){ 
                    extract($_SESSION['user'])

                ?>
                <div class="menu">
                <ul>
                    <li><a href="#">Xin chào <? $user ?></a>
                    <li><a href="#">Tài khoản</a>
                        <ul>
                            <li><a href="index.php?act=quenmk">Quên mật khẩu</a></li>
                            
                            <li><a href="index.php?act=edit_taikhoan">Cập nhật tài khoản</a></li>
                            <?php if($role==1){ ?>
                            <li><a href="admin/index.php">Đăng nhập Admin</a></li>
                            <?php } ?>
                            <li><a href="index.php?act=thoat">Đăng xuất</a></li>
                        </ul>
                    </li>
                    
                </ul>
                </div>

                <?php

                }else{

                ?>

                <a href="index.php?act=signin"><button id="Signin">Sign in</button></a>
                <a href="index.php?act=signup"><button id="Signup"> Sign up</button></a>

                <?php } ?>


                


            </div>
        </header>
        <hr>    