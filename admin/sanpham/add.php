
<article>
            <div class="headline">
                <h2>QUẢN LÝ SẢN PHẨM</h2>
            </div>
            <form action="index.php?act=addsp" method="post" enctype="multipart/form-data">
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
                                <?php
                                    foreach($lstdanhmuc as $danhmuc){
                                        extract($danhmuc);
                                        echo '<option value="'.$ID.'">'.$name.'</option>';
                                    }
                                ?>
                                
                            </select>
                            
                        </div>
                    </div>
                    
                    <div class="col">
                        <div class="form-group">
                            <label for="">Tên sản phẩm</label>
                            <input class="form-control" type="text" name="tensp" placeholder="tên sản phẩm">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="">Đơn giá</label>
                            <input class="form-control" type="text" name="giasp">
                        </div>
                    </div>
                    
                    <div class="col">
                        <div class="form-group">
                            <label for="">Hình</label>
                            <input type="file" name="hinh" placeholder="">
                        </div>
                    </div>

                    <div class="full">
                        <div class="form-group">
                            <label for="">Mô tả</label>
                            <textarea name="mota"></textarea>
                        </div>
                    </div>
                </div>

                <input type="submit" class="btn" name="themmoi" value="Thêm mới">
                <input type="reset"  class="btn" value="Nhập lại">
                <a href="index.php?act=listsp"><input class="btn" type="button" value="Danh sách"></a>
                <?php
            if (isset($thongbao)&&($thongbao!="")) echo $thongbao;
            ?>
            </form>
            
        </article>
    </div>