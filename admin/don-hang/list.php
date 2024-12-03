<?php
$loadDh = loadDonhang(0);
?>
<div class="container-fluid">
    <h1 class="text-center">Danh sách đơn hàng</h1>
    <div class="col-lg-4 mb-4">
        <form action="index.php?act=list-donhang" method="POST" class="d-flex align-items-center">
            <input type="text" class="form-control" placeholder="Tìm đơn hàng theo tên, email, điện thoại">
            <button type="submit" class="btn btn-light"><i class="fa fa-search" aria-hidden="true"></i></button>
        </form>
    </div>

    <div class="card">
        <div class="card-header bg-dark text-white">
            <div class="row text-center font-weight-bold">
                <div class="col-1">ID</div>
                <div class="col-2">Người đặt</div>
                <div class="col-1">Trạng thái</div>
                <div class="col-1">Tổng tiền</div>
                <div class="col-2">Địa chỉ-GH </div>
                <div class="col-1">Email</div>
                <div class="col-2">Số điện thoại</div>
                <div class="col-1">Ngày đặt</div>
                <div class="col-1">Thao tác</div>
            </div>
        </div>

        <div class="card-body">
            <?php foreach ($listdonhang as $donhang) { 
                extract($donhang);
                echo '
                <tr class="text-center align-middle">
                <td>'. $id_donhang.'</td>
                <td>'. $id_khachhang.'</td>
                <td>'. $trang_thai.'</td>
                <td>'. $tong_gia.'</td>
                <td>'.$diachi_giaohang.'</td>
                <td>'. $email.'</td>
                <td>'. $sdt.'</td>
                <td>'. $ngay_dat.'</td>
                <td>
                <a href="index.php/?act=chitiet" class="btn btn-success btn-sm">Xem chi tiết</a>
                </td>
                </tr>
                ';
            }
            ?>

        </div>
       
    </div>
</div>
