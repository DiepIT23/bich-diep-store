<!-- Main Content -->
<div class="container my-4">
    <h2 class="mb-4">Giỏ Hàng</h2>
    <div class="row">
        <!-- Cart Items -->
        <div class="col-lg-8">
            <table class="table">
                <thead>
                    <tr>
                        <th>Hình ảnh</th>
                        <th>Sản Phẩm</th>
                        <th>Giá</th>
                        <th>Số Lượng</th>
                        <th>Tạm Tính</th>
                        <th>Thao tác</th>
                    </tr>
                    <?php
$tong = 0;
$i=0;
foreach ($_SESSION['mycart'] as $cart) {
    $hinh_anh = $IMAGES_URL . "/" . $cart[2]; // Đường dẫn đầy đủ tới ảnh
    $ttien = $cart[3] * $cart[1]; // Tính thành tiền
    $tong += $ttien;
    $xoasp='<a href="index.php?act=delcart&idcart='.$i.'"><button class="btn btn-danger btn-sm">Xóa</button></a>';
    echo '<tr>
            <td>
                <img src="' . $hinh_anh . '" alt="" class="product-img me-3" style="width:80px; height:80px;">
            </td>
            <td>' . $cart[0] . '</td>
            <td>' . $cart[1] . 'VNĐ</td>
            <td>' . $cart[3] . '</td>
            <td>' . $ttien . '</td>
            <td>'.$xoasp.'</td>
        </tr>';
        $i+=1;
}
echo '<tr>
        <td colspan="100"><strong>Tổng đơn hàng</strong></td>
        <td><strong>' . $tong . 'VNĐ</strong></td>
    </tr>';
?>

                </thead>
                <tbody>
                    
                </tbody>
            </table>
        </div>

        <!-- Cart Summary -->
        <div class="col-lg-4">
            <div class="cart-summary">
                <h5 class="mb-3">Tóm Tắt Đơn Hàng</h5>
                <p class="d-flex justify-content-between">
    <span>Tạm Tính</span>
    <span><?= number_format($tong, 0, ',', '.') ?> VNĐ</span>
</p>
<p class="d-flex justify-content-between">
    <span>Tổng</span>
    <span><?= number_format($tong, 0, ',', '.') ?> VNĐ</span>
</p>

                <a href="<?= $ROOT_URL ?>/?act=thanhtoan" class="btn btn-danger w-100">Thanh Toán</a>
                <div class="mt-3">
                    <label for="promoCode" class="form-label">Mã Áp Dụng</label>
                    <div class="input-group">
                        <input type="text" id="promoCode" class="form-control" placeholder="Nhập mã giảm giá">
                        <button class="btn btn-outline-secondary">Áp Dụng</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>