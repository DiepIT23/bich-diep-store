<!-- SEARCH FORM -->
<form class="form-inline col-lg-3">
    <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
            <button class="btn btn-navbar" type="submit">
                <i class="fas fa-search"></i>
            </button>
        </div>
    </div>
</form>
<div class="container">
    <div class="row mt-5">
        <a href="<?= $ROOT_URL ?>/" class="col-lg-4 d-flex flex-column align-items-center text-dark">
            <img src="<?= $IMAGES_URL ?>/web-client.png" height="100px">
            <h4>Web client</h4>
        </a>
        <a href="<?= $ADMIN_URL ?>/?act=list-sanpham" class="col-lg-4 d-flex flex-column align-items-center text-dark">
            <img src="<?= $IMAGES_URL ?>/admin-sanpham.png" height="100px">
            <h4>Sản phẩm</h4>
        </a>
        <a href="<?= $ADMIN_URL ?>/?act=list-danhmuc" class="col-lg-4 d-flex flex-column align-items-center text-dark">
            <img src="<?= $IMAGES_URL ?>/danh-muc-icon 1.png" height="100px">
            <h4>Danh mục</h4>
        </a>
        <a href="<?= $ADMIN_URL ?>/?act=list_bl" class="col-lg-4 d-flex flex-column align-items-center text-dark">
            <img src="<?= $IMAGES_URL ?>/admin-binhluan.png" height="100px">
            <h4>Bình luận</h4>
        </a>
        <a href="<?= $ADMIN_URL ?>/?act=don-hang" class="col-lg-4 d-flex flex-column align-items-center text-dark">
            <img src="<?= $IMAGES_URL ?>/admin-donhang.png" height="100px">
            <h4>Đơn hàng</h4>
        </a>
        <a href="<?= $ADMIN_URL ?>/?act=tai-khoan" class="col-lg-4 d-flex flex-column align-items-center text-dark">
            <img src="<?= $IMAGES_URL ?>/admin-nhanvien.png" height="100px">
            <h4>Tài khoản</h4>
        </a>
        <a href="<?= $ADMIN_URL ?>/?act=thong-ke" class="col-lg-4 d-flex flex-column align-items-center text-dark">
            <img src="<?= $IMAGES_URL ?>/admin-thongke.png" height="100px">
            <h4>Thống kê</h4>
        </a>
    </div>
</div>