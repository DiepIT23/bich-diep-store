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
                <div class="col-2">Tổng tiền</div>
                <div class="col-2">Email</div>
                <div class="col-2">Số điện thoại</div>
                <div class="col-1">Ngày đặt</div>
                <div class="col-1">Thao tác</div>
            </div>
        </div>

        <div class="card-body">
            <?php foreach ($listdonhang as $donhang) {
                extract($donhang);
            ?>
            <div class="row text-center">
                <div class="col-1"><?= $id_donhang ?></div>
                <div class="col-2"><?= $ten_user ?></div>
                <div class="col-1"><?= $trang_thai ?></div>
                <div class="col-2"><?= number_format($tong_gia, 0, ',', '.') ?> VND</div>
                <div class="col-2"><?= $email ?></div>
                <div class="col-2"><?= $sdt ?></div>
                <div class="col-1"><?= $ngay_dat_hang ?></div>
                <div class="col-1"><a href="<?= $ADMIN_URL ?>/?act=chitiet&id=<?= $id_donhang ?>"
                        class="btn btn-success btn-sm">Xem chi
                        tiết</a>
                </div>
            </div>
            <?php
            }
            ?>

        </div>

    </div>
</div>