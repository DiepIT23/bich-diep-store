<?php
$loadbl = loadbl_binhluan(0);
?>
<!doctype html>
<html lang="en">

<head>
    <title>Danh sách bình luận</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-4">
        <h1 class="text-center">Danh sách bình luận</h1>
        
        <!-- Search Form -->
        <div class="mt-4 mb-4 d-flex justify-content-between align-items-center">
            <form action="index.php?act=list-bl" method="POST" class="d-flex w-50">
                <input type="text" name="keyword" class="form-control mr-2" placeholder="Tìm kiếm bình luận...">
                <button type="submit" name="listok" class="btn btn-primary">Lọc</button>
            </form>
        </div>

        <!-- Comment List Table -->
        <div class="card">
            <div class="card-header bg-dark text-white text-uppercase font-weight-bold">
                <div class="row">
                    <div class="col-1">STT</div>
                    <div class="col-3">Sản phẩm</div>
                    <div class="col-2">Nội dung</div>
                    <div class="col-2">Khách hàng</div>
                    <div class="col-2">Ngày bình luận</div>
                    <div class="col-2 text-center">Hành động</div>
                </div>
            </div>
            <div class="card-body">
                <?php
                $stt = 1;
                foreach ($loadbl as $binhluan) {
                    extract($binhluan);
                    $xoa_bl = "index.php?act=xoa-binhluan&id_bl=" . $id_bl;

                    echo '<div class="row py-3 border-bottom align-items-center">
                            <div class="col-lg-1">' . $stt++ . '</div>
                            <div class="col-lg-3">' . $id_sp . '</div>
                            <div class="col-lg-2">' . $noidung_bl . '</div>
                            <div class="col-lg-2">' . $id_khachhang . '</div>
                            <div class="col-lg-2">' . $ngay_bl . '</div>
                            <div class="col-lg-2 text-center">
                                <a href="' . $xoa_bl . '" class="btn btn-danger btn-sm">Xóa</a>
                            </div>
                        </div>';
                }
                ?>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>
