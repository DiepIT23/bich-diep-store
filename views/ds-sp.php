<?php
require_once "models/pdo.php";

// Lấy từ khóa tìm kiếm từ URL
$searchQuery = isset($_GET['q']) ? trim($_GET['q']) : '';
$products = [];

// Kiểm tra từ khóa tìm kiếm
if ($searchQuery !== '') {
    $sql = "SELECT * FROM san_pham WHERE ten_sp LIKE ?";
    $products = pdo_query($sql, "%$searchQuery%");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kết quả tìm kiếm</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <h3>Kết quả tìm kiếm cho: "<?= htmlspecialchars($searchQuery) ?>"</h3>
            <?php if (!empty($products)): ?>
                <?php foreach ($products as $product): ?>
                    <!-- Hiển thị sản phẩm -->
                    <div class="col-lg-3">
                        <div class="card product-card">
                            <img src="https://via.placeholder.com/200x200" class="card-img-top" alt="New Product 1"
                                height="300px">
                            <div class="card-body">
                                <p class="card-title"><?= $product['ten_sp'] ?></p>
                                <p class="roboto-small"><?= $product['don_gia'] ?> VND</p>
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
                <?php endforeach; ?>
            <?php else: ?>
                <p>Không tìm thấy sản phẩm nào phù hợp.</p>
            <?php endif; ?>
        </div>
    </div>
</body>

</html>