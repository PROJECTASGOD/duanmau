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
            <h1>Create Account</h1>
        </div>

        <div class="login">
            <form action="index.php?act=signup" method="POST">
        <label for="" style="font-family: 'Inter';
    font-size: 16px;
    line-height: 19px;
    color: #4A5568;
    font-weight: 600;
    margin: 15px 0px;">Email</label><br>
            <input type="text" class="inp" name="email" placeholder="Tên đăng nhập" style="width: 400px;
    height: 50px;
    border: 1px solid #37A9CD;
    border-radius: 5px;
    padding-left: 15px;
    "><br><span style="font-family: 'Inter';
    font-size: 17px;
    line-height: 19px;
    font-weight: 600;
    color: red;"></span><br>
            <label for="" style="font-family: 'Inter';
    font-size: 16px;
    line-height: 19px;
    color: #4A5568;
    font-weight: 600;
    margin: 15px 0px;">Tên đăng nhập</label><br>
            <input type="text" class="inp" name="user" placeholder="Tên đăng nhập" style="width: 400px;
    height: 50px;
    border: 1px solid #37A9CD;
    border-radius: 5px;
    padding-left: 15px;
    "><br><span style="font-family: 'Inter';
    font-size: 17px;
    line-height: 19px;
    font-weight: 600;
    color: red;"></span><br>
            <label for="" style="font-family: 'Inter';
    font-size: 16px;
    line-height: 19px;
    color: #4A5568;
    font-weight: 600;
    margin: 15px 0px;">Mật khẩu</label><br>
            <input type="password" class="inp" name="pass" placeholder="********" style="width: 400px;
    height: 50px;
    border: 1px solid #37A9CD;
    border-radius: 5px;
    padding-left: 15px;
    "><br><span style="font-family: 'Inter';
    font-size: 17px;
    line-height: 19px;
    font-weight: 600;
    color: red;"></span>
            <input type="submit" style="width: 35%;
    height: 50px;
    background: #37A9CD;
    border-radius: 5px;
    font-size: 16px;
    line-height: 19px;
    color: #FFFFFF;
    margin-top: 30px;
    font-weight: 600;" name="dangky" value="Đăng kí ngay">
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
            
        }else
        
        ?>
    
    </p>
    </form>
        </div>

    </div>


        