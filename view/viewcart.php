<article>
            <div class="headline" style="margin-bottom: 15px;
                                        padding: 20px 30px;
                                        background-color: rgba(6, 85, 23, 0.425);
                                        border-radius: 10px;
                                        color: aliceblue;">
                <h2>GIỎ HÀNG</h2>
            </div>
            <table class="table" style="margin-bottom: 20px ;">
                <thead>
                    <tr>
                        
                        <th>HÌNH</th>
                        <th>SẢN PHẨM</th>
                        <th>ĐƠN GIÁ</th>
                        <th>SỐ LƯỢNG</th>
                        <th>THÀNH TIỀN</th>
                        <th>THAO TÁC</th>
                    </tr>
                </thead>
                <tbody >
                <?php 
                $tong = 0;
                $i = 0;
                foreach($_SESSION['mycart'] as $cart){
                    extract($cart);

                    $hinh = $img_path.$cart[2];
                        (int)$ttien = (int)$cart[3] * (int)$cart[4];
                        $tong += (int)$ttien;

                        $xoasp='<a href="index.php?act=delcart&idcart='.$i.'"><input type="button" class="btn" value="Xóa"></a>';

                    echo '<tr>
                    <td><img src="'.$hinh.'" alt="" height="80px"></td>
                    <td>'.$cart[1].'</td>
                    <td>'.$cart[3].'</td>
                    <td>'.$cart[4].'</td>
                    <td>'.$ttien.'</td>
                    <td>'.$xoasp.'</td>
                </tr>';
                $i+=1;
                }
                echo '
                        <tr>
                            <td colspan="4">Tổng đơn hàng</td>
                            <td>'.$tong.'</td>
                            <td></td>
                        </tr>
                    ';
                ?>
                
                </tbody>
            </table>
                
                
                <a href="index.php?act=delcart"><input type="button" class="btn" name="" value="Xóa giỏ hàng"></a>


                <?php 
                if(isset($_SESSION['user'])){ 

                ?>
                    <input type="button" style="margin-bottom: 30px ;" class="btn" name="" value="Đồng ý đặt hàng">
                <?php

                }else{

                ?>

                <p style="margin-top:20px ;margin-bottom:30px ;"><?php echo "Đăng nhập để đặt hàng." ?> <a href="index.php?act=signin">Đăng nhập ngay</a></p>

                <?php } ?>



            
        </article>