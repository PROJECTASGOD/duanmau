<article>
            <div class="headline">
                <h2>THỐNG KÊ HÀNG HÓA</h2>
            </div>

            <table class="table">
                <thead>
                    <tr>
                        <th>MÃ DANH MỤC</th>
                        <th>TÊN DANH MỤC</th>                       
                        <th>SỐ LƯỢNG</th>
                        <th>GIÁ CAO NHẤT</th>
                        <th>GIÁ THẤP NHẤT</th>
                        <th>GIÁ TRUNG BÌNH</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        foreach ($tksp as $tk) {
                            extract($tk);
                            echo '
                                    <tr>
                                        <td>'.$madm.'</td>
                                        <td>'.$tendm.'</td>                                       
                                        <td>'.$countsp.'</td>
                                        <td>'.$maxprice.'</td>
                                        <td>'.$minprice.'</td>
                                        <td>'.$avgprice.'</td>
                                    </tr>';
                        }
                    ?>
                
                </tbody>
            </table>
            <div>
                <a href="index.php?act=bieudo"><input type="button" class="btn" value="Xem biểu đồ"></a>

            </div>
        </article>
    </div>