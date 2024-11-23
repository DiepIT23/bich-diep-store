<?php
require_once "../global.php";
include_once "menu.php";
include_once "../models/connectDB.php";
include_once "../models/san-pham.php";
include_once "../models/Binhluan.php";
include_once "../models/Danhmuc.php";

if (isset($_GET['act']) && $_GET['act'] !== "") {
    $act = $_GET['act'];
    switch ($act) {

            // ===================== CONTROLLER DANH MỤC ===================== //

        case 'value':
            # code...
            break;

        default:
            # code...
            break;
    }
} else {
    include_once "home.php";
}
include_once "footer.php";
