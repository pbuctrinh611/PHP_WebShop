<?php
require_once("connection.php");
class model
{
    var $conn;
    function __construct()
    {
        $conn_obj = new connection();
        $this->conn = $conn_obj->conn;
    }
    function limit($a, $b)
    {
        $query =  "SELECT * from sanpham WHERE TrangThai = 1  ORDER BY ThoiGian DESC limit $a,$b";

        require("result.php");

        return $data;
    }
    function danhmuc()
    {
        $query =  "SELECT * from DanhMuc ";

        require("result.php");
        
        return $data;
    }
    function chitietdanhmuc($id)
    {
        $query =  "SELECT * from loaidanhmuc where MaDM = $id ";

        require("result.php");
        
        return $data;
    }
    function random($id)
    {
        $query = "SELECT * FROM SanPham WHERE TrangThai = 1 ORDER BY RAND () LIMIT $id";
        require("result.php");
        
        return $data;
    }
    function banner($id)
    {
        $query =  "SELECT * from Banner limit $id";

        require("result.php");
        
        return $data;
    }
}
