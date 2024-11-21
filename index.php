<?php
require_once "global.php";
include_once "views/header.php";

if (isset($_GET['act']) && $_GET['act'] !== '') {
    $act = $_GET['act'];
    switch ($act) {
        case 'ao':
            include_once "views/Ao/index.php";
            break;
        case 'quan':
            include_once "views/Quan/index.php";
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

include_once "views/footer.php";
