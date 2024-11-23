<?php
require_once "global.php";
include_once "views/header.php";

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
            include_once "views/ds-sp.php";
            break;
        case 'sp-chitiet':
            include_once "views/spchitiet.php";
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
