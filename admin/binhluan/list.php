

<article>
            <div class="headline">
                <h2>DANH SÁCH BÌNH LUẬN</h2>
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th></th>
                        <th>MÃ BÌNH LUẬN</th>
                        <th>NỘI DUNG</th>
                        <th>MÃ HÀNG HÓA</th>
                        <th>NGƯỜI BÌNH LUẬN</th>
                        <th>NGÀY BÌNH LUẬN</th>
                        <th>HÀNH ĐỘNG</th>
                    </tr>
                </thead>
                <tbody >
                <?php 
                foreach($listbinhluan as $binhluan){
                    extract($binhluan);
                    
                    if($iduser==0){
                        $vaitro="Khách hàng";
                    }elseif($iduser==1){
                        $vaitro="Admin";
                    }
                    $suabl = "index.php?act=suabl&id=".$id;
                    $xoabl = "index.php?act=xoabl&id=".$id;
                    echo '<tr>
                    <td><input type="checkbox" name=""></td>
                    <td>'.$id.'</td>
                    <td>'.$noidung.'</td>
                    <td>'.$vaitro.'</td>
                    <td>'.$idpro.'</td>
                    <td>'.$ngaybinhluan.'</td>
                    
                    <td>
                    <a href="'.$xoabl.'"><input class="btn btn-primary" type="button" name="" value="Xóa"></a>
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

            </div>
        </article>
    </div>