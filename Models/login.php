<?php
require_once("connection.php");
class login
{
    var $conn;
    function __construct()
    {
        $conn_obj = new Connection();
        $this->conn = $conn_obj->conn;
    }
    function login_action()
    {
        $taikhoan = $_POST['taikhoan'];
        $matkhau = md5($_POST['matkhau']);
        if (strpos($taikhoan, "'") != false) {
            $taikhoan = str_replace("'", "\'", $taikhoan);
        }
        $query = "SELECT * from nguoidung  WHERE taikhoan = '" . $taikhoan . "' AND matkhau = '" . $matkhau . "' AND trangthai = 1";
        $login = $this->conn->query($query)->fetch_assoc();
        if ($login !== NULL) {
            $_SESSION['isLogin'] = true;
            $_SESSION['login'] = $login;
            header('Location: ?mod=login');
        } else {
            setcookie('msg', 'Đăng nhập không thành công', time() + 5);
            header('Location: ?mod=login');
        }
    }
    function logout()
    {
        session_destroy();
        header('location: ?mod=login');
    }
}
