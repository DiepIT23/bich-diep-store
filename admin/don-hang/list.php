<div class="container-fluid">
    <h1 class="text-center">Danh sách đơn hàng</h1>
    
    <?php 
    // // Truy vấn danh sách đơn hàng
    // $sql = "SELECT * FROM don_hang ";
    // $dh = pdo_query($sql);
    // return $dh;
    // if (empty($dh)) {
    //     echo "<p>Không có đơn hàng nào.</p>";
    // } else {
    
    ?>
    
    <div class="col-lg-4 mb-4">
        <!-- Form tìm kiếm -->
        <form action="index.php?act=list-donhang" method="POST" class="d-flex align-items-center">
            <input type="text" name="search" class="form-control" placeholder="Tìm đơn hàng theo tên, email, điện thoại">
            <button type="submit" class="btn btn-light"><i class="fa fa-search" aria-hidden="true"></i></button>
        </form>
    </div>

    <div class="card">
        <div class="card-header bg-dark text-white">
            <div class="row text-center font-weight-bold">
                <div class="col-1">ID</div>
                <div class="col-2">Người đặt</div>
                <div class="col-1">Trạng thái</div>
                <div class="col-1">Tổng tiền</div>
                <div class="col-2">Địa chỉ-GH </div>
                <div class="col-1">Email</div>
                <div class="col-2">Số điện thoại</div>
                <div class="col-1">Ngày đặt</div>
                <div class="col-1">Thao tác</div>
            </div>
        </div>

        <div class="card-body">
            <!-- Hiển thị danh sách đơn hàng -->
            <table class="table">
                <tbody>
                    <?php foreach ($listdonhang as $donhang) { 
                        // Extract dữ liệu đơn hàng
                        extract($donhang); 
                        echo '
                        <tr class="text-center align-middle">
                            <td>'. $id_donhang .'</td>
                            <td>'. $id_khachhang .'</td>
                            <td>'. $trang_thai .'</td>
                            <td>'. number_format($tong_gia, 0, ',', '.') .' VNĐ</td>
                            <td>'. $diachi_giaohang .'</td>
                            <td>'. $email .'</td>
                            <td>'. $sdt .'</td>
                            <td>'. $ngay_dat_hang .'</td>
                            <td>
                                <a href="index.php?act=chitiet&id='.$id_donhang.'" class="btn btn-success btn-sm">Xem chi tiết</a>
                            </td>
                        </tr>
                        ';
                    } ?>
                </tbody>
            </table>
        </div>
    </div>
    <!-- <?php ?> -->
</div>
