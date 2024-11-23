<?php
require_once "../global.php";
require_once "../admin/san-pham/index.php";
require_once "../admin/danh-muc/index.php";
require_once "../admin/binh-luan/index.php";
require_once "../models/Binhluan.php";
require_once "../models/Danhmuc.php";
require_once "../models/Donhang.php";
require_once "../models/Sanpham.php";
include_once "menu.php";



$cProduct = new ProductController();
$cDanh = new DanhmucController();
$cBin = new BinhluanController();

if (isset($_GET['act']) && $_GET['act'] !== '') {
    $act = $_GET['act'];
    switch ($act) {
        case 'danh-muc':
            $cDanh->getAllDanhmuc();
            include_once "./danh-muc/list.php";
            break;
        case 'them-danhmuc':
            $cDanh->addDanhmuc();
            include_once "./danh-muc/add.php";
            break;
        case 'sua-danhmuc':
            $cDanh->editDataDanhmuc();
            include_once "./danh-muc/edit.php";
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
            include_once "./san-pham/list.php";
            break;
        case 'them-sanpham':
            $cProduct->addProduct();
            include_once "./san-pham/add.php";
            break;
        case 'sua-sanpham':
            $cProduct->editDataProduct();
            include_once "./san-pham/edit.php";
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
