<form action="<?= $ADMIN_URL ?>/?act=thongke_sp_banchay" method="post" class="container">
    <div class="row">
        <div class="form-group col-6">
            <input type="date" name="ngay_dat_hang" class="form-control">
        </div>
        <button class="btn btn-primary col-1 form-control">Lọc</button>
    </div>
</form>
<?php
if (isset($list_sp) && $list_sp !== "") {
    foreach ($list_sp as $sp) {
        extract($sp);
    }
?>
    <table class="table container">
        <?php
        if (!empty($_POST['ngay_dat_hang'])) {
            $ngay_dat_hang  = $_POST['ngay_dat_hang'];
        ?>
            <h3>
                Ngày:
                <?= $ngay_dat_hang ?>
            </h3>
        <?php
        }
        ?>
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Tên sản phẩm</th>
                <th scope="col">Tổng số lượng bán</th>
                <th scope="col">Tổng doanh thu</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    <?= isset($id_sp) ? $id_sp : 0 ?>
                </td>
                <td>
                    <?= isset($ten_sp) ? $ten_sp : "Không có sản phẩm"  ?>
                </td>
                <td>
                    <?= isset($tong_san_pham_ban) ? $tong_san_pham_ban : 0 ?>
                </td>
                <td>
                    <?= isset($tong_doanh_thu) ? number_format($tong_doanh_thu, 0, ',', '.') : 0 ?> VND
                </td>
            </tr>
        </tbody>
    </table>
<?php
}
?>