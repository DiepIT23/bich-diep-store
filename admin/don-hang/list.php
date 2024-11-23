
    <div class="container-fluid">
        <div class="row mb-3">
            <div class="col-lg-4">
                <input type="text" class="form-control" placeholder="Tìm đơn hàng theo tên, email, điện thoại">
            </div>
            <div class="col-1">
                <button type="submit" class="btn btn-light"><i class="fa fa-search" aria-hidden="true"></i></button>
            </div>
        </div>
        <div class="card">
            <div class="card-header container-fluid text-uppercase font-weight-bold bg-dark text-white">
                <div class="row">
                    <div class="col-lg-1">ID</div>
                    <div class="col-2">Trạng thái</div>
                    <div class="col-1">Người đặt hàng</div>
                    <div class="col-2">Tổng tiền</div>
                    <div class="col-2">Email</div>
                    <div class="col-2">Số điện thoại</div>
                    <div class="col-2">Ngày đặt</div>
                </div>
            </div>
            <div class="card-body">
            <?php foreach ($list as $value) { ?>
                    <a href="?act=chitiet-donhang&id=<?php echo $value->id_donhang ?>" class="row text-dark text-decoration-none mb-3">
                        <div class="col-lg-1"><?php echo $value->id_donhang ?></div>
                        <div class="col-2"><?php echo $value->trang_thai ?></div>
                        <div class="col-2"><?php echo $value->nguoi ?></div>
                        <div class="col-2"><?php echo number_format($value->total_amount, 0, ",", ".") ?>đ</div>
                        <div class="col-2"><?php echo $value->email ?></div>
                        <div class="col-2"><?php echo $value->phone ?></div>
                        <div class="col-1"><?php echo $value->order_date ?></div>
                    </a>
                <?php } ?>
            </div>
                <a href="<?= $ADMIN_URL ?>/?act=chitiet-donhang" class="row text-dark text-decoration-none">
                    <div class="col-lg-1">ID</div>
                    <div class="col-2">Trạng thái</div>
                    <div class="col-1">Người đặt hàng</div>
                    <div class="col-2">Tổng tiền</div>
                    <div class="col-2">Email</div>
                    <div class="col-2">Số điện thoại</div>
                    <div class="col-2">Ngày đặt</div>
                </a>
            </div>
        </div>
    </div>