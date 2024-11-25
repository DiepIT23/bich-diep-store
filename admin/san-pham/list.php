<<<<<<< HEAD
    <!-- main -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <form action="index.php?act=listsp" method="POST">
                    <input type="text" name="keyword" placeholder="Nhập tên/id danh mục">
                    <select name="id_dm" id="">
                        <option value="0" selected>Tất cả</option>
                        <?php
                        foreach ($listdanhmuc as $dm) {
                            extract($dm);
                            echo "<option value =$id_dm>$ten_dm>$phan_loai</option>";
                        }
                        ?>
                    </select>
                    <input type="submit" name="listok" value="Lọc">
                </form>
=======
<div class="container-fluid">
    <h1 class="text-center my-4">Danh Sách Sản Phẩm</h1>
    
    <!-- Form Tìm kiếm -->
    <form action="index.php?act=list-sanpham" method="POST" class="d-flex justify-content-center mb-4">
        <input type="text" name="keyword" class="form-control w-25 mr-2" placeholder="Nhập tên/id danh mục">
        <select name="id_dm" class="form-control w-25 mr-2">
            <option value="0" selected>Tất cả</option>
            <?php
            foreach ($listdanhmuc as $dm) {
                extract($dm);
                echo "<option value='$id_dm'>$ten_dm > $phan_loai</option>";
            }
            ?>
        </select>
        <button type="submit" name="listok" class="btn btn-primary">Lọc</button>
    </form>
    
    <!-- Bảng sản phẩm -->
    <div class="card">
        <div class="card-header bg-dark text-white text-uppercase font-weight-bold">
            Danh Sách Sản Phẩm
        </div>
        <div class="card-body">
            <table class="table table-hover table-bordered text-center">
                <thead class="thead-dark">
                    <tr>
                        <th><input type="checkbox" id="checkAll"></th>
                        <th>ID</th>
                        <th>Tên Sản Phẩm</th>
                        <!-- <th>Hình Ảnh</th> -->
                        <th>Đơn Giá</th>
                        <th>Ngày Nhập</th>
                        <th>Mô Tả</th>
                        <th>Hành Động</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($listsanpham as $sanpham) : 
                        extract($sanpham);
                        $suasp = "index.php?act=sua-sanpham&id_sp=" . $id_sp;
                        $xoasp = "index.php?act=xoa-sanpham&id_sp=" . $id_sp;
                    ?>
                        <tr>
                            <td><input type="checkbox" class="checkItem"></td>
                            <td><?= $id_sp ?></td>
                            <td><?= $ten_sp ?></td>
                            <!-- <td><img src="<?= $hinh_anh ?>" alt="Ảnh sản phẩm" class="img-thumbnail" style="width: 50px; height: 50px;"></td> -->
                            <td><?= number_format($don_gia, 0, ',', '.') ?> VNĐ</td>
                            <td><?= $ngay_nhap ?></td>
                            <td><?= $mo_ta ?></td>
                            <td>
                                <a href="<?= $suasp ?>" class="btn btn-warning btn-sm">Sửa</a>
                                <a href="<?= $xoasp ?>" class="btn btn-danger btn-sm">Xóa</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <div class="card-footer text-center">
            <button type="button" class="btn btn-primary btn-sm mr-2" id="selectAllBtn">Chọn tất cả</button>
            <button type="button" class="btn btn-secondary btn-sm mr-2" id="deselectAllBtn">Bỏ chọn tất cả</button>
            <a href="index.php/?act=them-sanpham" class="btn btn-success btn-sm">Thêm Sản Phẩm</a>
        </div>
    </div>
</div>

<!-- JavaScript -->
<script>
    // Chọn tất cả checkbox
    document.getElementById("checkAll").addEventListener("change", function () {
        const checkItems = document.querySelectorAll(".checkItem");
        checkItems.forEach(item => item.checked = this.checked);
    });

    // Chọn tất cả
    document.getElementById("selectAllBtn").addEventListener("click", function () {
        const checkItems = document.querySelectorAll(".checkItem");
        checkItems.forEach(item => item.checked = true);
    });

    // Bỏ chọn tất cả
    document.getElementById("deselectAllBtn").addEventListener("click", function () {
        const checkItems = document.querySelectorAll(".checkItem");
        checkItems.forEach(item => item.checked = false);
    });
</script>
=======
>>>>>>> 3160708e0b0a7dd3a5c63f693caac575bdce47da
                <div class="card">
                    <div class="card-header bg-dark text-white text-uppercase font-weight-bold">
                        Danh sách sản phẩm
                    </div>

                    <div class="card-header text-uppercase font-weight-bold">
                        <div class="container-fluid">
                            <div class="row">
                                <p class="col-lg-1">STT</p>
                                <p class="col-lg-1">ID</p>
                                <p class="col-lg-2">Tên sản phẩm</p>
                                <p class="col-lg-1">Hình ảnh</p>
                                <p class="col-lg-2">Mô tả</p>
                                <p class="col-lg-1">Đơn giá</p>
                                <p class="col-lg-1">Giảm giá</p>
                                <p class="col-lg-1">Ngày nhập</p>
                                <p class="col-lg-1">Hành động</p>
                            </div>
                        </div>
                    </div>
                    <?php
                    $stt = 1;
                    foreach ($listsanpham as $san_pham) {
                        extract($san_pham);
                    ?>
                        <div class="container-fluid">
                            <div class="row d-flex align-items-center">
                                <p class="col-lg-1">
                                    <? $stt++ ?>
                                </p>
                                <p class="col-lg-1">
                                    <? $id_sp ?>
                                </p>
                                <p class="col-lg-2">
                                    <? $ten_sp ?>
                                </p>
                                <p class="col-lg-1">Hình ảnh</p>
                                <p class="col-lg-2">
                                    <? $mo_ta ?>
                                </p>
                                <p class="col-lg-1">
                                    <? $don_gia ?> VND
                                </p>
                                <p class="col-lg-1">
                                    <? $giam_gia ?> %
                                </p>
                                <p class="col-lg-1">
                                    <? $ngay_nhap ?>
                                </p>
                                <p class="col-lg-1">Hành động</p>

                            </div>
                        </div>
                    <?php
                    }
                    ?>
                </div>
                <form action="">
                    <div class=" form-group d-flex w-25 mx-auto mt-3">
<<<<<<< HEAD
                        <input type="button" name="" id="" class="btn btn-primary btn-sm mr-2" value="Chọn tất cả">
                        <input type="button" name="" id="" class="btn btn-secondary btn-sm mr-2" value="Bỏ chọn tất cả">
=======
                        <input type="button" name="" id="" class="btn btn-primary btn-sm mr-2"
                            value="Chọn tất cả">
                        <input type="button" name="" id="" class="btn btn-secondary btn-sm mr-2"
                            value="Bỏ chọn tất cả">

                        <a href="index.php/?act=them-sanpham" style="text-decoration: none;"><input
                                type="submit" name="" id="" class="form-control btn btn-outline-dark"
                                value="Nhập thêm"></a>
>>>>>>> 3160708e0b0a7dd3a5c63f693caac575bdce47da

                        <a href="<?= $ADMIN_URL ?>/?act=them-sanpham" class="text-decoration-none btn btn-outline-dark">
                            Nhập thêm
                        </a>
                    </div>

                </form>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https:code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https:cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https:stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    </body>

    <script>
        function delCF(dellUrl) {
            if (confirm('Bạn chắc chứ?')) {
                document.location = dellUrl
            }
        }
    </script>

<<<<<<< HEAD
    </html>
=======
</html>
>>>>>>> 3160708e0b0a7dd3a5c63f693caac575bdce47da
