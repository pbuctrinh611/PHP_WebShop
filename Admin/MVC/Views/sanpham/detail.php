<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <h2>Mã sản phẩm: <?= $data['MaSP']?></h2>
    <h2>Tên sản phẩm: <?= $data['TenSP'] ?></h2>
    <h2>Đơn giá: <?= $data['DonGia']?></h2>
    <h2>Số lượng:<?= $data['SoLuong']?> </h2>
    <h2>Hình Ảnh: </h2>
    <a><img src="../public/<?=$data['HinhAnh']?>" height="400px"></a>
</table>