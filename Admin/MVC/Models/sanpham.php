<?php
require("model.php");
class sanpham extends model
{
    var $table = "sanpham";
    var $contens = "MaSP";
    function khuyenmai(){
        $query = "select * from khuyenmai ";
        $data = array();
        $resurt = $this->conn->query($query);
        while ($row = $resurt->fetch_assoc()) {
            $data[] = $row;
        }
        return $data;
    }
    function loaisanpham(){
        $query = "select * from loaisanpham ";
        $data = array();
        $resurt = $this->conn->query($query);
        while ($row = $resurt->fetch_assoc()) {
            $data[] = $row;
        }
        return $data;
    }
}
