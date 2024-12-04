<div class="container-fluid mt-4">
    <h1 class="text-center my-4">Danh Sách Danh Mục</h1>
    <div class="row">
        <div class="col-lg-10 mx-auto">
            <div class="card">
                <!-- Header của danh mục -->


                <!-- Bảng hiển thị danh mục -->
                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead class="thead-dark">
                            <tr class="text-center">
                                <th>STT</th>
                                <th>Chọn</th>
                                <th>ID</th>
                                <th>Tên Loại</th>
                                <th>Phân Loại</th>
                                <th>Hành Động</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $stt = 1;
                            foreach ($listdanhmuc as $danhmuc) {
                                extract($danhmuc);
                                $suadm = $ADMIN_URL . "/?act=sua-danhmuc&id_dm=" . $id_dm;
                                $xoadm = $ADMIN_URL . "/?act=xoa-danhmuc&id_dm=" . $id_dm;
                            ?>
                                <tr class="text-center align-middle">
                                    <td><?= $stt++ ?></td>
                                    <td><input type="checkbox"></td>
                                    <td><?= $id_dm ?></td>
                                    <td><?= $ten_dm ?></td>
                                    <td><?= $phan_loai ?></td>
                                    <td>
                                        <a href="<?= $suadm ?>" class="btn btn-warning btn-sm">Sửa</a>
                                        <button onclick="delCF('<?= $xoadm ?>')" class="btn btn-danger btn-sm">Xóa</button>
                                    </td>
                                </tr>

                            <?php
                            }

                            ?>
                        </tbody>
                    </table>
                </div>

                <!-- Form Tác Vụ -->
                <div class="card-footer text-center">
                    <form method="post" action="">
                        <button type="button" class="btn btn-primary btn-sm mr-2" id="select-all">Chọn tất cả</button>
                        <button type="button" class="btn btn-secondary btn-sm mr-2" id="deselect-all">Bỏ chọn tất
                            cả</button>
                        <a href="<?= $ADMIN_URL ?>/?act=them-danhmuc" class="btn btn-success btn-sm">Thêm Mới</a>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- JavaScript -->
<script>
    // JavaScript cho nút chọn tất cả và bỏ chọn
    document.getElementById('select-all').addEventListener('click', function() {
        document.querySelectorAll('input[type="checkbox"]').forEach(checkbox => checkbox.checked = true);
    });

    document.getElementById('deselect-all').addEventListener('click', function() {
        document.querySelectorAll('input[type="checkbox"]').forEach(checkbox => checkbox.checked = false);
    });
</script>