<?php
// submit_review.php

// Get the POST data
$data = json_decode(file_get_contents('php://input'), true);

// Check if review data is received
if (isset($data['review'])) {
    $reviewText = $data['review'];

    // Validate and process the review (e.g., store in the database)
    // For simplicity, we'll just return a success message
    // You can extend this with database handling code

    // Example of saving to the database (assuming you have a connection):
    /*
    $sql = "INSERT INTO reviews (product_id, review_text) VALUES (?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("is", $product_id, $reviewText);
    $stmt->execute();
    */

    // Send success response
    echo json_encode(['success' => true]);
} else {
    // If no review text is sent, return an error
    echo json_encode(['success' => false]);
}
?>

    <!-- Product Details Section -->
    <div class="container my-5">
        <div class="row">
            <!-- Product Image Slider -->
            <div class="slide-show-sm col-lg-6">
                <div class="list-images-sm">
                    <?php
                    extract($san_pham);
                    $gia_ban = $don_gia - ($don_gia * $giam_gia / 100);
                    foreach ($listAnh as $anh) {
                        extract($anh);
                    ?>
                        <img src="<?= $IMAGES_URL . "/" . $url_anh ?>" class="img-sm">
                    <?php
                    }
                    ?>
                </div>
                <div class="btns-sm">
                    <div class="btn-left-sm btn">
                        <i class="fa-solid fa-chevron-left fa-2x"></i>
                    </div>
                    <div class="btn-right-sm btn">
                        <i class="fa-solid fa-chevron-right fa-2x"></i>
                    </div>
                </div>
            </div>

            <!-- Product Information -->
            <div class="col-md-6">
                <h1 class="display-6"><?= $ten_sp ?></h1>
                <div class="d-flex align-items-center mb-3">
                    <span class="text-warning fs-5"><i class="fa-solid fa-star"></i></span>
                    <span class="text-warning fs-5"><i class="fa-solid fa-star"></i></span>
                    <span class="text-warning fs-5"><i class="fa-solid fa-star"></i></span>
                    <span class="text-warning fs-5"><i class="fa-solid fa-star"></i></span>
                    <span class="text-warning fs-5"><i class="fa-solid fa-star"></i></span>
                </div>
                <div class="text-danger fs-4 fw-bold"><?= number_format($gia_ban, 0, ',', '.') ?> VND
                </div>
                <?php
                if ($giam_gia > 0) {
                ?>
                    <div class="text-decoration-line-through"><?= number_format($don_gia, 0, ',', '.') ?> VND</div>
                <?php
                }
                ?>
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
            <div class="tab-pane fade show active" id="description" role="tabpanel">
                <div id="myTextarea"><?= $mo_ta ?></div>
            </div>
            <div class="tab-pane fade" id="reviews" role="tabpanel">
               <div id="myTextarea">
               <div class="d-flex align-items-center mb-3">
                    <!-- Rating Stars -->
                    <span class="text-warning fs-5"><i class="fa-solid fa-star"></i></span>
                    <span class="text-warning fs-5"><i class="fa-solid fa-star"></i></span>
                    <span class="text-warning fs-5"><i class="fa-solid fa-star"></i></span>
                    <span class="text-warning fs-5"><i class="fa-solid fa-star"></i></span>
                    <span class="text-warning fs-5"><i class="fa-solid fa-star"></i></span>
                </div>

                <!-- Review Form -->
                <form id="review-form">
                    <div class="mb-3">
                        <label for="review-text" class="form-label">Chia sẻ cảm nhận của bạn</label>
                        <textarea class="form-control" id="review-text" rows="4" placeholder="Viết đánh giá của bạn..."></textarea>
                    </div>
                    <button type="button" class="btn btn-primary" onclick="submitReview()">Gửi đánh giá</button>
                </form>

               </div>
            </div>
            <div class="tab-pane fade" id="return-policy" role="tabpanel">
                <div id="myTextarea">
                    <h2>Chính Sách Đổi Trả - <a href="<?= $ROOT_URL ?>/"
                            class="text-dark text-decoration-none fw-bold h2">Bich-Diep Store</a></h2>

                    Tại <a href="<?= $ROOT_URL ?>/" class="text-dark text-decoration-none fw-bold">Bich-Diep Store</a>,
                    chúng tôi cam kết mang đến sự hài lòng và trải nghiệm mua sắm tốt nhất chokhách hàng.
                    Chính sách đổi trả của chúng tôi được xây dựng nhằm đảm bảo quyền lợi của khách hàng
                    trong quá trình mua sắm.

                    1. Điều Kiện Đổi Trả
                    - Sản phẩm còn nguyên tem mác, không có dấu hiệu đã qua sử dụng, không giặt ủi.
                    - Đổi trả trong vòng 7 ngày kể từ ngày nhận hàng.
                    - Hóa đơn mua hàng hoặc biên nhận kèm theo sản phẩm khi đổi trả.
                    - Không áp dụng đổi trả cho các sản phẩm khuyến mãi, giảm giá trên 50% hoặc quà tặng.

                    2. Các Trường Hợp Được Đổi Trả
                    - Sản phẩm lỗi từ nhà sản xuất: Rách, hỏng, đường may lỗi, hoặc màu sắc sai khác hoàn toàn so
                    với mô tả.
                    - Sai mẫu mã hoặc kích cỡ: Nếu sản phẩm nhận được không đúng mẫu mã, kích cỡ đã đặt.
                    - Sản phẩm không đúng đơn hàng: Chúng tôi sẽ hỗ trợ đổi đúng sản phẩm bạn đã đặt.

                    3. Quy Trình Đổi Trả
                    - Bước 1: Liên hệ với <a href="<?= $ROOT_URL ?>/"
                        class="text-dark text-decoration-none fw-bold">Bich-Diep Store</a> qua hotline hoặc fanpage
                    chính thức để thông báo về sản phẩm cần đổi trả.
                    - Bước 2: Gửi sản phẩm về địa chỉ shop kèm thông tin khách hàng và lý do đổi trả.
                    - Bước 3: Sau khi kiểm tra và xác nhận sản phẩm hợp lệ, chúng tôi sẽ tiến hành:
                    - Gửi sản phẩm thay thế (nếu đổi).
                    - Hoàn tiền qua tài khoản ngân hàng hoặc phương thức thanh toán ban đầu (nếu trả).

                    4. Chi Phí Đổi Trả
                    - Lỗi từ phía shop: Chúng tôi sẽ chịu toàn bộ chi phí vận chuyển đổi trả.
                    - Do nhu cầu cá nhân của khách hàng: Quý khách vui lòng thanh toán phí vận chuyển 2 chiều.

                    5. Lưu Ý
                    - Thời gian xử lý đổi trả: từ 3-5 ngày làm việc kể từ khi nhận được sản phẩm.
                    - Khách hàng vui lòng kiểm tra kỹ sản phẩm trước khi ký nhận với đơn vị giao hàng để hạn chế phát
                    sinh không đáng có.

                    Mọi thắc mắc hoặc cần hỗ trợ thêm, vui lòng liên hệ:
                    - Hotline: 01 234 567 88 | 01 234 567 89
                    - Email: bich-diep-store@example.com
                    - Địa chỉ: Hà Nội, HN 10000, VN

                    <a href="<?= $ROOT_URL ?>/" class="text-dark text-decoration-none fw-bold">Bich-Diep Store</a>
                    luôn sẵn sàng đồng hành cùng bạn! ❤️
                </div>
            </div>
            <div class="tab-pane fade" id="privacy-policy" role="tabpanel">
                <div id="myTextarea">
                    <h2>Chính Sách Bảo Mật - <a href="<?= $ROOT_URL ?>/"
                            class="text-dark text-decoration-none fw-bold h2">Bich-Diep Store</a>
                    </h2>
                    <a href="<?= $ROOT_URL ?>/" class="text-dark text-decoration-none fw-bold">
                        Bich-Diep Store</a> cam kết bảo vệ quyền riêng tư và bảo mật thông tin cá nhân của khách hàng.
                    Chính sách bảo mật dưới đây giải thích cách chúng tôi thu thập, sử dụng và bảo vệ thông tin mà bạn
                    cung cấp.

                    1. Thông Tin Thu Thập
                    - Khi bạn mua sắm hoặc sử dụng dịch vụ tại <a href="<?= $ROOT_URL ?>/"
                        class="text-dark text-decoration-none fw-bold">Bich-Diep Store</a>, chúng tôi có thể thu thập
                    các thông tin sau:
                    - Thông tin cá nhân: Họ tên, số điện thoại, địa chỉ giao hàng, email.
                    - Thông tin giao dịch: Sản phẩm đã mua, phương thức thanh toán, và lịch sử giao dịch.
                    - Thông tin khác: Phản hồi, đánh giá hoặc thông tin liên hệ khi bạn tương tác với đội ngũ hỗ trợ của
                    chúng tôi.

                    2. Mục Đích Sử Dụng Thông Tin
                    - Chúng tôi sử dụng thông tin cá nhân của bạn vào các mục đích sau:
                    - Xử lý đơn hàng và giao hàng: Đảm bảo bạn nhận được sản phẩm đúng thời gian và địa chỉ.
                    - Chăm sóc khách hàng: Hỗ trợ giải quyết khiếu nại, trả lời thắc mắc hoặc tư vấn sản phẩm.
                    - Tiếp thị và quảng cáo: Cung cấp thông tin về khuyến mãi, sản phẩm mới (chỉ khi bạn đồng ý nhận
                    thông báo).
                    - Cải thiện dịch vụ: Phân tích và nâng cao trải nghiệm mua sắm của khách hàng.

                    3. Chia Sẻ Thông Tin<a href="<?= $ROOT_URL ?>/" class="text-dark text-decoration-none fw-bold">
                        Bich-Diep Store</a> cam kết không bán, trao đổi hoặc chia sẻ thông tin của bạn với bên thứ ba,
                    trừ các trường hợp sau:
                    - Đối tác giao hàng: Chia sẻ địa chỉ và số điện thoại để giao sản phẩm.
                    - Yêu cầu pháp lý: Cung cấp thông tin khi có yêu cầu từ cơ quan pháp luật hoặc tòa án.
                    - Bên cung cấp dịch vụ: Các đối tác hỗ trợ thanh toán, bảo trì website, với điều kiện họ phải đảm
                    bảo bảo mật thông tin tương tự chính sách của chúng tôi.

                    4. Bảo Mật Thông Tin
                    Chúng tôi sử dụng các biện pháp kỹ thuật tiên tiến để bảo vệ thông tin của bạn, bao gồm mã hóa dữ
                    liệu và bảo mật máy chủ.
                    Đội ngũ nhân viên chỉ truy cập thông tin khách hàng khi cần thiết để hỗ trợ hoặc xử lý đơn hàng.

                    5. Quyền Lợi Của Khách Hàng
                    - Bạn có quyền:
                    - Kiểm tra thông tin cá nhân: Yêu cầu xem lại hoặc chỉnh sửa thông tin mà chúng tôi lưu trữ.
                    - Hủy nhận thông báo: Nếu bạn không muốn nhận email quảng cáo, hãy liên hệ với chúng tôi hoặc nhấn
                    - "Hủy đăng ký" trong email.
                    - Yêu cầu xóa thông tin: Chúng tôi sẽ xóa thông tin của bạn nếu không còn cần thiết cho mục đích đã
                    nêu.

                    6. Liên Hệ Hỗ Trợ
                    Nếu bạn có bất kỳ câu hỏi hoặc quan ngại nào về chính sách bảo mật, vui lòng liên hệ:
                    - Hotline: 01 234 567 88 | 01 234 567 89
                    - Email: bich-diep-store@example.com
                    - Địa chỉ: Hà Nội, HN 10000, VN

                    <a href="<?= $ROOT_URL ?>/" class="text-dark text-decoration-none fw-bold">Bich-Diep Store</a>
                    trân trọng sự tin tưởng của bạn và cam kết bảo vệ quyền riêng tư của bạn một cách tốt nhất! ❤️
                </div>
            </div>
        </div>
    </div>

    <!-- Related Products Section -->
    <div class="container-fluid">
        <h2 class="my-4 mx-5 display-5">Sản phẩm liên quan</h2>
        <div class="row text-center">
            <div class="col-1"></div>
            <?php
            foreach ($sp_cungloai as $sp) {
                extract($sp);
            ?>
                <div class="col-lg-2">
                    <div class="card product-card">
                        <img src="<?= $IMAGES_URL . " /" . $hinh_anh ?>" class="card-img-top" alt="New Product 1"
                            height="300px">
                        <div class="card-body">
                            <p class="card-title"
                                style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; max-width: 25ch;">
                                <?= $ten_sp ?></p>
                            <p class="roboto-small"><?= number_format($gia_ban, 0, ',', '.') ?> VND</p>
                        </div>
                        <div class="card-overlay">
                            <a href="<?= $ROOT_URL ?>/?act=sp-chitiet&id_sp=<?= $id_sp ?>">
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
            <?php
            }
            ?>
            <div class="col-1"></div>
        </div>
    </div>
    <script>
        function submitReview() {
    // Get the review text from the textarea
    var reviewText = document.getElementById('review-text').value;

    // Check if the review is not empty
    if (reviewText.trim() === '') {
        alert('Vui lòng nhập đánh giá của bạn!');
        return;
    }

    // Create a data object to send in the request
    var reviewData = {
        review: reviewText
    };

    // Optionally, you can send this data to the server using AJAX (e.g., using fetch or jQuery)
    fetch('submit_review.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify(reviewData)
    })
    .then(response => response.json())  // Parse the JSON response
    .then(data => {
        if (data.success) {
            alert('Đánh giá của bạn đã được gửi thành công!');
            document.getElementById('review-text').value = ''; // Clear the textarea
        } else {
            alert('Có lỗi xảy ra, vui lòng thử lại!');
        }
    })
    .catch(error => {
        console.error('Error:', error);
        alert('Có lỗi xảy ra, vui lòng thử lại!');
    });
}

    </script>