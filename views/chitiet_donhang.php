<div class="container my-5">
    <h2>Chi Tiết Đơn Hàng #<?= htmlspecialchars($_GET['id_donhang']) ?></h2>
    <?php if (!empty($chitiet)) { ?>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Hình Ảnh</th>
                    <th>Tên Sản Phẩm</th>
                    <th>Số Lượng</th>
                    <th>Đơn Giá</th>
                    <th>Thành Tiền</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($chitiet as $ct) { 
                    $thanh_tien = $ct['so_luong'] * $ct['don_gia_sp'];
                ?>
                    <tr>
                        <td><img src="images/<?= htmlspecialchars($ct['hinh_anh']) ?>" alt="<?= htmlspecialchars($ct['ten_sp']) ?>" style="width: 80px;"></td>
                        <td><?= htmlspecialchars($ct['ten_sp']) ?></td>
                        <td><?= htmlspecialchars($ct['so_luong']) ?></td>
                        <td><?= number_format($ct['don_gia_sp'], 0, ',', '.') ?> VNĐ</td>
                        <td><?= number_format($thanh_tien, 0, ',', '.') ?> VNĐ</td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    <?php } else { ?>
        <p>Không tìm thấy thông tin chi tiết đơn hàng.</p>
    <?php } ?>
</div>
