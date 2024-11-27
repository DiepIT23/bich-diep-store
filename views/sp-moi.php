<!-- Sản phẩm mới -->
<div class="container-fluid my-5 px-5">
    <h3>Sản phẩm mới</h3>
    <div class="row text-center">
        <?php
        foreach ($list_sp as $sanpham) {
            extract($sanpham);
            $gia_ban = $don_gia - ($don_gia * $giam_gia / 100)
        ?>
            <div class="col-lg-2">
                <div class="card product-card">
                    <img src="<?= $IMAGES_URL . "/" . $hinh_anh ?>" class="card-img-top" alt="Bestseller Product 1"
                        height="300px">
                    <div class="card-body">
                        <p class="card-title"
                            style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; max-width: 20ch;">
                            <?= $ten_sp ?></p>
                        <p class="roboto-small"><?= number_format($gia_ban, 0, ',', '.') ?>
                            VND</p>
                    </div>
                    <div class="card-overlay">
                        <a href="<?= $ROOT_URL ?>/?act=sp-chitiet&id_sp=<?= $id_sp ?>">
                            <button class="btn btn-light mb-2">Xem chi tiết</button>
                        </a>
                        <a href="">
                            <button class="btn btn-light mb-2">Thêm vào giỏ</button>
                        </a>
                        <a href="">
                            <button class="btn btn-dark">Mua hàng</button>
                        </a>
                    </div>
                </div>
            </div>
        <?php
        }
        ?>
    </div>
</div>