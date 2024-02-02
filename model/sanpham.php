<?php

    function add_sanpham($tensp,$giasp,$hinh,$mota,$iddm) {
        $sql = "INSERT INTO sanpham(name,price,img,mota,iddm) values('$tensp','$giasp','$hinh','$mota','$iddm')";
        pdo_execute($sql);
    }
    function delete_sanpham($id) {
        $sql = "DELETE FROM sanpham WHERE id=".$_GET['id'];
        pdo_execute($sql);
    }
    function loadAll_sanpham_top10() {
        $sql = "SELECT * FROM sanpham WHERE 1 ORDER BY view DESC LIMIT 0,8";
        $lstsanpham = pdo_query($sql);
        return $lstsanpham;
    }
    function loadAll_sanpham_home() {
        $sql = "SELECT * FROM sanpham WHERE 1 ORDER BY ID DESC LIMIT 0,12";
        $lstsanpham = pdo_query($sql);
        return $lstsanpham;
    }
    // function loadAll_sanpham($keyw="",$iddm=0) {
    //     $sql = "SELECT * FROM sanpham WHERE 1";
    //     if ($keyw != "") {
    //         $sql.=" AND name Like '%".$keyw."%'";
    //     }
    //     if ($iddm>0) {
    //         $sql.=" AND iddm = '".$iddm."'";
    //     }
    //     $sql.=" ORDER BY id DESC";
    //     $lstsanpham = pdo_query($sql);
    //     return $lstsanpham;
    // }
    
    function loadall_sanpham($kyw,$iddm){
        $sql="select * from sanpham where 1";
        if ($kyw!="") {
            $sql.=" and name like '%".$kyw."%'";
        }
        if ($iddm>0) {
            $sql.=" and iddm='".$iddm."'";
        }
        $sql.=" order by id desc";
                $listsanpham = pdo_query($sql);
                return $listsanpham;
    }

    function load_ten_dm($iddm) {
        if ($iddm>0) {
            $sql = "SELECT * FROM danhmuc WHERE id=".$iddm;
            $dmuc = pdo_query_one($sql);
            extract($dmuc);
            return $name;
        }else {
            return "";
        }
            
    }
    function load_one_sanpham($id) {
        $sql = "SELECT * FROM sanpham WHERE ID=".$id;
        $sanphamone = pdo_query_one($sql);
        return $sanphamone;
    }
    function load_cungloai_sanpham($id,$iddm) {
        $sql = "SELECT * FROM sanpham WHERE iddm=".$iddm." AND id<>".$id;
        $lstsanpham = pdo_query($sql);
        return $lstsanpham;
    }
    function update_sanpham($ID,$iddm,$tensp,$giasp,$hinh,$mota) {
        if ($hinh!="") {
            $sql = "UPDATE sanpham SET name='".$tensp."', price='".$giasp."', img='".$hinh."', mota='".$mota."', iddm='".$iddm."' WHERE ID=".$ID;
        }else{
            $sql = "UPDATE sanpham SET name='".$tensp."', price='".$giasp."', mota='".$mota."', iddm='".$iddm."' WHERE ID=".$ID;
        }
        pdo_execute($sql);
    }
?>