<?php 
 function insertDanhmuc($ten_loai)
 {
  $sql = "INSERT INTO danh_muc(name) VALUES('$ten_loai')";
  pdo_execute($sql);
 }

?>
