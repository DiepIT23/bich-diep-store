    <div class="container-fluid">
        <div class="row mb-3">
            <div class="col-lg-4">
                <input type="text" class="form-control" placeholder="Tìm nhân viên theo tên, email, điện thoại">
            </div>
            <div class="col-1">
                <button type="submit" class="btn btn-light"><i class="fa fa-search" aria-hidden="true"></i></button>
            </div>
        </div>
        <div class="card">
            <div class="card-header container-fluid text-uppercase font-weight-bold bg-dark text-white">
                <div class="row">
                    <div class="col-lg-1">ID</div>
                    <div class="col-2">Tên</div>
                    <div class="col-2">Email</div>
                    <div class="col-2">SĐT</div>
                    <div class="col-2">Đơn hàng đang quản lý</div>
                    <div class="col-1">Kích hoạt</div>
                    <div class="col-1">Phân quyền quản trị</div>
                    <div class="col-1">Hành động</div>
                </div>
            </div>
            <div class="card-body">
                <a href="<?= $ADMIN_URL ?>/?act=" class="row text-dark text-decoration-none">
                    <div class="col-lg-1">ID</div>
                    <div class="col-2">Tên</div>
                    <div class="col-2">Email</div>
                    <div class="col-2">SĐT</div>
                    <div class="col-2">Đơn hàng đang quản lý</div>
                    <div class="col-1">Kích hoạt</div>
                    <div class="col-1">Phân quyền quản trị</div>
                    <div class="col-1">Hành động</div>
                </a>
            </div>
        </div>
    </div>