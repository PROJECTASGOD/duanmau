<article>
            <div class="headline">
                <h2>QUẢN LÝ HÀNG HÓA</h2>
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>ID</th>
                        <th>TÊN DANH MỤC</th>
                        <th>HÀNH ĐỘNG</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        foreach ($lstdanhmuc as $danhmuc) {
                            extract($danhmuc);
                            $suadm = "index.php?act=suadm&id=".$ID;
                            $xoadm = "index.php?act=xoadm&id=".$ID;

                            echo '
                                    <tr>
                                        <td><input type="checkbox" name="" id=""></td>
                                        <td>'.$ID.'</td>                                
                                        <td>'.$name.'</td>
                                        <td>
                                            <a href="'.$suadm.'"><input class="btn" type="button" value="Sửa"></a>
                                            <a href="'.$xoadm.'"><input class="btn" type="button" value="Xoá"></a>
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
                <a href="index.php?act=adddm"><input type="button" class="btn" value="Nhập thêm"></a>

            </div>
        </article>
    </div>