<div class="slideshow-container" style="margin-top:60px">

<!-- Full-width images with number and caption text -->
<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="../src/img/index/banner.jpg" style="width:100%">
  <div class="text">Caption Text</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="../src/img/index/banner2.jpg" style="width:100%">
  <div class="text">Caption Two</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="../src/img/index/banner3.jpg" style="width:100%">
  <div class="text">Caption Three</div>
</div>

<!-- Next and previous buttons -->
<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<!-- The dots/circles -->
<div style="text-align:center">
<span class="dot" onclick="currentSlide(1)"></span>
<span class="dot" onclick="currentSlide(2)"></span>
<span class="dot" onclick="currentSlide(3)"></span>
</div>

<div class="flowerpots">
                <a href=""><h1 style="padding-top:20px ;">SẢN PHẨM <? $tendm ?></h1></a>
                <div class="seach" style="text-align: center;">
            <form action="index.php?act=sanpham" method="post">
            <input type="text" name="text_seach" placeholder="Tìm kiếm" required class="inp_seach">
            <input type="submit" name="button_seach" value="Tìm kiếm" class="inp_submit">
            </form>
            </div>
            <div class="Listflowerpots">
            <?php
                foreach($dssp as $sptm){
                    extract($sptm);
                    $hinh = $img_path.$img;
                    $linksp = "index.php?act=sanphamct&idsp=".$ID;
                    echo '
                    <div class="product">
                    <a href="'.$linksp.'"><img src="'.$hinh.'" style="width:300px;height:300px "alt=""></a>
                    <a href="'.$linksp.'"><p>'.$name.'</p></a>
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
                <!-- <div class="flowerpot">
                    <a href="infor4.html"><img src="src/img/Flowerpot/12.jpg" alt=""></a>
                    <a href="infor4.html"><p>Chậu khủng long</p></a>
                    <span>50.000 VNĐ</span>
                </div>
                <div class="flowerpot">
                    <a href="infor3.html"><img src="src/img/Flowerpot/4.jpg" alt=""></a>
                    <a href="infor3.html"><p>Chậu cô bé</p></a>
                    <span>50.000 VNĐ</span>
                </div>
                <div class="flowerpot">
                    <a href="infor3.html"><img src="src/img/Flowerpot/2.jpg" alt=""></a>
                    <a href="infor3.html"><p>Chậu cậu bé</p></a>
                    <span>50.000 VNĐ</span>
                </div>
                <div class="flowerpot">
                    <a href="infor3.html"><img src="src/img/Flowerpot/5.jpg" alt=""></a>
                    <a href="infor3.html"><p>Chậu Husky bay</p></a>
                    <span>50.000 VNĐ</span>
                </div>
                <div class="flowerpot">
                    <a href="infor3.html"><img src="src/img/trangtri/chau-kinh-bup-mang_300x300.jpg" alt=""></a>
                    <a href="infor3.html"><p>Chậu kính búp măng</p></a>
                    <span>50.000 VNĐ</span>
                </div>
                <div class="flowerpot">
                    <a href="infor3.html"><img src="src/img/Flowerpot/7.jpg" alt=""></a>
                    <a href="infor3.html"><p>Chậu gấu trúc</p></a>
                    <span>50.000 VNĐ</span>
                </div>
                <div class="flowerpot">
                    <a href="infor3.html"><img src="src/img/Flowerpot/8.jpg" alt=""></a>
                    <a href="infor3.html"><p>Chậu kỳ lân</p></a>
                    <span>50.000 VNĐ</span>
                </div>
                <div class="flowerpot">
                    <a href="infor3.html"><img src="src/img/Flowerpot/11.jpg" alt=""></a>
                    <a href="infor3.html"><p>Chậu Husky</p></a>
                    <span>50.000 VNĐ</span>
                </div> -->
            </div>
        </div>

        <div class="banner3">
            <img src="src/img/index/banner5.jpg" style="width:100%;" alt="">
        </div>