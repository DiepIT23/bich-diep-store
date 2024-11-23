<?php 
require_once "../models/Binhluan.php";
require_once "../global.php";
 class BinhluanController{
  public function getAllBinhluan(){
    $modelBinhluan = new Binhluan();
    $listBinhluan = $modelBinhluan->getAllDataBinhluan();
    include_once 'binh-luan/list.php';

}
     public function addBinhluan(){
        if(isset($_POST['btn-submit'])){
            // var_dump($_FILES['image']);
            // $target_dir = 'images/';
            // $name_img =time(). $_FILES['image']['name'];
            // $target_file = $target_dir.$name_img;
            // move_uploaded_file( $_FILES['image']['tmp_name'], $target_file );
            $mBin = new Binhluan();
            $check = $mBin->insertDataBinhluan(null, $_POST['noidung_bl'],$_POST['id_sp'],$_POST['id_khachhang'],$_POST['ngay_bl']);
            if(!$check){
                echo 'Thêm thành công';

     }
 }
   include_once 'binh-luan/add.php';
 }
     public function editDataBinhluan(){
       if(isset($_GET['id_bl'])){
      $mBin = new Binhluan();
      $cBin = $mBin->getIdDataBinhluan($_GET['id_bl']);
      if(isset($_POST['btn-submit'])){
        // var_dump($_FILES['image']);
        // $target_dir = 'images/';
        // $name_img =time(). $_FILES['image']['name'];
        // $target_file = $target_dir.$name_img;
        // move_uploaded_file( $_FILES['image']['tmp_name'], $target_file );
        $mBin = new Binhluan();
        $check = $mBin->updateDataBinhluan(  $_POST['noidung_bl'],$_POST['id_sp'],$_POST['id_khachhang'],$_POST['ngay_bl'], $_GET['id_bl'] );
        if(!$check){
            echo 'Sửa thành công';
}
 }
}
   include_once 'binh-luan/edit.php';
}
 }

?>