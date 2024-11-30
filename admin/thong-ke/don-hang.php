<form action="<?= $ADMIN_URL ?>/?act=thongke_donhang" method="post" class="container">
    <div class="row">
        <div class="form-group col-6">
            <input type="date" name="ngay_dat_hang" class="form-control">
        </div>
        <button class="btn btn-primary col-1 form-control">Lọc</button>
    </div>
</form>
<?php
if (isset($list_donhang) && $list_donhang !== "") {
    foreach ($list_donhang as $donhang) {
        print_r($donhang);
        extract($donhang);
    }
?>
    <table class="table container">
        <thead>
            <tr>
                <th scope="col">Ngày đặt hàng</th>
                <th scope="col">Số lượng đơn hàng</th>
                <th scope="col">Tổng doanh thu</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?= $ngay_dat_hang ?></td>
                <td><?= isset($tong_don) ? $tong_don : "Không có đơn hàng được đặt vào ngày này" ?></td>
                <td><?= isset($doanh_thu) ? $doanh_thu : 0 ?></td>
            </tr>
        </tbody>
    </table>
<?php
}
?>