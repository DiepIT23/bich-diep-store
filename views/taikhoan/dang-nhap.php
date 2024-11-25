<main>
    <div class="container">
        <div class="login-form">
            <h2 class="form-title">Đăng nhập</h2>
            <?php
            if (isset($_SESSION["ten_dang_nhap"]) && is_array($_SESSION["ten_dang_nhap"])) {
                extract($_SESSION["ten_dang_nhap"]);
                ?>
                <div>
                    Xin chào <br>
                    <?php echo $ten_dang_nhap ?>
                    <li class="form_li"><a href="index.php?act=quenmk">Quên mật khẩu</a></li>
                    <li class="form_li"><a href="index.php?act=edit-tk">Cập nhật tài khoản</a></li>

                    <?php if ($role == 1) { ?>
                        <li class="form_li"><a href="admin/index.php">Đăng nhập admin</a></li>
                    <?php } ?>

                    <li class="form_li"><a href="index.php?act=thoat">Thoát</a></li>
                </div>
                <?php
            } else {
                ?>
            <form id="loginForm" action="index.php?act=dangnhap" method="post" onsubmit="return validateLogin()">
                <div class="mb-3">
                    <label for="username" class="form-label">Tên đăng nhập</label>
                    <input name="ten_dang_nhap" type="text" class="form-control" id="username" placeholder="Nhập tên đăng nhập">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Mật khẩu</label>
                    <input name="mat_khau" type="password" class="form-control" id="password" placeholder="Nhập mật khẩu">
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="rememberMe">
                    <label class="form-check-label" for="rememberMe">Ghi nhớ mật khẩu</label>
                </div>
                <button type="submit" class="btn btn-primary w-100" >Đăng nhập</button>
            </form>
            <?php }?>
            <p class="mt-3 text-center">
                <a href="#">Quên mật khẩu</a> |
                <a href="<?= $ROOT_URL ?>/?act=dangky">Đăng ký</a>
            </p>
        </div>
    </div>
</main>