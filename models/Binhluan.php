<?php
require_once 'models/ConnectDB.php';
class Binhluan
{
  public $connect;
  public function __construct()
  {
    $this->connect = new ConnectDB();
  }
  public function getAllDataBinhluan()
  {
    $sql = 'SELECT * FROM `binh_luan`';
    $this->connect->setQuery($sql);
    return $this->connect->loadData();
  }
  public function insertDataBinhluan($id_bl, $noidung_bl, $id_sp, $id_khachhang, $ngay_bl)
  {
    $sql = 'INSERT INTO `binh_luan` VALUES (?,?,?,?,?)';
    $this->connect->setQuery($sql);
    return $this->connect->loadData([$id_bl, $noidung_bl, $id_sp, $id_khachhang, $ngay_bl]);
  }
  public function getIdDataBinhluan($id_bl)
  {
    $sql = 'SELECT * FROM `binh_luan` WHERE id_bl= ?';
    $this->connect->setQuery($sql);
    return $this->connect->loadData([$id_bl], false);
  }
  public function updateDataBinhluan($noidung_bl, $id_sp, $id_khachhang, $ngay_bl, $id_bl)
  {
    $sql = 'UPDATE `binh_luan` SET `noidung_bl`= ?,`id_sp`=?,`id_khachhang`=?,`ngay_bl`=? WHERE `id_bl`= ?';
    $this->connect->setQuery($sql);
    return $this->connect->loadData([$noidung_bl, $id_sp, $id_khachhang, $ngay_bl, $id_bl], false);
  }
}
