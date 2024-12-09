    <!-- sửa -->
    <?php
    if (is_array($san_pham)) {
        extract($san_pham);
    }
    ?>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        CHỈNH SỬA SẢN PHẨM
                    </div>
                    <form action="index.php?act=update-sanpham" class="p-4" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <div class="form-group">
                                <input type="hidden" class="form-control" name="id_sp" value="<?php echo $id_sp ?>">
                            </div>

                            <div class="form-group">
                                <label>Tên sản phẩm</label>
                                <input type="text" class="form-control" name="ten_sp" value="<?php echo $ten_sp ?>">
                            </div>
                            <div class="form-group">
                                <label>Đơn giá</label>
                                <input type="text" class="form-control" name="don_gia" value="<?php echo $don_gia  ?>">
                            </div>
                            <div class="form-group">
                                <label>Giảm giá</label>
                                <input type="text" class="form-control" name="giam_gia" id="giam-gia"
                                    value="<?php echo $giam_gia ?>">
                            </div>
                            <div class="form-group">
                                <label for="">Hình ảnh hiện tại</label>
                                <div class="row">
                                    <?php
                                    foreach ($listAnh as $anh) {
                                        extract($anh);
                                    ?>
                                    <img src="<?= $IMAGES_URL . "/" . $url_anh ?>" width="100px" class="col-1"><br>
                                    <?php
                                    }
                                    ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="">Hình ảnh mới</label>
                                <input type="file" class="form-control" name="hinh_anh[]" multiple>
                            </div>
                            <div class="form-group">
                                <label>Ngày nhập</label>
                                <input type="date" class="form-control" name="ngay_nhap"
                                    value="<?php echo $ngay_nhap ?>">
                            </div>
                            <div class="form-group">
                                <label>Mô tả</label>
                                <textarea name="mo_ta" id="myTextarea"
                                    class="form-control"><?php echo $mo_ta ?></textarea>
                            </div>
                            <div class="form-group">
                                <label>Danh mục</label>
                                <select name="id_dm" class="form-control">
                                    <option value="0">--Chọn danh mục--</option>
                                    <?php
                                    foreach ($listdanhmuc as $dm) {
                                        if ($id_dm == $dm['id_dm']) $s = "selected";
                                        else $s = "";
                                        echo '<option value="' . $dm['id_dm'] . '"' . $s . '>' . $dm['ten_dm'] . '</option>';
                                    }
                                    ?>

                                </select>
                            </div>
                            <button type="submit" name="capnhat_sp" class="btn btn-primary mr20">Sửa</button>
                            <button type="reset" class="btn btn-secondary mr20">Nhập lại</button>
                            <a href="index.php/?act=list-sanpham"><button type="button"
                                    class="btn btn-success mr20">Danh
                                    sách</button></a>
                    </form>
                </div>
            </div>
        </div>
    </div>