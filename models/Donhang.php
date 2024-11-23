<?php
require_once 'connectDB.php';
require_once "../global.php";
class Donhang
{
  public $connect;
  public function __construct()
  {
    $this->connect = new connectDB();
  }
  public function getAllDataDonhang()
  {
    $sql = "SELECT * FROM `don_hang`";
    $this->connect->setQuery($sql);
    return $this->connect->loadData();
  }
  // public function insertDataDonhang($id_donhang, $id_khachhang, $tong_gia, $trang_thai, $ngay_dat_hang, $diachi_giaohang, $id_nhanvien, $loi_nhan)
  // {
  //   $sql = "INSERT INTO `don_hang` VALUES (?,?,?,?,?,?,?,?)";
  //   $this->connect->setQuery($sql);
  //   return $this->connect->loadData([$id_donhang, $id_khachhang, $tong_gia, $trang_thai, $ngay_dat_hang, $diachi_giaohang, $id_nhanvien, $loi_nhan]);
  // }
  // public function getIdDataDonhang($id_donhang)
  // {
  //   $sql = "SELECT * FROM `don_hang` WHERE id_donhang= ?";
  //   $this->connect->setQuery($sql);
  //   return $this->connect->loadData([$id_donhang], false);
  // }
  // public function updateDataDonhang($id_khachhang, $tong_gia, $trang_thai, $ngay_dat_hang, $diachi_giaohang, $id_nhanvien, $loi_nhan, $id_donhang)
  // {
  //   $sql = "UPDATE `san_pham` SET `id_khachhang`= ?,`tong_gia`= ?,`trang_thai`= ?,`ngay_dat_hang`= ?,`diachi_giaohang`= ?,`id_nhanvien`=?,`loi_nhan`=? WHERE `id_donhang`= ?";
  //   $this->connect->setQuery($sql);
  //   return $this->connect->loadData([$id_khachhang, $tong_gia, $trang_thai, $ngay_dat_hang, $diachi_giaohang, $id_nhanvien, $loi_nhan, $id_donhang], false);
  // }
}