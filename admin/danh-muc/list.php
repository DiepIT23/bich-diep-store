    <!-- main -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 mx-auto">
                <div class="card">
                    <div class="card-header bg-dark text-white text-uppercase font-weight-bold">
                        Danh mục
                    </div>
                    <div class="card-header text-uppercase font-weight-bold">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-lg-1">
                                    STT
                                </div>
                                <div class="col-lg-1">

                                </div>
                                <p class="col-lg-2">ID</p>
                                <p class="col-lg-4">Tên loại</p>
                                <p class="col-lg-2">Phân loại</p>
                                <p class="col-lg-2">Hành động</p>
                            </div>
                        </div>
                    </div>
                    <?php
                    // $count = 0;
                    // foreach ($list_lh as $key => $loaihang) {    
                    //     $STT = ++$count;
                    ?>
                    <div class="container-fluid">
                        <div class="row d-flex align-items-center">
                            <div class="col-lg-1 font-weight-bold">
                                <?php //echo $STT 
                                ?>
                            </div>
                            <div class="col-lg-1">
                                <form action="">
                                    <div class="form-group">
                                        <input type="checkbox" name="" id="" class="form-check-inline">
                                    </div>
                                </form>
                            </div>
                            <p class="col-lg-2"><?php //echo $loaihang->ma_loai 
                                                ?></p>
                            <p class="col-lg-4"><?php //echo $loaihang->ten_loai 
                                                ?></p>
                            <p class="col-lg-2"><?php //echo $loaihang->ten_loai 
                                                ?></p>
                            <div class="col-lg-2">
                                <form action="">
                                    <div class="form-group d-flex">
                                        <a href="index.php?btn_edit&id=<?php //echo $loaihang->ma_loai 
                                                                        ?>" style="text-decoration: none;"><input
                                                type="button" name="" id="" class="form-control btn-outline-dark"
                                                value="Sửa"></a>
                                        <input onclick="
                                        delCF('index.php?btn_del&id=')" type="button" name="" id=""
                                            class="form-control btn-outline-dark" value="Xóa">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <?php
                    // }
                    ?>
                </div>
                <form action="">
                    <div class=" form-group d-flex w-25 mx-auto mt-3">
                        <input type="button" name="" id="" class="form-control" value="Chọn tất cả">
                        <input type="button" name="" id="" class="form-control" value="Bỏ chọn tất cả">
                        <a href="<?= $ADMIN_URL ?>/?act=them-danhmuc" style="text-decoration: none;"><input
                                type="button" name="" id="" class="form-control" value="Nhập thêm"></a>
                    </div>
                </form>
            </div>
        </div>
    </div>