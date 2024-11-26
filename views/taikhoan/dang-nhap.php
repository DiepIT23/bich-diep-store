<main>
    <div class="container">
        <div class="login-form">
            <h2 class="form-title">Đăng nhập</h2>
            <form id="loginForm" action="<?= $ROOT_URL ?>/?act=dangnhap" method="post" onsubmit="return validateLogin()">
                <div class="mb-3">
                    <label for="username" class="form-label">Tên đăng nhập</label>
                    <input name="ten_dang_nhap" type="text" class="form-control" id="username"
                        placeholder="Nhập tên đăng nhập">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Mật khẩu</label>
                    <input name="mat_khau" type="password" class="form-control" id="password"
                        placeholder="Nhập mật khẩu">
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="rememberMe">
                    <label class="form-check-label" for="rememberMe">Ghi nhớ mật khẩu</label>
                </div>
                <button name="dangnhap" class="btn btn-primary w-100">Đăng nhập</button>
            </form>
        </div>
    </div>
</main>