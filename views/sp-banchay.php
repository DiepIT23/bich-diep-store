<!-- Sản phẩm bán chạy -->
<div class="container-fluid my-5 px-5">
    <h3>Sản phẩm bán chạy</h3>
    <div class="row text-center">
        <?php
        foreach ($list_sp as $sanpham) {
            extract($sanpham);
            ?>
            <div class="col-lg-2">
                <img src="<?= $IMAGES_URL . "/" . $hinh_anh ?>" class="card-img-top" alt="<?= $ten_sp ?>" height="300px">

                <form method="post" action="<?= $ROOT_URL ?>/?act=giohang">
                    <input type="hidden" name="ten_sp" value="<?= $ten_sp ?>">
                    <input type="hidden" name="don_gia" value="<?= $don_gia ?>">
                    <input type="hidden" name="hinh_anh" value="<?= $hinh_anh ?>">

                    <!-- Nút Thêm vào giỏ -->
                    <button type="submit" name="giohang" class="btn btn-light mb-2">Thêm vào giỏ</button>

                    <!-- Nút Xem chi tiết -->
                    <a href="<?= $ROOT_URL ?>/?act=sp-chitiet" class="btn btn-light mb-2">Xem chi tiết</a>

                    <!-- Nút Mua hàng -->
                    <a href="<?= $ROOT_URL ?>/?act=thanhtoan&ten_sp=<?= $ten_sp ?>&don_gia=<?= $don_gia ?>&hinh_anh=<?= $hinh_anh ?>"
                        class="btn btn-dark">Mua hàng</a>
                </form>

            </div>
            <?php
        }
        ?>
    </div>
</div>