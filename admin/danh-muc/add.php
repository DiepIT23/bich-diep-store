    <!-- thêm mới -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-9 mx-auto">
                <div class="card">
                    <div class="card-header bg-dark text-white text-uppercase font-weight-bold">
                        THÊM MỚI DANH MỤC
                    </div>
                    <form class="p-4" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tên danh mục</label>
                            <input type="text" class="form-control" name="ten_loai" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Phân loại</label>
                            <select name="phan_loai" class="form-control">
                                <option value="0"> --Phân loại-- </option>
                                <option value="Áo">Áo</option>
                                <option value="Quần">Quần</option>
                            </select>
                        </div>
                        <input class="btn btn-primary mr20" type="submit" name="themmoi" value="THÊM MỚI">
                        <input class="btn btn-secondary mr20" type="reset" value="NHẬP LẠI">
                        <a href="<?= $ADMIN_URL ?>/?act=list-danhmuc"><input class="btn btn-success mr20" type="button" value="DANH SÁCH"></a>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>