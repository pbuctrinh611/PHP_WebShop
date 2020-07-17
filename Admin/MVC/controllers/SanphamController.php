<?php
require_once("MVC/Models/sanpham.php");
class SanphamController
{
    var $sanpham_model;
    public function __construct()
    {
        $this->sanpham_model = new sanpham();
    }
    public function list()
    {
        $data = $this->sanpham_model->All();
        require_once("MVC/Views/Admin/index.php");
        // require_once("MVC/Views/posts/list.php");
    }
    public function detail()
    {
        $id = isset($_GET['id']) ? $_GET['id'] : 1;
        $data = $this->sanpham_model->find($id);
        require_once("MVC/Views/Admin/index.php");
        //require_once("MVC/Views/posts/detail.php");
    }
    public function add()
    {
        $data_km = $this->sanpham_model->khuyenmai();
        $data_lsp = $this->sanpham_model->loaisanpham();
        require_once("MVC/Views/Admin/index.php");
        //require_once("MVC/Views/posts/add.php");
    }
    public function store()
    {
        $target_dir = "../public/img/products/";  // thư mục chứa file upload
        $HinhAnh = "";

        $target_file = $target_dir . basename($_FILES["HinhAnh"]["name"]); // link sẽ upload file lên

        $status_upload = move_uploaded_file($_FILES["HinhAnh"]["tmp_name"], $target_file);

        if ($status_upload) { // nếu upload file không có lỗi 
            $HinhAnh =  "img/products/" . basename($_FILES["HinhAnh"]["name"]);
        }
        $TrangThai = 0;
        if (isset($_POST['TrangThai'])) {
            $TrangThai = $_POST['TrangThai'];
        }
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $ThoiGian =  date('Y-m-d H:i:s');
        $data = array(
            'MaLSP' =>    $_POST['MaLSP'],
            'TenSP'  =>   $_POST['TenSP'],
            'DonGia' => $_POST['DonGia'],
            'SoLuong' => $_POST['SoLuong'],
            'HinhAnh' => $HinhAnh,
            'MaKM' =>  $_POST['MaKM'],
            'ManHinh' =>  $_POST['ManHinh'],
            'HDH' => $_POST['HDH'],
            'CamSau' =>  $_POST['CamSau'],
            'CamTruoc' =>  $_POST['CamTruoc'],
            'CPU' =>  $_POST['CPU'],
            'Ram' =>  $_POST['Ram'],
            'Rom' =>  $_POST['Rom'],
            'SDCard' =>  $_POST['SDCard'],
            'Pin' =>  $_POST['Pin'],
            'SoSao' =>  0,
            'SoDanhGia' => 0,
            'TrangThai' => $TrangThai,
            'MoTa' =>  $_POST['MoTa'],
            'ThoiGian' => $ThoiGian
        );
        foreach ($data as $key => $value) {
            if (strpos($value, "'") != false) {
                $value = str_replace("'", "\'", $value);
                $data[$key] = $value;
            }
        }
        $this->sanpham_model->store($data);
    }
    public function delete()
    {
        $id = $_GET['id'];
        $this->sanpham_model->delete($id);
    }
    public function edit()
    {
        $id = isset($_GET['id']) ? $_GET['id'] : 1;
        $data_km = $this->sanpham_model->khuyenmai();
        $data_lsp = $this->sanpham_model->loaisanpham();
        $data = $this->sanpham_model->find($id);
        require_once("MVC/Views/Admin/index.php");
        //require_once("MVC/Views/posts/edit.php");
    }
    public function update()
    {

        $target_dir = "../public/img/products/";  // thư mục chứa file upload
        $HinhAnh = "";

        $target_file = $target_dir . basename($_FILES["HinhAnh"]["name"]); // link sẽ upload file lên

        $status_upload = move_uploaded_file($_FILES["HinhAnh"]["tmp_name"], $target_file);
        var_dump(basename($_FILES["HinhAnh"]["name"]));

        if ($status_upload) { // nếu upload file không có lỗi 
            $thumbnail = basename($_FILES["HinhAnh"]["name"]);
        }

        $TrangThai = 0;
        if (isset($_POST['TrangThai'])) {
            $TrangThai = $_POST['TrangThai'];
        }
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $ThoiGian =  date('Y-m-d H:i:s');
        $data = array(
            'MaSP' => $_POST['MaSP'],
            'MaLSP' =>    $_POST['MaLSP'],
            'TenSP'  =>   $_POST['TenSP'],
            'DonGia' => $_POST['DonGia'],
            'SoLuong' => $_POST['SoLuong'],
            'HinhAnh' => $HinhAnh,
            'MaKM' =>  $_POST['MaKM'],
            'ManHinh' =>  $_POST['ManHinh'],
            'HDH' => $_POST["HDH"],
            'CamSau' =>  $_POST['CamSau'],
            'CamTruoc' =>  $_POST['CamTruoc'],
            'CPU' =>  $_POST['CPU'],
            'Ram' =>  $_POST['Ram'],
            'Rom' =>  $_POST['Rom'],
            'SDCard' =>  $_POST['SDCard'],
            'Pin' =>  $_POST['Pin'],
            'SoSao' =>  0,
            'SoDanhGia' => 0,
            'TrangThai' => $TrangThai,
            'MoTa' =>  $_POST['MoTa'],
            'ThoiGian' => $ThoiGian
        );
        foreach ($data as $key => $value) {
            if (strpos($value, "'") != false) {
                $value = str_replace("'", "\'", $value);
                $data[$key] = $value;
            }
        }
        if ($HinhAnh == "") {
            unset($data['HinhAnh']);
        }

        $this->sanpham_model->update($data);
    }
}
