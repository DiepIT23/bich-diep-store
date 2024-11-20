<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="height=device-height, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
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
            <a href="<?= $ROOT_URL ?>/" class="col-lg-4 d-flex flex-column align-items-center">
                <img src="<?= $IMAGES_URL ?>/web-client.png" height="100px">
                <h4>Web client</h4>
            </a>
            <a href="<?= $ADMIN_URL ?>/?act=san-pham" class="col-lg-4 d-flex flex-column align-items-center">
                <img src="<?= $IMAGES_URL ?>/admin-sanpham.png" height="100px">
                <h4>Sản phẩm</h4>
            </a>
            <a href="<?= $ADMIN_URL ?>/?act=danh-muc" class="col-lg-4 d-flex flex-column align-items-center">
                <img src="<?= $IMAGES_URL ?>/danh-muc-icon 1.png" height="100px">
                <h4>Danh mục</h4>
            </a>
            <a href="<?= $ADMIN_URL ?>/?act=binh-luan" class="col-lg-4 d-flex flex-column align-items-center">
                <img src="<?= $IMAGES_URL ?>/admin-binhluan.png" height="100px">
                <h4>Bình luận</h4>
            </a>
            <a href="<?= $ADMIN_URL ?>/?act=don-hang" class="col-lg-4 d-flex flex-column align-items-center">
                <img src="<?= $IMAGES_URL ?>/admin-donhang.png" height="100px">
                <h4>Đơn hàng</h4>
            </a>
            <a href="<?= $ADMIN_URL ?>/?act=nhan-vien" class="col-lg-4 d-flex flex-column align-items-center">
                <img src="<?= $IMAGES_URL ?>/admin-nhanvien.png" height="100px">
                <h4>Nhân viên</h4>
            </a>
            <a href="<?= $ADMIN_URL ?>/?act=khach-hang" class="col-lg-4 d-flex flex-column align-items-center">
                <img src="<?= $IMAGES_URL ?>/admin-khachhang.png" height="100px">
                <h4>Khách hàng</h4>
            </a>
            <a href="<?= $ADMIN_URL ?>/?act=thong-ke" class="col-lg-4 d-flex flex-column align-items-center">
                <img src="<?= $IMAGES_URL ?>/admin-thongke.png" height="100px">
                <h4>Thống kê</h4>
            </a>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>