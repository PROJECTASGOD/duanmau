<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản trị website</title>
    <link rel="stylesheet" href="css/common.css">
</head>
<body>
    <div class="container">
        <article>
            <div class="headline">
                <h2>QUẢN LÝ LOẠI HÀNG</h2>
            </div>
            <form action="index.php?act=addm" method="post">
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="">Mã loại</label>
                            <input class="form-control" type="number" name="ma_loai" readonly placeholder="auto number"
                                disabled>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="">Tên loại</label>
                            <input class="form-control" type="text" name="ten_loai" placeholder="Tên hàng">
                        </div>
                    </div>


                </div>
                <!-- <button class="btn" type="submit" name="themmoi">Thêm</button> -->
                <input type="submit" name="themmoi" value="Thêm" class="btn">
                <button class="btn"><a href="">Nhập lại</a></button>
                <button class="btn"><a href="index.php?act=listdm">Danh sách</a></button>
                <br>
                <?php
                if(isset($thongbao)&&($thongbao!=""))
                echo $thongbao;
                ?>
            </form>
        </article>
    </div>
</body>

</html>