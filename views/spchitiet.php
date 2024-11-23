    <!-- Product Details Section -->
    <div class="container my-5">
        <div class="row">
            <!-- Product Image Slider -->
            <div class="col-md-6">
                <div id="productCarousel" class="carousel slide bg-light border" data-bs-ride="carousel"
                    style="height: 550px;">
                    <div class="carousel-inner" style="height: 100%;">
                        <!-- Slide 1 -->
                        <div class="carousel-item active">
                            <img src="/images/QATTK408-1-1.png" class="d-block w-100" alt="Product Image 1"
                                style="height: 100%; object-fit: cover;">
                        </div>
                        <!-- Slide 2 -->
                        <div class="carousel-item">
                            <img src="/images/QGNTK506-1-510x510.png" class="d-block w-100" alt="Product Image 2"
                                style="height: 100%; object-fit: cover;">
                        </div>
                        <!-- Slide 3 -->
                        <div class="carousel-item">
                            <img src="/images/QJDTK506-1-768x768.png" class="d-block w-100" alt="Product Image 3"
                                style="height: 100%; object-fit: cover;">
                        </div>
                    </div>
                    <!-- Carousel Controls -->
                    <button class="carousel-control-prev custom-carousel-control" type="button"
                        data-bs-target="#productCarousel" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon custom-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next custom-carousel-control" type="button"
                        data-bs-target="#productCarousel" data-bs-slide="next">
                        <span class="carousel-control-next-icon custom-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>

                </div>
            </div>

            <!-- Product Information -->
            <div class="col-md-6">
                <h1 class="display-6">Tên sản phẩm</h1>
                <div class="d-flex align-items-center mb-3">
                    <span class="text-warning fs-5"><i class="fa-solid fa-star"></i></span>
                    <span class="text-warning fs-5"><i class="fa-solid fa-star"></i></span>
                    <span class="text-warning fs-5"><i class="fa-solid fa-star"></i></span>
                    <span class="text-warning fs-5"><i class="fa-solid fa-star"></i></span>
                    <span class="text-warning fs-5"><i class="fa-solid fa-star"></i></span>
                </div>
                <p class="text-danger fs-4 fw-bold">000.000.000 VND</p>

                <!-- Color Options -->
                <div class="mb-3">
                    <h5>Màu sắc:</h5>
                    <div class="d-flex">
                        <div class="bg-secondary rounded-circle me-2" style="width: 30px; height: 30px;"></div>
                        <div class="bg-dark rounded-circle me-2" style="width: 30px; height: 30px;"></div>
                        <div class="bg-light rounded-circle border me-2" style="width: 30px; height: 30px;"></div>
                    </div>
                </div>

                <!-- Size Options -->
                <div class="mb-3">
                    <h5>Kích thước:</h5>
                    <div class="d-flex">
                        <button class="btn btn-outline-secondary me-2">S</button>
                        <button class="btn btn-outline-secondary me-2">M</button>
                        <button class="btn btn-outline-secondary me-2">L</button>
                    </div>
                </div>

                <!-- Quantity Selection -->
                <div class="mb-3 d-flex align-items-center">
                    <h5>Số lượng:</h5>
                    <button class="btn btn-outline-secondary ms-3 me-1">-</button>
                    <input type="number" value="1" class="form-control w-25 text-center" min="1" disabled>
                    <button class="btn btn-outline-secondary ms-1">+</button>
                </div>

                <!-- Action Buttons -->
                <div class="d-flex gap-3 mt-4">
                    <button class="btn btn-dark">Mua ngay</button>
                    <button class="btn btn-outline-dark">Thêm vào giỏ</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Product Description Tabs -->
    <div class="container my-5">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="description-tab" data-bs-toggle="tab" data-bs-target="#description"
                    type="button" role="tab">Mô tả sản phẩm</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="reviews-tab" data-bs-toggle="tab" data-bs-target="#reviews" type="button"
                    role="tab">Đánh giá</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="return-policy-tab" data-bs-toggle="tab" data-bs-target="#return-policy"
                    type="button" role="tab">Chính sách đổi trả</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="privacy-policy-tab" data-bs-toggle="tab" data-bs-target="#privacy-policy"
                    type="button" role="tab">Chính sách bảo mật</button>
            </li>
        </ul>
        <div class="tab-content border p-3" id="myTabContent">
            <div class="tab-pane fade show active" id="description" role="tabpanel">Lorem ipsum dolor sit amet...</div>
            <div class="tab-pane fade" id="reviews" role="tabpanel">Customer reviews go here...</div>
            <div class="tab-pane fade" id="return-policy" role="tabpanel">Return policy details...</div>
            <div class="tab-pane fade" id="privacy-policy" role="tabpanel">Privacy policy information...</div>
        </div>
    </div>

    <!-- Related Products Section -->
    <div class="container-fluid">
        <h2 class="my-4 mx-5 display-5">Sản phẩm liên quan</h2>
        <div class="row text-center">
            <div class="col-1"></div>
            <div class="col-lg-2">
                <div class="card product-card">
                    <img src="https://via.placeholder.com/200x200" class="card-img-top" alt="New Product 1"
                        height="300px">
                    <div class="card-body">
                        <p class="card-title">Tên sản phẩm</p>
                        <p class="roboto-small">$500</p>
                    </div>
                    <div class="card-overlay">
                        <a href="<?= $ROOT_URL ?>/?act=sp-chitiet">
                            <button class="btn btn-light mb-2">Xem chi tiết</button>
                        </a>
                        <a href="">
                            <button class="btn btn-light mb-2">Thêm vào giỏ</button>
                        </a>
                        <a href="">
                            <button class="btn btn-dark">Mua hàng</button>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-2">
                <div class="card product-card">
                    <img src="https://via.placeholder.com/200x200" class="card-img-top" alt="New Product 1"
                        height="300px">
                    <div class="card-body">
                        <p class="card-title">Tên sản phẩm</p>
                        <p class="roboto-small">$500</p>
                    </div>
                    <div class="card-overlay">
                        <a href="<?= $ROOT_URL ?>/?act=sp-chitiet">
                            <button class="btn btn-light mb-2">Xem chi tiết</button>
                        </a>
                        <a href="">
                            <button class="btn btn-light mb-2">Thêm vào giỏ</button>
                        </a>
                        <a href="">
                            <button class="btn btn-dark">Mua hàng</button>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-2">
                <div class="card product-card">
                    <img src="https://via.placeholder.com/200x200" class="card-img-top" alt="New Product 1"
                        height="300px">
                    <div class="card-body">
                        <p class="card-title">Tên sản phẩm</p>
                        <p class="roboto-small">$500</p>
                    </div>
                    <div class="card-overlay">
                        <a href="<?= $ROOT_URL ?>/?act=sp-chitiet">
                            <button class="btn btn-light mb-2">Xem chi tiết</button>
                        </a>
                        <a href="">
                            <button class="btn btn-light mb-2">Thêm vào giỏ</button>
                        </a>
                        <a href="">
                            <button class="btn btn-dark">Mua hàng</button>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-2">
                <div class="card product-card">
                    <img src="https://via.placeholder.com/200x200" class="card-img-top" alt="New Product 1"
                        height="300px">
                    <div class="card-body">
                        <p class="card-title">Tên sản phẩm</p>
                        <p class="roboto-small">$500</p>
                    </div>
                    <div class="card-overlay">
                        <a href="<?= $ROOT_URL ?>/?act=sp-chitiet">
                            <button class="btn btn-light mb-2">Xem chi tiết</button>
                        </a>
                        <a href="">
                            <button class="btn btn-light mb-2">Thêm vào giỏ</button>
                        </a>
                        <a href="">
                            <button class="btn btn-dark">Mua hàng</button>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-2">
                <div class="card product-card">
                    <img src="https://via.placeholder.com/200x200" class="card-img-top" alt="New Product 1"
                        height="300px">
                    <div class="card-body">
                        <p class="card-title">Tên sản phẩm</p>
                        <p class="roboto-small">$500</p>
                    </div>
                    <div class="card-overlay">
                        <a href="<?= $ROOT_URL ?>/?act=sp-chitiet">
                            <button class="btn btn-light mb-2">Xem chi tiết</button>
                        </a>
                        <a href="">
                            <button class="btn btn-light mb-2">Thêm vào giỏ</button>
                        </a>
                        <a href="">
                            <button class="btn btn-dark">Mua hàng</button>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-1"></div>
        </div>
    </div>