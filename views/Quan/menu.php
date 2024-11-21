<main class="p-2">
    <div class="container">
        <div class="row">
            <div class="col-6">
                <a href="<?= $ROOT_URL ?>/?act=ao">
                    <h1 class="mt-2 fw-semibold text-center">Áo</h1>
                </a>
            </div>
            <div class="col-6">
                <a href="<?= $ROOT_URL ?>/?act=quan">
                    <h1 class="mt-2 fw-semibold text-center">Quần</h1>
                </a>
            </div>
        </div>
    </div>
    <div class="categories d-flex justify-content-center gap-3 mb-3">
        <a href="<?= $ROOT_URL ?>/?act=quan&quan=quan-au">Quần âu</a>
        <a href="<?= $ROOT_URL ?>/?act=quan&quan=quan-jeans">Quần Jeans</a>
        <a href="<?= $ROOT_URL ?>/?act=quan&quan=quan-kaki">Quần Kaki</a>
        <a href="<?= $ROOT_URL ?>/?act=quan&quan=quan-jogger">Quần Jogger</a>
        <a href="<?= $ROOT_URL ?>/?act=quan&quan=quan-short">Quần Short</a>

        <!-- Tìm kiếm Lọc -->
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="d-flex mb-5 col-6">
                <input type="text" placeholder="Bạn cần gì?" class="rounded-start-3 w-50 p-2 form-control">
                <button class="btn rounded-start-0 btn-dark rounded-end-3">Tìm kiếm</button>
            </div>
            <div class="col-6 text-end">
                <select class="w-25 mx-1 h-50 rounded-3">
                    <option value="0">--Lọc sản phẩm--</option>
                    <option value="Tên từ A -> Z">Tên từ A-> Z</option>
                    <option value="Tên từ Z -> A">Tên từ Z-> A</option>
                    <option value="Mới nhất">Mới nhất</option>
                    <option value="Cũ nhất">Cũ nhất</option>
                    <option value="Bán chạy">Bán chạy</option>
                </select>
                <select class="w-25 mx-1 h-50 rounded-3">
                    <option value="0">--Chọn khoảng giá--</option>
                    <option value="0 -> 100.000">0 -> 100.000</option>
                    <option value="100.000 -> 500.000">100.000 -> 500.000</option>
                    <option value="500.000 -> 1.000.000">500.000 -> 1.000.000</option>
                    <option value="1.000.000 trở lên">1.000.000 trở lên</option>
                    <option value="">Giá từ thấp đến cao</option>
                    <option value="">Giá từ cao đến thấp</option>
                </select>
            </div>
        </div>
    </div>