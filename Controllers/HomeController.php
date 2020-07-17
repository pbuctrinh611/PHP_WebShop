<?php
require_once("MVC/Models/blog_post.php");
class Blog_postController
{
    var $model;
    public function __construct()
    {
       
    }
    
    function list()
    {
        require_once("MVC/Views/index.php");
    }
}