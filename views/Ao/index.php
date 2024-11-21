<?php
include_once "views/Ao/menu.php";
if (isset($_GET['ao']) && $_GET['ao'] !== '') {
    $ao = $_GET['ao'];
    switch ($ao) {
        case 'ao-thun':
            include_once "views/Ao/aothun.php";
            break;
        case 'ao-somi':
            include_once "views/Ao/ao-somi.php";
            break;
        case 'ao-polo':
            include_once "views/Ao/ao-polo.php";
            break;
        case 'ao-quan-ni':
            include_once "views/Ao/ao-quan-ni.php";
            break;
        case 'ao-blazer':
            include_once "views/Ao/ao-blazer.php";
            break;
        case 'ao-khoac-jeans':
            include_once "views/Ao/ao-khoac-jeans.php";
            break;
        case 'ao-khoac-ni':
            include_once "views/Ao/ao-khoac-ni.php";
            break;
        case 'cardigan':
            include_once "views/Ao/cardigan.php";
            break;
        default:
            include_once "views/Ao/trangchu.php";
            break;
    }
} else {
    include_once "views/Ao/trangchu.php";
}
