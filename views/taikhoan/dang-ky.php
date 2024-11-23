<main>

    <div class="container">
        <div class="register-form">
            <h2 class="form-title">Đăng ký</h2>
            <form id="registerForm">
                <div class="mb-3">
                    <label for="username" class="form-label">Tên đăng nhập</label>
                    <input type="text" class="form-control" id="username" placeholder="Nhập tên đăng nhập">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Mật khẩu</label>
                    <input type="password" class="form-control" id="password" placeholder="Nhập mật khẩu">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="Nhập email">
                </div>
                <div class="mb-3">
                    <label for="phone" class="form-label">Số điện thoại</label>
                    <input type="tel" class="form-control" id="phone" placeholder="Nhập số điện thoại">
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label for="firstname" class="form-label">Tên</label>
                        <input type="text" class="form-control" id="firstname" placeholder="Nhập tên">
                    </div>
                    <div class="col">
                        <label for="lastname" class="form-label">Họ</label>
                        <input type="text" class="form-control" id="lastname" placeholder="Nhập họ">
                    </div>
                </div>
                <div class="mb-3">
                    <label for="birthdate" class="form-label">Ngày / tháng / năm sinh</label>
                    <input type="date" class="form-control" id="birthdate">
                </div>
                <button type="button" class="btn btn-primary w-100" onclick="validateForm()">Đăng ký</button>
            </form>
            <p class="mt-3 text-center">Nếu bạn đã có tài khoản, hãy <a href="<?= $ROOT_URL ?>/?act=dangnhap">Đăng
                    nhập</a></p>
        </div>
    </div>

</main>