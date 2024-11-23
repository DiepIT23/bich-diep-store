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
                <select name="id_dm" >
                    <?php
                        foreach($lisdanhmuc as $dm){
                            extract($dm);
                            echo "<option value =$id_dm>$ten_dm>$phan_loai</option>";
                        }
                    ?>
                </select>
                <div class="form-group">
                            <label for="exampleInputEmail1">ID</label>
                            <input type="text" class="form-control" name="id_sp" required>
                        </div>
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
                                foreach ($listdanhmuc as $danhmuc) {
                                ?>
                                <option value="<?php echo $danhmuc->id_dm 
                                                    ?>"><?php echo $danhmuc->ten_dm 
                                                        ?> 
                                </option>
                                <?php
                                 }
                                ?>
                            </select>
                        </div>
                        <button type="submit" name="themmoi" class="btn btn-primary mr20">Thêm mới</button>
                        <button type="reset" class="btn btn-secondary mr20">Nhập lại</button>
                        <a href="index.php/?act=listsp"><button type="button"
                        class="btn btn-success mr20">Danh
                                sách</button></a>
                      </form>
                </div>
            </div>
        </div>
    </div>