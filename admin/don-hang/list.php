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