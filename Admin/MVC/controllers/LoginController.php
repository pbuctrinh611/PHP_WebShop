<?php 
    require_once("MVC/Models/login.php");
    class LoginController {
        var $login_model;
        public function __construct()
        {
            $this->login_model = new login();
        }
        public function login()
        {
            require_once("MVC/Views/login/login.php");
        }
        public function login_action()
        {
            $this->login_model->login_action();
        }
        public function admin()
        {
            require_once("MVC/Views/Admin/index.php");
        }
        public function logout()
        {
            $this->login_model->logout();
        }
    }
?>