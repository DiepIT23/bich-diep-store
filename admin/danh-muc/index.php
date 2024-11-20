<?php 
require_once 'models/Danhmuc.php';
 class DanhmucController{
  public function getAllDanhmuc(){
    $modelDanhmuc = new Danhmuc();
    $listDanhmuc = $modelDanhmuc->getAllDataDanhmuc();
    include_once 'admin/danh-muc/list.php';

}
     public function addDanhmuc(){
        if(isset($_POST['btn-submit'])){
            // var_dump($_FILES['image']);
            // $target_dir = 'images/';
            // $name_img =time(). $_FILES['image']['name'];
            // $target_file = $target_dir.$name_img;
            // move_uploaded_file( $_FILES['image']['tmp_name'], $target_file );
            $mDan = new Danhmuc();
            $check = $mDan->insertDataDanhmuc(null, $_POST['ten_dm'],$_POST['phan_loai']);
            if(!$check){
                echo 'Thêm thành công';

     }
 }
   include_once 'admin/danh-muc/add.php';
 }
     public function editDataDanhmuc(){
       if(isset($_GET['id_dm'])){
      $mDan = new Danhmuc();
      $cDanhmuc = $mDan->getIdDataDanhmuc($_GET['id_dm']);
      if(isset($_POST['btn-submit'])){
        // var_dump($_FILES['image']);
        // $target_dir = 'images/';
        // $name_img =time(). $_FILES['image']['name'];
        // $target_file = $target_dir.$name_img;
        // move_uploaded_file( $_FILES['image']['tmp_name'], $target_file );
        $mDan = new Danhmuc();
        $check = $mDan->updateDataDanhmuc( $_POST['ten_dm'],$_POST['phan_loai'], $_GET['id_dm'] );
        if(!$check){
            echo 'Sửa thành công';
}
 }
}
   include_once 'admin/danh-muc/edit.php';
}
 }

?>