<?php
$mod = isset($_GET['mod']) ? $_GET['mod'] : "home";
switch ($mod) {
    case 'home':
        // require_once('MVC/controllers/HomeController.php');
        // $controller_obj = new HomeController();
        // $controller_obj->list();
        // break;
    case 'cart':
        // require_once('MVC/controllers/CategoryController.php');
        // $controller_obj = new CategoryController();
        // $controller_obj->list();
        break;
    case 'login':
        // require_once('MVC/controllers/CategoryController.php');
        // $controller_obj = new CategoryController();
        // $controller_obj->list();
        break;
    case 'product':
        // require_once('MVC/controllers/CategoryController.php');
        // $controller_obj = new CategoryController();
        // $controller_obj->list();
        break;
    case 'show':
        // require_once('MVC/controllers/CategoryController.php');
        // $controller_obj = new CategoryController();
        // $controller_obj->list();
        break;
    default:
        // require_once('MVC/controllers/CategoryController.php');
        // $controller_obj = new CategoryController();
        // $controller_obj->list();
        break;
}
