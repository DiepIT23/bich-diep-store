    <!-- thêm mới -->
    <div class="container">

        <div class="row">
            <div class="col-lg-9 mx-auto">
                <div class="card">
                    <div class="card-header">
                        THÊM MỚI SẢN PHẨM

                    </div>
                    <form class="p-4" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="">Tên sản phẩm</label>
                            <input type="text" class="form-control" name="ten_sp" required>
                        </div>
                        <div class="form-group">
                            <label for="">Đơn giá</label>
                            <input type="text" class="form-control" name="don_gia" required>
                        </div>
                        <div class="form-group">
                            <label for="">Giảm giá</label>
                            <input type="number" class="form-control" name="giam_gia" id="giam-gia" disabled>
                        </div>
                        <div class="form-group">
                            <label for="">Hình ảnh</label>
                            <input type="file" class="form-control" name="hinh_anh[]" multiple required>
                        </div>
                        <div class="form-group">
                            <label for="">Ngày nhập</label>
                            <input type="date" class="form-control" name="ngay_nhap" required>
                        </div>

                        <div class="form-group">
                            <label for="">Mô tả</label>
                            <textarea name="mo_ta" id="myTextarea" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="">Danh mục</label>
                            <select name="id_dm" class="form-control">
                                <option value="0">--Chọn danh mục--</option>
                                <?php
                                foreach ($listdanhmuc as $danhmuc) {
                                    extract($danhmuc)
                                ?>
                                <option value="<?php echo $id_dm ?>">
                                    <?php echo $ten_dm ?>
                                </option>
                                <?php
                                }
                                ?>

                            </select>
                        </div>
                        <button type="submit" name="themmoi" class="btn btn-primary">Thêm mới</button>
                        <button type="reset" class="btn btn-secondary ">Nhập lại</button>
                        <a href="<?= $ADMIN_URL ?>/?act=list-sanpham"><button type="button"
                                class="btn btn-success ">Danh
                                sách</button></a>
                    </form>
                </div>
            </div>
        </div>
    </div>