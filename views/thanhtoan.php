<div class="container my-5">

    <?php
    if (isset($_SESSION['user'])) {
        $ten_user = $_SESSION['user']['name'];
        $dia_chi = $_SESSION['user']['address'];
        $email = $_SESSION['user']['email'];
        $sdt = $_SESSION['user']['tel'];
    } else {
        $ten_user = "";
        $dia_chi = "";
        $email = "";
        $sdt = "";
    }
     // Câu lệnh SQL để thêm đơn hàng vào cơ sở dữ liệu
     $sql = "INSERT INTO don_hang (id_khachhang, tong_gia, trang_thai, ngay_dat_hang, diachi_giaohang) 
     VALUES (:id_khachhang, :tong_gia, :trang_thai, :ngay_dat_hang, :diachi_giaohang)";

// Chuẩn bị và thực thi câu lệnh SQL
$stmt = $pdo->prepare($sql);
$stmt->execute([
 ':id_khachhang' => $id_khachhang,
 ':tong_gia' => $tong_gia,
 ':trang_thai' => $trang_thai,
 ':ngay_dat_hang' => $ngay_dat_hang,
 ':diachi_giaohang' => $diachi_giaohang
]);

// Lấy ID của đơn hàng vừa được thêm
$id_donhang = $pdo->lastInsertId();

// In thông báo đặt hàng thành công với ID đơn hàng
echo "Đặt hàng thành công. ID đơn hàng: $id_donhang";

    ?>
    <div class="row">
        <!-- Form nhập thông tin -->
        <div class="col-md-8">
            <h5>Bạn có mã ưu đãi? <button class="btn btn-dark btn-sm">Nhấn vào đây</button></h5>
            <form id="checkoutForm">
                <div class="mb-3">
                    <label for="fullname" class="form-label">Họ và Tên*</label>
                    <input type="text" class="form-control" id="fullname" name="name" placeholder="Nhập Họ tên của bạn">
                    <div class="error" id="error-fullname"></div>
                </div>
                <div class="mb-3 row">
                    <div class="col-md-6">
                        <label for="phone" class="form-label">Số Điện Thoại*</label>
                        <input type="tel" class="form-control" id="phone" name="tel" placeholder="Nhập Số Điện Thoại">
                        <div class="error" id="error-phone"></div>
                    </div>
                    <div class="col-md-6">
                        <label for="email" class="form-label">Email*</label>
                        <input type="email" class="form-control" id="email" name="email"
                            placeholder="Nhập Email của bạn">
                        <div class="error" id="error-email"></div>
                    </div>
                </div>
                <div class="mb-3 row">
                    <div class="col-md-14">
                        <label for="diachi" class="form-label">Địa chỉ*</label>
                        <input type="text" class="form-control" id="diachi" name="address" placeholder="Địa Chỉ">
                        <div class="error" id="error-diachi"></div>
                    </div>

                </div>
                <div class="mb-3">
                    <label for="details" class="form-label">Thông Tin Bổ Sung</label>
                    <textarea class="form-control" id="details" name="details" rows="4" placeholder="Điền vào đây"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Gửi</button>
            </form>
        </div>

        <!-- Thông tin đơn hàng -->
        <div class="col-md-4">
            <div class="border p-3">
                <h5 class="mb-3">Đơn hàng của bạn</h5>
                <?php
                
              
                // Kiểm tra nếu giỏ hàng có sản phẩm
                if (isset($_SESSION['mycart']) && !empty($_SESSION['mycart'])) {
                    $tong = 0; // Tổng tạm tính
                    foreach ($_SESSION['mycart'] as $cart) {
                        $ttien = $cart['so_luong'] * $cart['don_gia']; // Tính thành tiền cho từng sản phẩm
                        echo '<div class="d-flex justify-content-between">
                        <p>' . $cart['ten_sp'] . ' x' . $cart['so_luong'] . '</p>
                        <p>' . number_format($ttien, 0, ',', '.') . ' VNĐ</p>
                    </div>';
                        $tong += $ttien; // Cộng dồn thành tiền vào tổng
                    }
                    // Hiển thị tổng tạm tính và tổng tiền
                    echo '<hr>
                  <div class="d-flex justify-content-between">
                      <p>Tạm Tính</p>
                      <p>' . number_format($tong, 0, ',', '.') . ' VNĐ</p>
                  </div>
                  <div class="d-flex justify-content-between">
                      <p>Tổng</p>
                      <p>' . number_format($tong, 0, ',', '.') . ' VNĐ</p>
                  </div>';
                } else {
                    echo '<p>Giỏ hàng trống</p>';
                }
    
             
                ?>
            </div>
        </div>

    </div>
</div>