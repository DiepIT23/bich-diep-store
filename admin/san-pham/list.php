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
                    foreach($listsanpham as $sanpham){
                        extract($sanpham);
                        $suasp = "index.php?act=sua-sanpham&id_sp=" . $id_sp;
                        $xoasp = "index.php?act=xoa-sanpham&id_sp=" . $id_sp;
                        echo '
                        <tr>
                         <td><input type="checkbox" name="" id="" /></td>
                         <td>'.$id_sp.'</td>
                         <td>'.$ten_sp.'</td>
                         <td>'.$hinh.'</td>
                         <td>'.$mo_ta.'</td>
                         <td>'.$don_gia.'</td>
                         <td>'.$giam_gia.'</td>
                         <td>'.$ngay_nhap.'</td>
                          <td>
                <a href="' . $suasp . '"><input type="button" value="Sửa" /></a>
                <a href="' . $xoasp . '"><input type="button" value="Xóa" /></a>
              </td>
                        </tr>
                        ';
                    }
                    ?>
                </div>
                <form action="">
                    <div class=" form-group d-flex w-25 mx-auto mt-3">
                        <input type="button" name="" id="" class="btn btn-primary btn-sm mr-2"
                            value="Chọn tất cả">
                        <input type="button" name="" id="" class="btn btn-secondary btn-sm mr-2"
                            value="Bỏ chọn tất cả">
                        <a href="index.php/?act=them-sanpham" class="btn btn-success btn-sm"> Nhập thêm</a>                   

                    </div>
                </form>
            </div>
        </div>
    </div>