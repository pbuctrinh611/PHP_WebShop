<?php
require_once("MVC/Models/loaisanpham.php");
class LoaisanphamController
{
	var $loaisanpham_model;
	function __construct()
	{
		$this->loaisanpham_model = new loaisanpham();
	}

	public function list()
	{
		$data = array();
		$data = $this->loaisanpham_model->All(); 
		require_once("MVC/Views/Admin/index.php");
		//require_once('MVC/views/categories/list.php');
	}

	public function add()
	{
		require_once("MVC/Views/Admin/index.php");
		//require_once('MVC/views/categories/add.php');
	}
	public function store()
	{
		$data = array(
			'title' => $_POST['title'],
			'descripition' => $_POST['descripition']
		);
		foreach ($data as $key => $value) {
            if (strpos($value, "'") != false) {
                $value = str_replace("'", "\'", $value);
                $data[$key] = $value;
            }
		}	
		foreach ($data as $key => $value) {
            if (strpos($value, "'") != false) {
                $value = str_replace("'", "\'", $value);
                $data[$key] = $value;
            }
        }
		$this->loaisanpham_model->store($data);
	}
	public function detail()
	{
		$id = isset($_GET['id']) ? $_GET['id'] : 5;
		$data = $this->loaisanpham_model->find($id);
		require_once("MVC/Views/Admin/index.php");
		//require_once('MVC/views/categories/detail.php');
	}
	public function delete()
	{
		if (isset($_GET['id'])) {
			$this->loaisanpham_model->delete($_GET['id']);
		}
	}
	public function edit()
	{
		$id = isset($_GET['id']) ? $_GET['id'] : 5;
		$data = $this->loaisanpham_model->find($id);
		require_once("MVC/Views/Admin/index.php");
		//require_once('MVC/views/categories/edit.php');
	}
	public function update()
	{
		$data = array(
			'id' => $_POST['id'],
			'title' => $_POST['title'],
			'descripition' => $_POST['descripition']
		);
		foreach ($data as $key => $value) {
            if (strpos($value, "'") != false) {
                $value = str_replace("'", "\'", $value);
                $data[$key] = $value;
            }
        }
		$this->loaisanpham_model->update($data);
	}
}
