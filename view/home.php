
        
        <div class="banner">
            <!-- Slideshow container -->
<div class="slideshow-container">

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

            <div class="intro">
                <div class="khonggian">
                    <img src="src/img/index/intro1.jpg" style="width: 100%; height: 100%" alt="">
                </div>
                <div class="chiase">
                    <img src="src/img/index/intro2.jpg" style="width: 100%; height: 100%" alt="">
                </div>
                <div class="giaohang">
                    <img src="src/img/index/intro3.jpg" style="width: 100%; height: 100%" alt="">
                </div>
            </div>
        </div>

        <div class="products">
            <a href=""><h1>SẢN PHẨM</h1></a>
            <div class="seach" style="text-align: center;">
            <form action="index.php?act=sanpham" method="post">
            <input type="text" name="text_seach" placeholder="Tìm kiếm" required class="inp_seach">
            <input type="submit" name="button_seach" value="Tìm kiếm" class="inp_submit">
            </form>
            </div>
            
            <div class="listproducts"> 
                <?php
                foreach($spnew as $sp){
                    extract($sp);
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
                <!-- <div class="product">
                    <a href="infor5.html"><img src="src/img/trangtri/set-shin-4-mon_550x550.jpg" style="width:300px;height:300px "alt=""></a>
                    <a href="infor5.html"><p>Set Shin 4 món</p></a>
                    <span>100.000 VNĐ</span>
                </div>
                <div class="product">
                    <a href="infor3.html"><img src="src/img/product/6.jpg" alt=""></a>
                    <a href="infor3.html"><p>Chậu hà mã bay</p></a>
                    <span>100.000 VNĐ</span>
                </div>
                <div class="product">
                    <a href=""><img src="src/img/product/7.jpg" alt=""></a>
                    <a href=""><p>Chậu hươu bay</p></a>
                    <span>100.000 VNĐ</span>
                </div>
                <div class="product">
                    <a href=""><img src="src/img/tree/1.jpg" alt=""></a>
                    <a href=""><p>Aglaonema Nitidum Curtisii</p></a>
                    <span>200.000 VNĐ</span>
                </div>

                <div class="product">
                    <a href="infor2.html"><img src="src/img/product/1.jpg" alt=""></a>
                    <a href="infor2.html"><p>Chậu cá sấu</p></a>
                    <span>100.000 VNĐ</span>
                </div>
                <div class="product">
                    <a href="inforpro1.html"><img src="src/img/tree/2.jpg" alt=""></a>
                    <a href="ASS/inforpro1.html"><p>Aglaonema Pictum var Tricolor</p></a>
                    <span>200.000 VNĐ</span>
                </div>
                <div class="product">
                    <a href="ASS/infor3.html"><img src="src/img/product/3.jpg" alt="" style="width:300px;height:300px"></a>
                    <a href="infor3.html"><p>Chậu cây mini</p></a>
                    <span>100.000 VNĐ</span>
                </div>
                <div class="product">
                    <a href="infor3.html"><img src="src/img/trangtri/heo-doi-non-cute_550x550.jpg" style="width:300px;height:300px" alt=""></a>
                    <a href="infor3.html"><p>Heo đội nón Cute</p></a>
                    <span>100.000 VNĐ</span>
                </div>
                <div class="product">
                    <a href="infor5.html"><img src="src/img/trangtri/set-shin-4-mon_550x550.jpg" style="width:300px;height:300px "alt=""></a>
                    <a href="infor5.html"><p>Set Shin 4 món</p></a>
                    <span>100.000 VNĐ</span>
                </div>
                <div class="product">
                    <a href="infor3.html"><img src="src/img/product/6.jpg" alt=""></a>
                    <a href="infor3.html"><p>Chậu hà mã bay</p></a>
                    <span>100.000 VNĐ</span>
                </div>
                <div class="product">
                    <a href=""><img src="src/img/product/7.jpg" alt=""></a>
                    <a href=""><p>Chậu hươu bay</p></a>
                    <span>100.000 VNĐ</span>
                </div>
                <div class="product">
                    <a href=""><img src="src/img/tree/1.jpg" alt=""></a>
                    <a href=""><p>Aglaonema Nitidum Curtisii</p></a>
                    <span>200.000 VNĐ</span>
                </div> -->


            </div>

        </div>
        <div class="flowerpots">
                <a href=""><h1>TOP 8 YÊU THÍCH</h1></a>
            <div class="Listflowerpots">
            <?php
                foreach($top10sp as $top10){
                    extract($top10);
                    $hinh = $img_path.$img;
                    $linkdm = "index.php?act=sanphamct&idsp=".$ID;
                    echo '
                        <div class="flowerpot">
                        <a href='.$linkdm.'><img src="'.$hinh.'" style="width:300px;height:300px "alt=""></a>
                        <a href='.$linkdm.'><p>'.$name.'</p></a>
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