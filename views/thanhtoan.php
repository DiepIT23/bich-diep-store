<div class="container my-5">

    <div class="row">
        <!-- Form nhập thông tin -->
        <div class="col-md-8">
            <h5>Bạn có mã ưu đãi? <button class="btn btn-dark btn-sm">Nhấn vào đây</button></h5>
            <form id="checkoutForm">
                <div class="mb-3">
                    <label for="fullname" class="form-label">Họ và Tên*</label>
                    <input type="text" class="form-control" id="fullname" placeholder="Nhập Họ tên của bạn">
                    <div class="error" id="error-fullname"></div>
                </div>
                <div class="mb-3 row">
                    <div class="col-md-6">
                        <label for="phone" class="form-label">Số Điện Thoại*</label>
                        <input type="tel" class="form-control" id="phone" placeholder="Nhập Số Điện Thoại">
                        <div class="error" id="error-phone"></div>
                    </div>
                    <div class="col-md-6">
                        <label for="email" class="form-label">Email*</label>
                        <input type="email" class="form-control" id="email" placeholder="Nhập Email của bạn">
                        <div class="error" id="error-email"></div>
                    </div>
                </div>
                <div class="mb-3 row">
                    <div class="col-md-4">
                        <input type="text" class="form-control" id="city" placeholder="Tỉnh/Thành Phố">
                        <div class="error" id="error-city"></div>
                    </div>
                    <div class="col-md-4">
                        <input type="text" class="form-control" id="district" placeholder="Quận/Huyện">
                        <div class="error" id="error-district"></div>
                    </div>
                    <div class="col-md-4">
                        <input type="text" class="form-control" id="ward" placeholder="Xã/Phường">
                        <div class="error" id="error-ward"></div>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="details" class="form-label">Thông Tin Bổ Sung</label>
                    <textarea class="form-control" id="details" rows="4" placeholder="Điền vào đây"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Gửi</button>
            </form>
        </div>

        <!-- Thông tin đơn hàng -->
        <div class="col-md-4">
            <div class="border p-3">
                <h5 class="mb-3">Đơn hàng của bạn</h5>
                <div class="d-flex justify-content-between">
                    <p>Áo polo nam POHTK401 x1</p>
                    <p>199.000 VNĐ</p>
                </div>
                <hr>
                <div class="d-flex justify-content-between">
                    <p>Tạm Tính</p>
                    <p>199.000 VNĐ</p>
                </div>
                <div class="d-flex justify-content-between">
                    <p>Tổng</p>
                    <p>199.000 VNĐ</p>
                </div>
            </div>
        </div>
    </div>
</div>