    <!-- sửa -->
    <?php
    if (is_array($dm)) {
        extract($dm);
    }
    ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header bg-dark text-white text-uppercase font-weight-bold">
                        CHỈNH SỬA DANH MỤC
                    </div>
                    <form class="p-4" method="POST" action="<?= $ADMIN_URL ?>/?act=update-danhmuc">
                    <div class="form-group">
                            <label>ID</label>
                            <input type="text" class="form-control" name="id_dm" value="<?php echo $id_dm ?>">
                        </div>
                        <div class="form-group">
                            <label>Tên danh mục</label>
                            <input type="text" class="form-control" name="ten_dm" value="<?php echo $ten_dm ?>">
                        </div>
                        <div class="form-group">
                            <label>Phân loại</label>
                            <input type="text" class="form-control" name="phan_loai" value="<?php echo $phan_loai ?>">
                        </div>
                        <div class="form-group">
                        <input type="hidden" name="id_dm"
                            value="<?php if (isset($id_dm) && $id_dm > 0) echo $id_dm; ?>">
                        
                        <button type="submit" name="sua"   class="btn btn-outline-dark">Sửa</button>
                        
                        
                        <button type="reset" class="btn btn-outline-dark">Nhập lại</button>
                        <a href="<?= $ADMIN_URL ?>/?act=list-danhmuc"><button type="button"
                                class="btn btn-outline-dark">Danh
                                sách</button></a>
                                </div>
                                <?php
                if(isset($thongbao)&&$thongbao!=""){
                    echo $thongbao;
                }
            ?>
                    </form>
                </div>
            </div>
        </div>
    </div>