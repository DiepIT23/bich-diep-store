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
                        <a href="index.html"><img src="<?= $IMAGES_URL ?>/Logo ngang.png"></a>
                    </div>
                    <div class="menu d-flex justify-content-between">
                        <a href="<?= $ROOT_URL ?>/" class="text-dark">Trang chủ</a>
                        <div class="dropdown">
                            <a href="<?= $ROOT_URL ?>/?act=ao" class="dropdown-toggle text-dark">
                                Áo Nam
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item text-dark roboto-small py-3"
                                    href="<?= $ROOT_URL ?>/?act=ao&ao=ao-thun">Áo thun</a>
                                <a class="dropdown-item text-dark roboto-small py-3"
                                    href="<?= $ROOT_URL ?>/?act=ao&ao=ao-somi">Áo sơ mi</a>
                                <a class="dropdown-item text-dark roboto-small py-3"
                                    href="<?= $ROOT_URL ?>/?act=ao&ao=ao-polo">Áo Polo</a>
                                <a class="dropdown-item text-dark roboto-small py-3"
                                    href="<?= $ROOT_URL ?>/?act=ao&ao=ao-quan-ni">Áo - Quần nỉ</a>
                                <a class="dropdown-item text-dark roboto-small py-3"
                                    href="<?= $ROOT_URL ?>/?act=ao&ao=ao-blazer">Áo Blazer</a>
                                <a class="dropdown-item text-dark roboto-small py-3"
                                    href="<?= $ROOT_URL ?>/?act=ao&ao=ao-khoac-jeans">Áo khoác jeans</a>
                                <a class="dropdown-item text-dark roboto-small py-3"
                                    href="<?= $ROOT_URL ?>/?act=ao&ao=ao-khoac-ni">Áo khoác nỉ</a>
                                <a class="dropdown-item text-dark roboto-small py-3"
                                    href="<?= $ROOT_URL ?>/?act=ao&ao=cardigan">Cardigan</a>
                            </div>
                        </div>
                        <div class="dropdown">
                            <a href="<?= $ROOT_URL ?>/?act=quan" class="dropdown-toggle text-dark">
                                Quần Nam
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item text-dark roboto-small py-3"
                                    href="<?= $ROOT_URL ?>/?act=quan&quan=quan-au">Quần âu</a>
                                <a class="dropdown-item text-dark roboto-small py-3"
                                    href="<?= $ROOT_URL ?>/?act=quan&quan=quan-jeans">Quần Jeans</a>
                                <a class="dropdown-item text-dark roboto-small py-3"
                                    href="<?= $ROOT_URL ?>/?act=quan&quan=quan-kaki">Quần Kaki</a>
                                <a class="dropdown-item text-dark roboto-small py-3"
                                    href="<?= $ROOT_URL ?>/?act=quan&quan=quan-jogger">Quần Jogger</a>
                                <a class="dropdown-item text-dark roboto-small py-3"
                                    href="<?= $ROOT_URL ?>/?act=quan&quan=quan-short">Quần Short</a>
                            </div>
                        </div>
                        <a href="<?= $ROOT_URL ?>/?act=gioithieu" class="text-dark">Về chúng tôi</a>
                        <a href="<?= $ROOT_URL ?>/?act=lienhe" class="text-dark">Liên hệ</a>
                    </div>
                    <div class="right">
                        <a href="#" class="text-dark">
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
                        <a href="dang-nhap.html" class="text-dark">
                            <div class="cart right-icon">
                                <i class="fa-solid fa-user"></i>
                                <pdiv class="roboto-mini">Đăng nhập</pdiv>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>