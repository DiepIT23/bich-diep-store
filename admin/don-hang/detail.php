<?php
foreach ($chitiet_donhang as $chitiet) {
    extract($chitiet);
    print_r($trang_thai);
?>
<div class="container-fluid">
    <div class="row m-2">
        <h2>Mã đơn hàng: <?= $id_donhang ?></h2>
    </div>
    <a href="#" class="text-danger">In đơn hàng</a>
    <hr>
    <div class="row m-1">
        <div class="col-2">Ngày đặt hàng:</div>
        <div class="col-10"><?= $ngay_dat_hang ?></div>
    </div>
    <hr>
    <div class="row m-1">
        <div class="col-2">Hình thức thanh toán:</div>
        <div class="col-10">Thanh toán khi nhận hàng</div>
    </div>
    <hr>
    <div class="row m-1">
        <div class="col-2">Trạng thái đơn hàng:</div>
        <div class="col-2">
            <div class="form-group">
                <label for=""></label>
                <select class="form-control" name="" id="">
                    <option value="Chờ xác nhận">Chờ xác nhận</option>
                    <option value="Đang xử lý">Đang xử lý</option>
                    <option value="Đang vận chuyển">Đang vận chuyển</option>
                    <option value="Đã hủy">Đã hủy</option>
                    <option value="Đã nhận hàng">Đã nhận hàng</option>
                </select>
            </div>
        </div>
    </div>
    <div class="row mt-2">
        <table class="table">
            <thead>
                <tr class="bg-secondary text-light">
                    <th class="col-1">Ảnh</th>
                    <th class="col-4">Tên</th>
                    <th class="col-4">Ghi chú</th>
                    <th class="col-1">Đơn giá</th>
                    <th class="col-1">Số lượng</th>
                    <th class="col-1">Thành tiền</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th class="col-lg-1">
                        <img src="<?= "$IMAGES_URL/$hinh_anh" ?>" width="150px">
                    </th>
                    <th class="col-4"><?= $ten_sp ?></th>
                    <th class="col-4"><?= $loi_nhan ?></th>
                    <th class="col-1"><?= number_format($gia_ban, 0, ',', '.') ?> VND</th>
                    <th class="col-1"><?= $so_luong ?></th>
                    <th class="col-1"><?= number_format($tong_gia, 0, ',', '.') ?> VND</th>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="row m-1">
        <div class="col-9"></div>
        <div class="col-2">Tổng số lượng:</div>
        <div class="col-1"><?= $so_luong ?></div>
    </div>
    <hr>
    <div class="row m-1">
        <div class="col-9"></div>
        <div class="col-2">Ship:</div>
        <div class="col-1">0 VND</div>
    </div>
    <hr>
    <div class="row m-1">
        <div class="col-9"></div>
        <div class="col-2">Tổng phải thu:</div>
        <div class="col-1"><?= number_format($tong_gia, 0, ',', '.') ?> VND</div>
    </div>
    <hr>
</div>
<?php
}
?>