<?php
include_once "views/Quan/menu.php";
if (isset($_GET['quan']) && $_GET['quan'] !== '') {
    $quan = $_GET['quan'];
    switch ($quan) {
        case 'quan-au':
            include_once "views/Quan/quan-au.php";
            break;
        case 'quan-jeans':
            include_once "views/Quan/quan-jeans.php";
            break;
        case 'quan-kaki':
            include_once "views/Quan/quan-kaki.php";
            break;
        case 'quan-jogger':
            include_once "views/Quan/quan-jogger.php";
            break;
        case 'quan-short':
            include_once "views/Quan/quan-short.php";
            break;
        default:
            # code...
            break;
    }
}
