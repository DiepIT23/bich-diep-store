    <!-- thêm mới -->
    <div class="container">
        
        <div class="row">
            <div class="col-lg-9 mx-auto">
                <div class="card">
                    <div class="card-header">
                        THÊM MỚI SẢN PHẨM
                        
                    </div>
                    <form action="index.php?act=them-sanpham" class="p-4" method="POST" enctype="multipart/form-data">
                    <label>Danh mục</label>
                <select name="iddm" >
                    <?php
                        foreach($listDanhmuc as $dm){
                            extract($dm);
                            echo "<option value =$id>$name</option>";
                        }
                    ?>
                </select>
                   
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tên sản phẩm</label>
                            <input type="text" class="form-control" name="ten_sp" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Đơn giá</label>
                            <input type="text" class="form-control" name="don_gia" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Giảm giá</label>
                            <input type="checkbox" class="form-control" name="giam_gia">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Đặc biệt</label>
                            <input type="text" class="form-control" name="dac_biet" disabled>
                        </div>
                        <!-- <div class="form-group">
                            <label for="exampleInputEmail1">Hình ảnh</label>
                            <input type="file" class="form-control" name="hinh_anh[]" multiple>
                        </div> -->
                        <div class="form-group">
                            <label for="exampleInputEmail1">Ngày nhập</label>
                            <input type="date" class="form-control" name="ngay_nhap" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Mô tả</label>
                            <textarea name="mo_ta" id="myTextarea" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Danh mục</label>
                            <select name="ma_loai" class="form-control">
                                <option value="0">--Chọn danh mục--</option>
                                <?php
                                // foreach ($list_lh as $loaihang) {
                                ?>
                                <!-- <option value="<?php //echo $loaihang->ma_loai 
                                                    ?>"><?php //echo $loaihang->ten_loai 
                                                        ?> -->
                                <!-- </option> -->
                                <?php
                                // }
                                ?>
                            </select>
                        </div>
                        <button type="submit" name="themmoi" class="btn btn-outline-dark">Thêm mới</button>
                        <button type="reset" class="btn btn-outline-dark">Nhập lại</button>
                        <a href="index.php/?act=san-pham"><button type="button"
                                class="btn btn-outline-dark">Danh
                                sách</button></a>
                      </form>
                </div>
            </div>
        </div>
    </div>