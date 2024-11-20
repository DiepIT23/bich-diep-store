<?php
require_once 'ConnectDB.php';
class Product
{
  public $connect;
  public function __construct()
  {
    $this->connect = new ConnectDB();
  }
  public function getAllDataProduct()
  {
    $sql = 'SELECT * FROM `bich-diep-store`';
    $this->connect->setQuery($sql);
    return $this->connect->loadData();
  }
  public function insertDataProduct($id_sp, $ten_sp, $don_gia, $ngay_nhap, $dac_biet, $giam_gia, $mo_ta, $so_luot_xem, $ma_loai)
  {
    $sql = 'INSERT INTO `bich-diep-store` VALUES (?,?,?,?,?,?,?,?,?)';
    $this->connect->setQuery($sql);
    return $this->connect->loadData([$id_sp, $ten_sp, $don_gia, $ngay_nhap, $dac_biet, $giam_gia, $mo_ta, $so_luot_xem, $ma_loai]);
  }
  public function getIdDataProduct($id_sp)
  {
    $sql = 'SELECT * FROM `bich-diep-store` WHERE id_sp= ?';
    $this->connect->setQuery($sql);
    return $this->connect->loadData([$id_sp], false);
  }
  public function updateDataProduct($ten_sp, $don_gia, $ngay_nhap, $dac_biet, $giam_gia, $mo_ta, $so_luot_xem, $ma_loai, $id_sp)
  {
    $sql = 'UPDATE `bich-diep-store` SET `ten_sp`= ?,`don_gia`= ?,`ngay_nhap`= ?,`dac_biet`= ?,`giam_gia`= ?,`mo_ta`=?,`so_luot_xem`=?,`ma_loai`=? WHERE `id_sp`= ?';
    $this->connect->setQuery($sql);
    return $this->connect->loadData([$ten_sp, $don_gia, $ngay_nhap, $dac_biet, $giam_gia, $mo_ta, $so_luot_xem, $ma_loai, $id_sp], false);
  }
}