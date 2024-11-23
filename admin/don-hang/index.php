<?php 
require_once "../models/Donhang.php";
require_once "../global.php";
 class DonhangController{
  public function getAllDonhang(){
    $modelDonhang = new Donhang();
    $listDonhang = $modelDonhang->getAllDataDonhang();
    include_once 'list.php';

}
//      public function addDonhang(){
//         if(isset($_POST['btn-submit'])){
//             // var_dump($_FILES['image']);
//             // $target_dir = 'images/';
//             // $name_img =time(). $_FILES['image']['name'];
//             // $target_file = $target_dir.$name_img;
//             // move_uploaded_file( $_FILES['image']['tmp_name'], $target_file );
//             $mDon = new Donhang();
//             $check = $mDon->insertDataDonhang(null, $_POST['id_khachhang'],$_POST['tong_gia'],$_POST['trang_thai'],$_POST['ngay_dat_hang'],,$_POST['diachi_giaohang'],$_POST['id_nhanvien'],$_POST['loi_nhan']);
//             if(!$check){
//                 echo 'Thêm thành công';

//      }
//  }
//    include_once '/add.php';
//  }
//      public function editDataBinhluan(){
//        if(isset($_GET['id_bl'])){
//       $mBin = new Binhluan();
//       $cBin = $mBin->getIdDataBinhluan($_GET['id_bl']);
//       if(isset($_POST['btn-submit'])){
//         // var_dump($_FILES['image']);
//         // $target_dir = 'images/';
//         // $name_img =time(). $_FILES['image']['name'];
//         // $target_file = $target_dir.$name_img;
//         // move_uploaded_file( $_FILES['image']['tmp_name'], $target_file );
//         $mBin = new Binhluan();
//         $check = $mBin->updateDataBinhluan(  $_POST['noidung_bl'],$_POST['id_sp'],$_POST['id_khachhang'],$_POST['ngay_bl'], $_GET['id_bl'] );
//         if(!$check){
//             echo 'Sửa thành công';
// }
//  }
// }
//    include_once 'binh-luan/edit.php';
}
//  }

?>