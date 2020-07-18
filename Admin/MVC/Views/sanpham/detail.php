<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <h2>Mã sản phẩm: <?= $data['MaSP']?></h2>
    <h2>Tên sản phẩm: <?= $data['TenSP'] ?></h2>
    <h2>Đơn giá: <?= $data['DonGia']?></h2>
    <h2>Số lượng:<?= $data['SoLuong']?> </h2>
    <h2>Hình Ảnh 1: </h2>
    <a><img src="../public/<?=$data['HinhAnh1']?>" height="400px"></a>
    <h2>Hình Ảnh 2: </h2>
    <a><img src="../public/<?=$data['HinhAnh2']?>" height="400px"></a>
    <h2>Hình Ảnh 3: </h2>
    <a><img src="../public/<?=$data['HinhAnh3']?>" height="400px"></a>
</table>