<?php
require_once "../models/san-pham.php";
class ProductController
{
    public function getAllProduct()
    {
        $modelProduct = new Product();
        $listProduct = $modelProduct->getAllDataProduct();
        include_once 'list.php';
    }
    public function addProduct()
    {
        if (isset($_POST['btn-submit'])) {
            // var_dump($_FILES['image']);
            // $target_dir = 'images/';
            // $name_img =time(). $_FILES['image']['name'];
            // $target_file = $target_dir.$name_img;
            // move_uploaded_file( $_FILES['image']['tmp_name'], $target_file );
            $mPro = new Product();
            $check = $mPro->insertDataProduct(null, $_POST['ten_sp'], $_POST['don_gia'], $_POST['ngay_nhap'], $_POST['dac_biet'], $_POST['giam_gia'], $_POST['mo_ta'], $_POST['so_luot_xem'], $_POST['ma_loai']);
            if (!$check) {
                echo 'Thêm thành công';
            }
        }
        include_once "add.php";
    }
    public function editDataProduct()
    {
        if (isset($_GET['id_sp'])) {
            $mPro = new Product();
            $cProduct = $mPro->getIdDataProduct($_GET['id_sp']);
            if (isset($_POST['btn-submit'])) {
                // var_dump($_FILES['image']);
                // $target_dir = 'images/';
                // $name_img =time(). $_FILES['image']['name'];
                // $target_file = $target_dir.$name_img;
                // move_uploaded_file( $_FILES['image']['tmp_name'], $target_file );
                $mPro = new Product();
                $check = $mPro->updateDataProduct($_POST['ten_sp'], $_POST['don_gia'], $_POST['ngay_nhap'], $_POST['dac_biet'], $_POST['giam_gia'], $_POST['mo_ta'], $_POST['so_luot_xem'], $_POST['ma_loai'], $_GET['id_sp']);
                if (!$check) {
                    echo 'Sửa thành công';
                }
            }
        }
        include_once 'edit.php';
    }
}
