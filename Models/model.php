<?php
require_once("connection.php");
class model
{
    var $conn;
    function __construct()
    {
        $conn_obj = new Connection();
        $this->conn = $conn_obj->conn;
    }
    function limit($a, $b)
    {
        $query =  "SELECT * from sanpham WHERE TrangThai = 1  ORDER BY ThoiGian DESC limit $a,$b";

        $result = $this->conn->query($query);

        $data = array();

        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
        return $data;
    }
    function danhmuc(){
        $query =  "SELECT * from DanhMuc ";

        $result = $this->conn->query($query);

        $data = array();

        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
        return $data;
    }
    function chitietdanhmuc($id){
        $query =  "SELECT * from loaidanhmuc where MaDM = $id ";

        $result = $this->conn->query($query);

        $data = array();

        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
        return $data;
    }
    function random($id)
    {
        $query = "SELECT * FROM SanPham WHERE TrangThai = 1 ORDER BY RAND () LIMIT $id";
        $result = $this->conn->query($query);

        $data = array();

        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
        return $data;
    }
    function banner($id)
    {
        $query =  "SELECT * from Banner limit $id";

        $result = $this->conn->query($query);

        $data = array();

        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
        return $data;
    }
}
