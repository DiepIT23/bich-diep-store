<main>
    <div class="container">
        <div class="login-form">
            <h2 class="form-title">Đăng nhập</h2>
            <form id="loginForm">
                <div class="mb-3">
                    <label for="username" class="form-label">Tên đăng nhập</label>
                    <input type="text" class="form-control" id="username" placeholder="Nhập tên đăng nhập">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Mật khẩu</label>
                    <input type="password" class="form-control" id="password" placeholder="Nhập mật khẩu">
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="rememberMe">
                    <label class="form-check-label" for="rememberMe">Ghi nhớ mật khẩu</label>
                </div>
                <button type="button" class="btn btn-primary w-100" onclick="validateLogin()">Đăng nhập</button>
            </form>
            <p class="mt-3 text-center">
                <a href="#">Quên mật khẩu</a> |
                <a href="<?= $ROOT_URL ?>/?act=dangky">Đăng ký</a>
            </p>
        </div>
    </div>
</main>