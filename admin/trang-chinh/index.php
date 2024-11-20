<?php
require_once "../../global.php";
$VIEW_NAME = "../trang-chinh/home.php";
require_once "../layout.php";

require_once 'models/Product.php';
require_once 'admin/trang-chinh/index.php';

$cProduct = new ProductController();
$luaChon = isset($_GET['act']) ? $_GET['act'] :'/';
switch($luaChon){
    case 'getAllProduct':
        $cProduct->getAllProduct();
        break;
     case 'addProduct':
         $cProduct->addProduct();
         break; 
    case 'editProduct':
         $cProduct->editDataProduct();
         break;
    // case 'deleteProduct':
    //     $cProduct->deleteDataProduct();
    //     break;
    default:
        $cProduct->getAllProduct();
        break;
    }
?>