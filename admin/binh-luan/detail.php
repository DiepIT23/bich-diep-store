    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h3>Sản phẩm:
                    <?php
                    //echo $bl_by_hh[0]->ten_hh;
                    ?>
                </h3>
            </div>
            <div class="card-header text-uppercase font-weight-bold bg-dark text-white">
                <div class="container">
                    <div class="row">
                        <p class="col-lg-1"></p>
                        <p class="col-lg-5">Nội dung</p>
                        <p class="col-lg-3">Ngày bình luận</p>
                        <p class="col-lg-3">Người bình luận</p>
                    </div>
                </div>
            </div>
            <div class="card-text">
                <?php
                //foreach ($bl_by_hh as $binhluan) {
                ?>
                <div class="container">
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-1">
                            <form action="" method="post">
                                <input type="checkbox" class="form-check-input" name="ma_bl">
                            </form>
                        </div>
                        <div class="col-lg-5"><?php //echo $binhluan->noi_dung 
                                                ?></div>
                        <div class="col-lg-3"><?php //echo $binhluan->ngay_bl 
                                                ?></div>
                        <div class="col-lg-3"><?php //echo $binhluan->ma_kh 
                                                ?></div>
                        <?php
                        //}
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <form action="">
        <div class=" form-group d-flex w-25 mx-auto mt-3">
            <input type="button" name="" id="" class="form-control" value="Chọn tất cả">
            <input type="button" name="" id="" class="form-control" value="Bỏ chọn tất cả">
            <a href="index.php/?act=list-bl" style="text-decoration: none;"><input type="button" name="" id="" class="form-control"
                    value="Danh sách"></a>
        </div>
    </form>