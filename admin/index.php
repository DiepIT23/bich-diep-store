<?php
require_once "../global.php";
require_once "san-pham/index.php";
include_once "menu.php";

$sp = new ProductController();

if (isset($_GET['act']) && $_GET['act'] !== '') {
    $act = $_GET['act'];
    switch ($act) {
        case 'danh-muc':
            include_once "danh-muc/list.php";
            break;
        case 'them-danhmuc':
            include_once "danh-muc/add.php";
            break;
        case 'sua-danhmuc':
            include_once "danh-muc/edit.php";
            break;
        case 'binh-luan':
            include_once "binh-luan/list.php";
            break;
        case 'chitiet-binhluan':
            include_once "binh-luan/detail.php";
            break;
        case 'don-hang':
            include_once "don-hang/list.php";
            break;
        case 'chitiet-donhang':
            include_once "don-hang/detail.php";
            break;
        case 'san-pham':
            $sp->getAllProduct();
            include_once "san-pham/list.php";
            break;
        case 'them-sanpham':
            $sp->addProduct();
            include_once "san-pham/add.php";
            break;
        case 'sua-sanpham':
            include_once "san-pham/edit.php";
            break;
        case 'nhan-vien':
            include_once "nhan-vien/list.php";
            break;
        case 'khach-hang':
            include_once "khach-hang/list.php";
            break;
        default:
            include_once "trang-chinh/home.php";
            break;
    }
} else {
    include_once "trang-chinh/home.php";
}