<?php
require_once "global.php";
include_once "models/pdo.php";
include_once "views/header.php";
include_once "models/Sanpham.php";
include_once "views/taikhoan.php";

if (isset($_GET['act']) && $_GET['act'] !== '') {
    $act = $_GET['act'];
    switch ($act) {

            // ======================= CONTROLLER SẢN PHẨM ======================= //

        case 'ao':
            include_once "views/Ao/index.php";
            break;
        case 'quan':
            include_once "views/Quan/index.php";
            break;
        case 'ds-sp':
            // Lấy từ khóa tìm kiếm 
            $searchQuery = isset($_GET['q']) ? trim($_GET['q']) : '';
            $products = [];
            include_once "views/ds-sp.php";
            break;
        case 'sp-chitiet':
            include_once "views/spchitiet.php";
            break;
        case 'thanhtoan':
            include_once 'views/thanhtoan.php';
            break;
        case 'giohang':
            include_once "views/giohang.php";
            break;

            // ======================= CONTROLLER TÀI KHOẢN ======================= //

        case 'dangnhap':
            include_once "views/taikhoan/dang-nhap.php";
            break;
        case 'dangky':
            include_once "views/taikhoan/dang-ky.php";
            break;
        case 'edit-tk':
            include_once "views/taikhoan/edit-tk.php";
            break;
        case 'quenmk':
            include_once "views/taikhoan/quenmk.php";
            break;
       



        case 'lienhe':
            include_once "views/lienhe.php";
            break;
        case 'gioithieu':
            include_once "views/gioithieu.php";
            break;
        default:
            include_once "views/trangchu.php";
            break;
    }
} else {
    include_once "views/trangchu.php";
}
include_once "views/timkiem.php";
include_once "views/footer.php";
