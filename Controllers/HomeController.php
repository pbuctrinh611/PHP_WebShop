<?php
require_once("Models/model.php");
class controller
{
    var $model;
    public function __construct()
    {
       $this->model = new model();
    }
    
    function list()
    {
        $data = $this->model->limit(1,2);
        var_dump($data);
    }
}