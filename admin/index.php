<?php
require_once "../global.php";
include_once "menu.php";
include_once "../models/connectDB.php";
include_once "../models/Sanpham.php";
include_once "../models/Binhluan.php";
include_once "../models/Danhmuc.php";

if (isset($_GET['act']) && $_GET['act'] !== "") {
    $act = $_GET['act'];
    switch ($act) {

            // ===================== CONTROLLER DANH MỤC ===================== //

        case 'them-danhmuc':
           if(isset($_POST["Themmoi"])){
            $ten_loai = $_POST["ten_loai"];
            // insertDataDanhmuc($ten_loai);

           }
            break;

        default:
            # code...
            break;
    }
} else {
    include_once "home.php";
}
