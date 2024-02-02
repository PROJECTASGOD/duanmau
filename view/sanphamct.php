
<div class="ab">
        
            <a href=""><h1 style="text-align: center ; padding-top: 20px">THÔNG TIN SẢN PHẨM</h1></a>
        </div>
        <div class="inforpro">

            <?php
                
                    extract($onesp);
                    $hinh = $img_path.$img;
                    echo '

                    <div class="img">
                <img src="'.$hinh .' " style="width: 100%; height:100%" alt="">
                </div>
                <div class="infor">
                <h1>'.$name.'</h1>
                <p>Lượt xem: <a href="">'.$view.'</a></p>
                <span>Giá: '.$price.'VNĐ </span>
                <p>'.$mota.'</p>
                <input type="range" min="1" max="90" value="30" class="age_text" id="age_text">
                <button class="buying"><img src="src/img/index/Giỏ hàng.jpg" alt="">Mua hàng</button><br>


                <img src="src/img/index/like.jpg" style="margin-top: 20px;" alt=""> <img src="src/img/index/share.jpg" style="margin-top: 20px;" alt="">
                </div>

                    ';

                
                
                ?>
            
        </div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script>
            $(document).ready(function() {
                $("#binhluan").load("view/binhluanform.php", {
                    idpro: <?= $id ?>
                });
            });
        </script>

        <div class="binhluan" id="binhluan">


        </div>

        

        <div class="trees">
            <hr>
            <a href=""><h1 style="padding-top: 20px">SẢN PHẨM CÙNG LOẠI</h1></a>
            <div class="listtrees">
                <?php
                foreach($SP_cungloai as $sp_cung_loai){
                    extract($sp_cung_loai);
                    $hinh = $img_path.$img;
                    $linkdm = "index.php?act=sanphamct&idsp=".$ID;
                    echo '

                <div class="tree">
                    <a href="'.$linkdm.'"><img src="'.$hinh .'" style="width:300px;height:300px  alt=""></a>
                    <a href="'.$linkdm.'"><p>'.$name.'</p></a>
                    <span>'.$price.' VNĐ</span>
                    <form action="index.php?act=addtocart" method="POST">
                        <input type="hidden" name="id" value="'.$ID.'">
                        <input type="hidden" name="name" value="'.$name.'">
                        <input type="hidden" name="img" value="'.$img.'">
                        <input type="hidden" name="price" value="'.$price.'">
                        <input type="submit" class="giohang" name="addtocart" value="Thêm vào giỏ hàng">
                    </form>
                </div>

                    ';
                

                }
                
                ?>
                
            </div>
        </div>
    