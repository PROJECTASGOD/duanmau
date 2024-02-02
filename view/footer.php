
        
        <footer>
            <div class="last">
                <h1>Về Xanhdecor</h1>
                <p>Với tình yêu decor & handmade. Xanh Decor mang đến cho bạn những sản phẩm làm đẹp góc học tập, làm việc và quà tặng độc đáo. </p>
            </div>

            <div class="logo">
                <img src="src/img/index/Logo.png" >
            </div>

            <div class="lienhe">
                <h1>THÔNG TIN LIÊN HỆ</h1>
                <p>Địa chỉ: Số 68 đường Đỗ Đức Dục, Mễ Trì, Nam Từ Liêm, Hà Nội</p>
                <p>SĐT: 09440037082</p>
                <p>Email: Trungson1842003@gmail.com</p>
            </div>

            
        </footer>
        <script>
            let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}
  slides[slideIndex-1].style.display = "block";
  setTimeout(showSlides, 3000); // Change image every 2 seconds
}
        </script>
    </div>
</body>
</html>