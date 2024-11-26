<?php
$loadDh = loadDonhang(0);
?>
<div class="container-fluid">
    <h1 class="text-center">Danh sách đơn hàng</h1>
    <div class="col-lg-4 mb-4">
        <form action="index.php?act=list-donhang" method="POST" class="d-flex align-items-center">
            <input type="text" class="form-control" placeholder="Tìm đơn hàng theo tên, email, điện thoại">
            <button type="submit" class="btn btn-light"><i class="fa fa-search" aria-hidden="true"></i></button>
        </form>
    </div>

    <div class="card">
        <div class="card-header bg-dark text-white">
            <div class="row text-uppercase font-weight-bold">
                <div class="col-1">ID</div>
                <div class="col-2">Người đặt</div>
                <div class="col-2">Trạng thái</div>
                <div class="col-2">Tổng tiền</div>
                <div class="col-2">Email</div>
                <div class="col-2">Số điện thoại</div>
                <div class="col-1">Ngày đặt</div>
            </div>
        </div>

        <div class="card-body">
            <?php foreach ($listdonhang as $donhang) { 
                extract($donhang);
                $update_donhang = "index.php?act=update_donhang&id_donhang=" .$id_donhang;
                echo '<div class="row py-3 border-bottom align-items-center">
                            <div class="col-lg-1">' . $id_donhang . '</div>
                            <div class="col-lg-2">' . $id_khachhang . '</div>
                            <div class="col-lg-2">' . $trang_thai . '</div>
                            <div class="col-lg-2">' . $tong_gia . '</div>
                            <div class="col-lg-2">' . $email . '</div>
                            <div class="col-lg-1 ">'. $sdt.'</div>
                            <div class="col-lg-2">' . $ngay_dat_hang . '</div>
                        </div>';
            }
            ?>

        </div>
       
    </div>
    <div class="row mb10">
        <input class="mr20" type="button" id="selectAllBtn" value="CHI TIÉT ĐƠN HÀNG" />
      </div>
</div>
