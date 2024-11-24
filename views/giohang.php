<!-- Main Content -->
<div class="container my-4">
    <h2 class="mb-4">Giỏ Hàng</h2>
    <div class="row">
        <!-- Cart Items -->
        <div class="col-lg-8">
            <table class="table">
                <thead>
                    <tr>
                        <th>Sản Phẩm</th>
                        <th>Giá</th>
                        <th>Số Lượng</th>
                        <th>Tạm Tính</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <div class="d-flex align-items-center">
                                <img src="https://via.placeholder.com/80" alt="product" class="product-img me-3">
                                <div>
                                    <p class="mb-1">Áo polo nam POHTK401</p>
                                    <small>Màu sắc: Xanh rêu</small><br>
                                    <small>Cỡ: L</small><br>
                                    <a href="#" class="text-danger">Xóa</a>
                                </div>
                            </div>
                        </td>
                        <td>399.000 VNĐ</td>
                        <td>
                            <div class="d-flex align-items-center">
                                <button class="btn btn-sm btn-outline-secondary">-</button>
                                <input type="text" value="1" class="form-control form-control-sm text-center mx-2"
                                    style="width: 50px;">
                                <button class="btn btn-sm btn-outline-secondary">+</button>
                            </div>
                        </td>
                        <td>399.000 VNĐ</td>
                    </tr>
                    <tr>
                        <td>
                            <div class="d-flex align-items-center">
                                <img src="https://via.placeholder.com/80" alt="product" class="product-img me-3">
                                <div>
                                    <p class="mb-1">Áo polo nam POHTK401</p>
                                    <small>Màu sắc: Xanh rêu</small><br>
                                    <small>Cỡ: L</small><br>
                                    <a href="#" class="text-danger">Xóa</a>
                                </div>
                            </div>
                        </td>
                        <td>399.000 VNĐ</td>
                        <td>
                            <div class="d-flex align-items-center">
                                <button class="btn btn-sm btn-outline-secondary">-</button>
                                <input type="text" value="1" class="form-control form-control-sm text-center mx-2"
                                    style="width: 50px;">
                                <button class="btn btn-sm btn-outline-secondary">+</button>
                            </div>
                        </td>
                        <td>399.000 VNĐ</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Cart Summary -->
        <div class="col-lg-4">
            <div class="cart-summary">
                <h5 class="mb-3">Tóm Tắt Đơn Hàng</h5>
                <p class="d-flex justify-content-between">
                    <span>Tạm Tính</span>
                    <span>798.000 VNĐ</span>
                </p>
                <p class="d-flex justify-content-between">
                    <span>Tổng</span>
                    <span>798.000 VNĐ</span>
                </p>
                <a href="<?= $ROOT_URL ?>/?act=thanhtoan" class="btn btn-danger w-100">Thanh Toán</a>
                <div class="mt-3">
                    <label for="promoCode" class="form-label">Mã Áp Dụng</label>
                    <div class="input-group">
                        <input type="text" id="promoCode" class="form-control" placeholder="Nhập mã giảm giá">
                        <button class="btn btn-outline-secondary">Áp Dụng</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>