<?php
include_once "menu-dssp.php";

?>
<div class="container my-4">
    <div class="row">
        <?php
        foreach ($list_sp as $sp) {
            extract($sp);
            if ($dm = $_GET['id_dm']) {
        ?>
                <div class="col-lg-3">
                    <div class="card product-card">
                        <img src="<?= $IMAGES_URL . '/' . $hinh_anh ?>" class="card-img-top" alt="New Product 1" height="400px">
                        <div class="card-body">
                            <p class="card-title"><?= $ten_sp ?></p>
                            <p class="roboto-small"><?= $don_gia ?> VND</p>
                        </div>
                        <div class="card-overlay">
                            <a href="sp-chitiet.html">
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
        }
        ?>
    </div>
</div>