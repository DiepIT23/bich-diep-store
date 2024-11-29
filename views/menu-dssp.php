<div class="container-fluid my-3">
    <div class="row">
        <form class="d-flex mb-5 col-6" method="post" action="<?= $ROOT_URL ?>/?act=ds-sp">
            <input type="text" placeholder="Bạn cần gì?" name="keyword" class="rounded-start-3 w-50 p-2 form-control">
            <button class="btn rounded-start-0 btn-dark rounded-end-3" type="submit" name="timkiem">Tìm kiếm</button>
        </form>
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
        <?php
        if (isset($kyw) && $kyw !== "") {
        ?>
            <p>Kết quả tìm kiếm cho: <?= $kyw ?></p>
        <?php
        } ?>
    </div>
</div>