<?php 
 function insertDanhmuc($id_dm,$ten_loai,$phan_loai)
 {
  $sql = "INSERT INTO danh_muc(id_dm,ten_loai,phan_loai) VALUES('$id_dm','$ten_loai','$phan_loai)";
  pdo_execute($sql);
 }
 function deleteDanhmuc($id_dm)
 {
  $sql= "DELETE FROM danh_muc WHERE id_dm=" .$id_dm;
  pdo_execute($sql);
 }
 function loadall_danhmuc()
{
    $sql = "SELECT * FROM danh_muc";
    $list_dm = pdo_query($sql);
    return $list_dm;
}

function loadone_danhmuc($id_dm)
{
    $sql = "SELECT * FROM danh_muc WHERE id_dm=" . $id_dm;
    $dm = pdo_query_one($sql);
    return $dm;
}

function editDanhmuc($id_dm, $ten_dm, $phan_loai)
{
    $sql = " UPDATE danh_muc SET ten_dm='$ten_dm', phan_loai='$phan_loai' WHERE id_dm = '$id_dm' ";
    pdo_execute($sql);
}
?>
?>
