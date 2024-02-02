<?php 
    function list_thongke(){
        $sql = "SELECT danhmuc.ID as madm, danhmuc.name as tendm, count(sanpham.ID) as countsp, min(sanpham.price) as minprice, max(sanpham.price) as maxprice, avg(sanpham.price) as avgprice";
        $sql.=" from sanpham left join danhmuc on danhmuc.ID=sanpham.iddm";
        $sql.=" group by danhmuc.ID order by danhmuc.ID desc";
        $listtk=pdo_query($sql);
        return $listtk; 

    }

?>