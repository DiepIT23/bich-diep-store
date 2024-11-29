<?php
include_once "menu-dssp.php";

?>
<div class="container my-4">
    <div class="row">
        <?php
        foreach ($dssp as $sp) {
            extract($sp);
            $gia_ban = $don_gia - ($don_gia * $giam_gia / 100);
        ?>
            <div class="col-lg-3" id="productList">
                <div class="card product-card">
                    <img src="<?= $IMAGES_URL . '/' . $hinh_anh ?>" class="card-img-top" alt="New Product 1" height="400px">
                    <div class="card-body">
                        <p class="card-title"><?= $ten_sp ?></p>
                        <p class="roboto-small"><?= number_format($gia_ban, 0, ',', '.') ?> VND</p>
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