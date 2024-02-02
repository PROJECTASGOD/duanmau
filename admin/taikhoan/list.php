<article>
            <div class="headline">
                <h2>DANH SÁCH TÀI KHOẢN</h2>
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th></th>
                        <th>Mã TK</th>
                        <th>TÊN ĐĂNG NHẬP</th>
                        <th>MẬT KHẨU</th>
                        <th>EMAIL</th>
                        <th>ĐỊA CHỈ</th>
                        <th>SỐ ĐIỆN THOẠI</th>
                        <th>VAI TRÒ</th>
                        <th>HÀNH ĐỘNG</th>
                    </tr>
                </thead>
                <tbody >
                <?php 
                foreach($listtaikhoan as $taikhoan){
                    extract($taikhoan);
                    if($role==0){
                        $vaitro="Khách hàng";
                    }elseif($role==1){
                        $vaitro="Admin";
                    }
                    $suatk = "index.php?act=suatk&id=".$id;
                    $xoatk = "index.php?act=xoatk&id=".$id;
                    echo '<tr>
                    <td><input type="checkbox" name=""></td>
                    <td>'.$id.'</td>
                    <td>'.$user.'</td>
                    <td>'.$pass.'</td>
                    <td>'.$email.'</td>
                    <td>'.$address.'</td>
                    <td>'.$tel.'</td>
                    <td>'.$vaitro.'</td>
                    <td>
                    <a href="'.$suatk.'"><input  class="btn btn-primary" type="button" name="" value="Sửa"></a>
                    <a href="'.$xoatk.'"><input class="btn btn-primary" type="button" name="" value="Xóa"></a>
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