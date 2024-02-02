<?php

    function add_danhmuc($ten_loai) {
        $sql = "INSERT INTO danhmuc(name) values('$ten_loai')";
        pdo_execute($sql);
    }
    function delete_danhmuc($id) {
        $sql = "DELETE FROM danhmuc WHERE id=".$_GET['id'];
        pdo_execute($sql);
    }
    function loadAll_danhmuc() {
        $sql = "SELECT * FROM danhmuc ORDER BY id desc";
        $lstdanhmuc = pdo_query($sql);
        return $lstdanhmuc;
    }
    function load_one_danhmuc($id) {
        $sql = "SELECT * FROM danhmuc WHERE ID=".$_GET['id'];
        $dmuc = pdo_query_one($sql);
        return $dmuc;
    }
    function update_danhmuc($id, $ten_loai) {
        $sql = "UPDATE danhmuc SET name='".$ten_loai."' WHERE ID=".$id;
        pdo_execute($sql);
    }
?>