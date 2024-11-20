<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container-fluid">
        <div class="row mb-3">
            <div class="col-lg-4">
                <input type="text" class="form-control" placeholder="Tìm nhân viên theo tên, email, điện thoại">
            </div>
            <div class="col-1">
                <button type="submit" class="btn btn-light"><i class="fa fa-search" aria-hidden="true"></i></button>
            </div>
        </div>
        <div class="card">
            <div class="card-header container-fluid text-uppercase font-weight-bold bg-dark text-white">
                <div class="row">
                    <div class="col-lg-1">ID</div>
                    <div class="col-2">Tên</div>
                    <div class="col-2">Email</div>
                    <div class="col-2">SĐT</div>
                    <div class="col-2">Đơn hàng đang quản lý</div>
                    <div class="col-1">Kích hoạt</div>
                    <div class="col-1">Phân quyền quản trị</div>
                    <div class="col-1">Hành động</div>
                </div>
            </div>
            <div class="card-body">
                <a href="<?= $ADMIN_URL ?>/?act=" class="row text-dark text-decoration-none">
                    <div class="col-lg-1">ID</div>
                    <div class="col-2">Tên</div>
                    <div class="col-2">Email</div>
                    <div class="col-2">SĐT</div>
                    <div class="col-2">Đơn hàng đang quản lý</div>
                    <div class="col-1">Kích hoạt</div>
                    <div class="col-1">Phân quyền quản trị</div>
                    <div class="col-1">Hành động</div>
                </a>
            </div>
        </div>
    </div> <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>