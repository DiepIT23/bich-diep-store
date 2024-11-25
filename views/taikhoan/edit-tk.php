<main>
    <div class="container">
        <div class="edit-form">
            <h2 class="form-title">Chỉnh sửa tài khoản</h2>
            <?php
            if(isset($_SESSION["ten_dang_nhap"]) && is_array($_SESSION["ten_dang_nhap"])){
                extract($_SESSION["ten_dang_nhap"]);
            }
        ?>
            <form id="editForm" action="index.php?act=edit-tk" method="post" enctype="multipart/form-data">
                <!-- Tên đầy đủ -->
                <div class="mb-3">
                    <label for="username" class="form-label">Họ và Tên</label>
                    <input name="ten_user" type="text" class="form-control" id="username" value="<?= $ten_user?>" placeholder="Nhập họ và tên">
                </div>
                
                <!-- Tên đăng nhập (Không chỉnh sửa) -->
                <div class="mb-3">
                    <label for="firstname" class="form-label">Tên đăng nhập</label>
                    <input name="ten_dang_nhap" type="text" class="form-control" id="firstname" value="<?= $ten_dang_nhap ?>" readonly>
                </div>

                <!-- Mật khẩu -->
                <div class="mb-3">
                    <label for="password" class="form-label">Mật khẩu mới</label>
                    <input name="mat_khau" type="password" class="form-control" id="password" value="<?= $mat_khau?>" placeholder="Nhập mật khẩu mới (nếu muốn thay đổi)">
                </div>

                <!-- Email -->
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input name="email" type="email" class="form-control" id="email" value="<?= $email ?>" placeholder="Nhập email">
                </div>

                <!-- Số điện thoại -->
                <div class="mb-3">
                    <label for="phone" class="form-label">Số điện thoại</label>
                    <input name="sdt" type="tel" class="form-control" id="phone" value="<?= $sdt?>" placeholder="Nhập số điện thoại">
                </div>

                <!-- Địa chỉ -->
                <div class="mb-3">
                    <label for="address" class="form-label">Địa chỉ</label>
                    <input name="dia_chi" type="text" class="form-control" id="address" value="<?= $dia_chi ?>" placeholder="Nhập địa chỉ của bạn">
                </div>

                <!-- Tải lên hình ảnh -->
                <div class="mb-3">
                    <label for="uploadImage" class="form-label">Tải lên hình ảnh mới</label>
                    <input name="hinh_anh" type="file" class="form-control" id="uploadImage" accept="image/*">
                    <!-- Hiển thị hình ảnh hiện tại -->
                    <?php if (!empty($current_user['hinh_anh'])): ?>
                        <img src="<?= $UPLOADS_URL . $current_user['hinh_anh'] ?>" alt="Hình ảnh hiện tại" class="mt-2" style="max-width: 100px; max-height: 100px;">
                    <?php endif; ?>
                </div>

                <!-- Nút cập nhật -->
                <button name="capnhat" type="submit" class="btn btn-primary w-100">Cập nhật</button>
            </form>

            <!-- Thông báo lỗi -->
            <?php 
            if (isset($thongbao) && $thongbao != "") {
                echo '<div class="alert alert-info mt-3">' . $thongbao . '</div>';
            }
            ?>
        </div>
    </div>
</main>
