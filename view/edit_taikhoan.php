<div class="container" style="width: 400px;
    margin: auto;
    font-family: 'Anton', sans-serif;
    margin-top:60px;margin-bottom:60px
    ">

    

        <div class="tieude" style="text-align: center;
    margin-bottom:50px ;
    font-family: 'Inter';
    font-weight: 600;">
            <p style="color: green;">WELCOME TO XANH DECOR</p>
            <h1>CẬP NHẬT TÀI KHOẢN</h1>
        </div>

        <div class="login">
        <?php
                if(isset($_SESSION['user']) && is_array($_SESSION['user'])){
                    extract($_SESSION['user']);
                }
                ?>
            <form action="index.php?act=edit_taikhoan" method="POST">

        <label for="" style="font-family: 'Inter';
    font-size: 16px;
    line-height: 19px;
    color: #4A5568;
    font-weight: 600;
    margin: 15px 0px;">Email</label><br>

            <input type="text" class="inp" name="email" value="<?=$email?>" style="width: 400px;
    height: 50px;
    border: 1px solid #37A9CD;
    border-radius: 5px;
    padding-left: 15px;
    "><br><span ></span><br>


            <label for="" style="font-family: 'Inter';
    font-size: 16px;
    line-height: 19px;
    color: #4A5568;
    font-weight: 600;
    margin: 15px 0px;">Tên đăng nhập</label><br>

            <input type="text" class="inp" name="user" value="<?=$user?>" style="width: 400px;
    height: 50px;
    border: 1px solid #37A9CD;
    border-radius: 5px;
    padding-left: 15px;
    "><br><span></span><br>


            <label for="" style="font-family: 'Inter';
    font-size: 16px;
    line-height: 19px;
    color: #4A5568;
    font-weight: 600;
    margin: 15px 0px;">Mật khẩu</label><br>

            <input type="password" class="inp" name="pass" value="<?=$pass?>" style="width: 400px;
    height: 50px;
    border: 1px solid #37A9CD;
    border-radius: 5px;
    padding-left: 15px;
    "><br><span ></span>


    <label for="" style="font-family: 'Inter';
    font-size: 16px;
    line-height: 19px;
    color: #4A5568;
    font-weight: 600;
    margin: 15px 0px;">Địa chỉ</label><br>

            <input type="text" class="inp" name="address" value="<?=$address?>" style="width: 400px;
    height: 50px;
    border: 1px solid #37A9CD;
    border-radius: 5px;
    padding-left: 15px;
    "><br><span ></span><br>


    <label for="" style="font-family: 'Inter';
    font-size: 16px;
    line-height: 19px;
    color: #4A5568;
    font-weight: 600;
    margin: 15px 0px;">Số điện thoại</label><br>

            <input type="text" class="inp" name="tel" value="<?=$tel?>" style="width: 400px;
    height: 50px;
    border: 1px solid #37A9CD;
    border-radius: 5px;
    padding-left: 15px;
    "><br><span ></span><br>


<input type="hidden" style="width: 35%;
    height: 50px;
    background: #37A9CD;
    border-radius: 5px;
    font-size: 16px;
    line-height: 19px;
    color: #FFFFFF;
    margin-top: 30px;
    font-weight: 600;" name="id" value="<?=$id?>">


            <input type="submit" style="width: 35%;
    height: 50px;
    background: #37A9CD;
    border-radius: 5px;
    font-size: 16px;
    line-height: 19px;
    color: #FFFFFF;
    margin-top: 30px;
    font-weight: 600;" name="capnhat" value="Cập nhật">
    <input type="reset" style="width: 35%;
    height: 50px;
    background: #37A9CD;
    border-radius: 5px;
    font-size: 16px;
    line-height: 19px;
    color: #FFFFFF;
    margin-top: 30px;
    font-weight: 600;" value="Nhập lại">
    
            
        
        <p style="font-family: 'Inter';
    font-size: 20px;
    line-height: 23px;
    color: #616161;
    margin-top: 16px;
    text-align: center;
    font-weight: 700;">
    <?php if (isset($thongbao) && ($thongbao !="")){
            echo $thongbao;
        }
        ?>
    
    </p>
    </form>
        </div>

    </div>


        