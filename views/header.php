<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bich Diep Store - Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="layout/index.css">
    <link rel="stylesheet" href="layout/slide.css">
</head>
<style>
    .main-title {
        text-align: center;
        margin: 30px 0;
        font-size: 28px;
        font-weight: bold;
    }

    .description p {
        line-height: 1.8;
    }

    .contact-section {
        margin: 30px 0;
    }

    .contact-details {
        line-height: 1.8;
    }

    .map-placeholder {
        background-color: #dcdcdc;
        height: 300px;
    }

    .product-img {
        width: 80px;
        height: 80px;
        object-fit: cover;
        border: 1px solid #ddd;
        border-radius: 8px;
    }

    .cart-summary {
        background: #f8f9fa;
        padding: 20px;
        border-radius: 8px;
    }
</style>

<body>
    <!-- header -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 bg-black px-4 text-light roboto-small">
                Hotline mua hàng: 0912 345 678 (8h30 - 21h30, Tất cả các ngày trong
                tuần)
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="header mx-4 d-flex justify-content-between align-items-center">
                    <div class="logo">
                        <a href="<?= $ROOT_URL ?>/"><img src="<?= $IMAGES_URL ?>/Logo ngang.png"></a>
                    </div>
                    <div class="menu d-flex justify-content-between">
                        <a href="<?= $ROOT_URL ?>/" class="text-dark">Trang chủ</a>
                        <div class="dropdown">
                            <a href="<?= $ROOT_URL ?>/?act=ao" class="dropdown-toggle text-dark">
                                Áo Nam
                            </a>
                            <div class="dropdown-menu">
                                <?php
                                foreach ($list_dm as $danhmuc) {
                                    extract($danhmuc);
                                    if ($phan_loai == "Áo") {
                                ?>
                                        <a class="dropdown-item text-dark roboto-small py-3"
                                            href="<?= $ROOT_URL ?>/?act=ao&id_dm=<?= $id_dm ?>"><?= $ten_dm ?></a>
                                <?php
                                    }
                                }
                                ?>
                            </div>
                        </div>
                        <div class="dropdown">
                            <a href="<?= $ROOT_URL ?>/?act=quan" class="dropdown-toggle text-dark">
                                Quần Nam
                            </a>
                            <div class="dropdown-menu">
                                <?php
                                foreach ($list_dm as $danhmuc) {
                                    extract($danhmuc);
                                    if ($phan_loai == "Quần") {
                                ?>
                                        <a class="dropdown-item text-dark roboto-small py-3"
                                            href="<?= $ROOT_URL ?>/?act=quan&id_dm=<?= $id_dm ?>"><?= $ten_dm ?></a>
                                <?php
                                    }
                                }
                                ?>
                            </div>
                        </div>
                        <a href="<?= $ROOT_URL ?>/?act=gioithieu" class="text-dark">Về chúng tôi</a>
                        <a href="<?= $ROOT_URL ?>/?act=lienhe" class="text-dark">Liên hệ</a>
                    </div>
                    <div class="right">
                        <a href="<?= $ROOT_URL ?>/?act=giohang" class="text-dark">
                            <div class="cart right-icon">
                                <i class="fa-solid fa-cart-shopping"></i>
                                <div class="roboto-mini">Giỏ hàng</div>
                            </div>
                        </a>
                        <a href="#" class="text-dark">
                            <div class="cart right-icon">
                                <i class="fa-solid fa-bell"></i>
                                <div class="roboto-mini">Thông báo</div>
                            </div>
                        </a>
                        <?php
                        if (isset($_SESSION['ten_dang_nhap'])) {
                            extract($_SESSION['ten_dang_nhap'])
                        ?>
                            <div class="">
                                <a class="roboto-mini cart right-icon" style="cursor: pointer;" id="triggerId"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <img src="<?= $hinh_anh ?>" width="20px" class="rounded-5">
                                    <div class="roboto-mini"><?= $ten_user ?></div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="triggerId">
                                    <a class="dropdown-item" href="<?= $ROOT_URL ?>/?act=edit-tk">Thông tin của bạn</a>
                                    <a class="dropdown-item" href="#">Lịch sử mua hàng</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="<?= $ROOT_URL ?>/?act=thoat">Thoát</a>
                                </div>
                            </div>
                        <?php
                        } else {
                        ?>
                            <a href="<?= $ROOT_URL ?>/?act=dangnhap" class="text-dark">
                                <div class="cart right-icon">
                                    <i class="fa-solid fa-user"></i>
                                    <pdiv class="roboto-mini">Đăng nhập</pdiv>
                                </div>
                            </a>
                        <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>