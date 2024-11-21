<?php
require_once 'models/ConnectDB.php';
class Danhmuc
{
  public $connect;
  public function __construct()
  {
    $this->connect = new ConnectDB();
  }
  public function getAllDataDanhmuc()
  {
    $sql = 'SELECT * FROM `danh_muc`';
    $this->connect->setQuery($sql);
    return $this->connect->loadData();
  }
  public function insertDataDanhmuc($id_dm, $ten_dm, $phan_loai)
  {
    $sql = 'INSERT INTO `danh_muc` VALUES (?,?,?)';
    $this->connect->setQuery($sql);
    return $this->connect->loadData([$id_dm, $ten_dm, $phan_loai]);
  }
  public function getIdDataDanhmuc($id_dm)
  {
    $sql = 'SELECT * FROM `danh_muc` WHERE id_dm= ?';
    $this->connect->setQuery($sql);
    return $this->connect->loadData([$id_dm], false);
  }
  public function updateDataDanhmuc($ten_dm, $phan_loai, $id_dm)
  {
    $sql = 'UPDATE `danh_muc` SET `ten_dm`= ?,`phan_loai`= ? WHERE `id_dm`= ?';
    $this->connect->setQuery($sql);
    return $this->connect->loadData([$ten_dm, $phan_loai, $id_dm], false);
  }
}
