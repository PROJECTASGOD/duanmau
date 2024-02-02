
<article>
            <div class="headline">
                <h2>CẬP NHẬT HÀNG HÓA</h2>
            </div>
            <form action="index.php?act=updatesp" method="POST" enctype="multipart/form-data">
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="">Danh mục</label>
                            <select name="iddm" id="" style="width: 100%;
            height: 30px;
            border: 1px solid;
            font-size: 16px;
            border-radius: 5px;
            padding-left: 5px;">
                            <option value="0" selected>Tất cả</option>
                                <?php
                                    foreach($lstdanhmuc as $danhmuc){
                                        extract($danhmuc);
                                        if($iddm==$ID)
                                        $s = "selected"; else $s ="";
                                        echo '<option value="'.$ID.'" '.$s.'>'.$name.'</option>';
                                    }
                                ?>
                            </select>
                            
                        </div>
                    </div>
                    <div class="col">
                    <?php
                        if (is_array($sanphamone)) {
                        extract($sanphamone);
                        }
                        $hinhpath = "../upload/".$img;
                        if (is_file($hinhpath)) {
                            $hinh = "<img src='".$hinhpath."' width='123' height='80' >";
                        }else {
                            $hinh ="no photo";
                        }
                    ?>
                        <div class="form-group">
                            <label for="">Tên sản phẩm</label>
                            <input class="form-control" type="text" name="tensp" value="<?=$name?>">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="">Đơn giá</label>
                            <input class="form-control" type="number" name="giasp" value="<?=$price?>">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="">Hình</label>
                            <input type="file" name="hinh" value="">
                            <?=$hinh?>
                        </div>
                    </div>

                    <div class="full">
                        <div class="form-group">
                            <label for="">Mô tả</label>
                            <textarea name="mota"><?=$mota?></textarea>
                        </div>
                    </div>
                </div>
                <input type="hidden" name="id" value="<?=$ID?>">
                <input type="submit" class="btn" name="capnhat" value="Cập nhật">
                <input type="reset" class="btn"  value="Nhập lại">
                <a href="index.php?act=listsp"><input class="btn" type="button" value="Danh sách"></a>
            </form>
            <?php
                if (isset($thongbao)&&($thongbao!="")) echo $thongbao;
            ?>
        </article>
    </div>
