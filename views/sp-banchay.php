<div class="container-fluid my-5 px-5">
    <h3>Sản phẩm bán chạy</h3>
    <div class="row text-center">
        <?php
        foreach ($list_sp as $sanpham) {
            extract($sanpham);
        ?>
        <div class="col-lg-2">
            <div class="card product-card">
                <img src="<?= $IMAGES_URL . "/" . $hinh_anh ?>" class="card-img-top" alt="<?= $ten_sp ?>" height="300px">
                <div class="card-body">
                    <p class="card-title"
                        style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; max-width: 20ch;">
                        <?= $ten_sp ?>
                    </p>
                    <p class="roboto-small"><?= number_format($don_gia, 0, ',', '.') ?> VND</p>
                </div>
                <div class="card-overlay">
                    <!-- Nút Xem chi tiết -->
                    <a href="<?= $ROOT_URL ?>/?act=sp-chitiet&id_sp=<?= $id_sp ?>" class="btn btn-light mb-2">Xem chi tiết</a>

                    <!-- Nút Thêm vào giỏ -->
                    <form method="post" action="<?= $ROOT_URL ?>/?act=add_to_cart" class="d-inline">
                        <input type="hidden" name="id_sp" value="<?= $id_sp ?>">
                        <input type="hidden" name="ten_sp" value="<?= $ten_sp ?>">
                        <input type="hidden" name="don_gia" value="<?= $don_gia ?>">
                        <input type="hidden" name="hinh_anh" value="<?= $hinh_anh ?>">
                        <button type="submit" class="btn btn-light mb-2">Thêm vào giỏ</button>
                    </form>

                    <!-- Nút Mua hàng -->
                    <a href="<?= $ROOT_URL ?>/?act=thanhtoan&id_sp=<?= $id_sp ?>&ten_sp=<?= $ten_sp ?>&don_gia=<?= $don_gia ?>&hinh_anh=<?= $hinh_anh ?>"
                        class="btn btn-dark">Mua hàng</a>
                </div>
            </div>
        </div>
        <?php
        }
        ?>
    </div>
</div>
