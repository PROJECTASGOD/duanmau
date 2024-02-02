<article>
            <div class="headline">
                <h2>QUẢN LÝ HÀNG HÓA</h2>
            </div>
            <div class="form">
                <br>
                <form action="index.php?act=listsp" method="post">
                    <input style="width: 30%;
            height: 40px;
            border: 1px solid #37A9CD;
            font-size: 16px;
            border-radius: 5px;
            padding-left: 15px;
            margin-bottom: 15px;" type="text" name="keyw" placeholder="Nhập thông tin..."> 
                    <select name="iddm" id="" style="width: 20%;
            height: 40px;
            border: 1px solid #37A9CD;
            font-size: 16px;
            border-radius: 5px;
            padding-left: 5px;">
                        <option value="0" selected>Tất cả</option>
                        <?php
                            foreach($lstdanhmuc as $danhmuc){
                                extract($danhmuc);
                                echo '<option value="'.$ID.'">'.$name.'</option>';
                            }
                        ?>
                    </select>
                    <input style="width: 10%;
            height: 40px;
            background: #37A9CD;
            border-radius: 5px;
            font-size: 18px;
            line-height: 19px;
            color: #FFFFFF;
            font-weight: 600;" type="submit" name="listok" value="Tìm kiếm">
                </form>
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>MÃ SẢN PHẨM</th>                       
                        <th>TÊN SẢN PHẨM</th>
                        <th>ẢNH</th>
                        <th>ĐƠN GIÁ</th>
                        <th>LƯỢT XEM</th>
                        <th>MÔ TẢ</th>
                        <th>HÀNH ĐỘNG</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        foreach ($lstsanpham as $sanpham) {
                            extract($sanpham);
                            $suasp = "index.php?act=suasp&id=".$ID;
                            $xoasp = "index.php?act=xoasp&id=".$ID;
                            $hinhpath = "../upload/".$img;
                            if (is_file($hinhpath)) {
                                $hinh = "<img src='".$hinhpath."' width='123' height='100' text align: 'center'>";
                            }else {
                                $hinh ="no photo";
                            }
                            echo '
                                    <tr>
                                        <td><input type="checkbox" name="" id=""></td>
                                        <td>'.$ID.'</td>                                       
                                        <td>'.$name.'</td>
                                        <td>'.$hinh.'</td>
                                        <td>'.$price.'</td>
                                        <td>'.$view.'</td>
                                        <td>'.$mota.'</td>
                                        <td>
                                            <a href="'.$suasp.'"><input type="button" value="Sửa"></a>
                                            <a href="'.$xoasp.'"><input type="button" value="Xoá"></a>
                                        </td>
                                    </tr>';
                        }
                    ?>
                
                </tbody>
            </table>
            <div>
                <input type="button" class="btn" value="Chọn tất cả">
                <input type="button" class="btn" value="Bỏ tất cả">
                <input type="button" class="btn" value="Xoá các mục đã chọn">
                <a href="index.php?act=addsp"><input class="btn" type="button" value="Nhập thêm"></a>

            </div>
        </article>
    </div>