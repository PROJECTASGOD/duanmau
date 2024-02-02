<?php
    if (is_array($dmuc)) {
        extract($dmuc);
    }
?>
<article>
            <div class="headline">
                <h2>CẬP NHẬT LOẠI HÀNG</h2>
            </div>
            <form action="index.php?act=updatedm" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="">Mã loại</label> <br>
                            <input class="form-control" type="text" name="ma_loai" readonly placeholder="auto number"
                                disabled>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="">Tên loại</label> <br>
                            <input class="form-control" type="text" name="ten_loai" value = "<?php if (isset($name)&&($name != "")) echo $name ;?>">
                        </div>
                    </div>
                </div>
                <input type="hidden" name="id" value="<?php if (isset($ID)&&($ID>0)) echo $ID; ?>">
                <input type="submit" class="btn" name="capnhat" value="Cập nhật">
                <input type="reset"  class="btn" value="Nhập lại">
                <a href="index.php?act=listdm"><input type="button" class="btn"  value="Danh sách"></a>
            </form>
            <?php
            if (isset($thongbao)&&($thongbao!="")) echo $thongbao;
            ?>
        </article>
    </div>