<main>
    <div class="container">
        <div class="register-form">
            <h2 class="form-title">Đăng ký</h2>
            <form id="registerForm" action="index.php?act=dangky" method="post" onsubmit="return validateForm()" enctype="multipart/form-data">
                <!-- Tên đầy đủ -->
                <div class="mb-3">
                    <label for="username" class="form-label">Họ và Tên</label>
                    <input name="ten_user" type="text" class="form-control" id="username" placeholder="Nhập họ và tên">
                </div>
                
                <!-- Tên đăng nhập -->
                <div class="mb-3">
                    <label for="firstname" class="form-label">Tên đăng nhập</label>
                    <input name="ten_dang_nhap" type="text" class="form-control" id="firstname" placeholder="Nhập tên đăng nhập">
                </div>

                <!-- Mật khẩu -->
                <div class="mb-3">
                    <label for="password" class="form-label">Mật khẩu</label>
                    <input name="mat_khau" type="password" class="form-control" id="password" placeholder="Nhập mật khẩu">
                </div>

                <!-- Email -->
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input name="email" type="email" class="form-control" id="email" placeholder="Nhập email">
                </div>

                <!-- Số điện thoại -->
                <div class="mb-3">
                    <label for="phone" class="form-label">Số điện thoại</label>
                    <input name="sdt" type="tel" class="form-control" id="phone" placeholder="Nhập số điện thoại">
                </div>

                <!-- Địa chỉ -->
                <div class="mb-3">
                    <label for="address" class="form-label">Địa chỉ</label>
                    <input name="dia_chi" type="text" class="form-control" id="address" placeholder="Nhập địa chỉ của bạn">
                </div>

                <!-- Tải lên hình ảnh -->
                <div class="mb-3">
                    <label for="uploadImage" class="form-label">Tải lên hình ảnh</label>
                    <input name="hinh_anh" type="file" class="form-control" id="uploadImage" accept="image/*">
                </div>

                <!-- Nút đăng ký -->
                <button name="dangky" type="submit" class="btn btn-primary w-100">Đăng ký</button>
            </form>

            <!-- Thông báo lỗi -->
            <?php 
            if (isset($thongbao) && $thongbao != "") {
                echo '<div class="alert alert-info mt-3">' . $thongbao . '</div>';
            }
            ?>

            <!-- Liên kết đăng nhập -->
            <p class="mt-3 text-center">Nếu bạn đã có tài khoản, hãy <a href="<?= $ROOT_URL ?>/?act=dangnhap">Đăng nhập</a></p>
        </div>
    </div>
</main>
