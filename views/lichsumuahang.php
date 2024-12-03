<?php if (!empty($donhang)): ?>
    <table class="table">
        <thead>
            <tr>
                <th>Mã Đơn Hàng</th>
                <th>Tổng Giá</th>
                <th>Trạng Thái</th>
                <th>Ngày Đặt Hàng</th>
                <th>Chi Tiết</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($donhang as $dh): ?>
                <tr>
                    <td><?= $dh['id_donhang'] ?></td>
                    <td><?= number_format($dh['tong_gia'], 0, ',', '.') ?> VNĐ</td>
                    <td><?= $dh['trang_thai'] ?></td>
                    <td><?= $dh['ngay_dat_hang'] ?></td>
                    <td><a href="index.php?act=chitietdonhang&id_donhang=<?= $dh['id_donhang'] ?>">Xem</a></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
<?php else: ?>
    <p>Bạn chưa có đơn hàng nào.</p>
<?php endif; ?>
