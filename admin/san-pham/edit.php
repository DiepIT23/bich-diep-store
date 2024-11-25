    <!-- sửa -->
    <?php
if (is_array($san_pham)) {
    extract($san_pham);
}
// $hinh_anh_path = "../uploads/" . $img;
// if (is_file($hinh_anh_path)) {
//     $hinh = "<img src='$hinh_anh_path' height='80' width='80'>";
// } else {
//     $hinh = " không có hình";
// }
?>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        CHỈNH SỬA SẢN PHẨM
                    </div>
                    <form action="index.php?act=update-sanpham" class="p-4" method="post" enctype="multipart/form-data">
                    <!-- <div class="row2 mb10 form_content_container">
                <select name="iddm">
                    <option value="0">Tất cả</option>
                    <?php
                    foreach ($listdanhmuc as $dm) {
                        if($id_dm==$dm['id_dm']) $s="selected"; else $s="";
                        echo '<option value="'.$dm['id_dm'].'"'.$s.'>'.$dm['ten_dm'].'</option>';
                    }
                    ?>
                </select>
            </div> --> <div class="form-group">
                        <div class="form-group">
                            <label>ID</label>
                            <input type="text" class="form-control" name="id_sp" value="<?php echo $san_pham['id_sp'] ?>">
                        </div>
           
                        <div class="form-group">
                            <label>Tên sản phẩm</label>
                            <input type="text" class="form-control" name="ten_sp" value="<?php echo $san_pham['ten_sp'] ?>">
                        </div>
                        <div class="form-group">
                            <label>Đơn giá</label>
                            <input type="text" class="form-control" name="don_gia" value="<?php echo $san_pham['don_gia']  ?>">
                        </div>
                        <!-- <div class="form-group">
                            <label>Giảm giá</label>
                            <input type="text" class="form-control" name="giam_gia" value="<?php echo $san_pham['giam_gia'] ?>">
                        </div> -->
                        <!-- <div class="form-group">
                            <label>Hình ảnh</label>
                            <input type="file" class="form-control" name="hinh_anh">
                            <img src="<?php //echo $id_hh->hinh_anh 
                                        ?>" alt="" width="100px">
                        </div> -->
                        <div class="form-group">
                            <label>Ngày nhập</label>
                            <input type="date" class="form-control" name="ngay_nhap" value="<?php echo $san_pham['ngay_nhap'] ?>">
                        </div>
                        <div class="form-group">
                            <label>Mô tả</label>
                            <textarea name="mo_ta" id="myTextarea" class="form-control"><?php echo $san_pham['mo_ta'] ?></textarea>
                        </div>
                        <!-- <div class="form-group">
                            <label>Đặc biệt</label>
                            <input type="text" class="form-control" name="dac_biet" value="">
                        </div> -->
                        <div class="form-group">
                            <label>Danh mục</label>
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