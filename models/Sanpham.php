<?php
function insertSanpham($ten_sp, $don_gia, $ngay_nhap, $mo_ta, $id_dm) {
    // Chuyển đổi ngày sang định dạng MySQL
    $date_obj = DateTime::createFromFormat('Y/m/d', $ngay_nhap);
    
    // Nếu không tạo được đối tượng ngày, báo lỗi
    if (!$date_obj) {
        throw new Exception("Ngày nhập không hợp lệ: $ngay_nhap");
    }

    // Chuyển đổi sang định dạng MySQL
    $ngay_nhap_mysql = $date_obj->format('Y-m-d');

    $sql = "INSERT INTO san_pham (ten_sp, don_gia, ngay_nhap, mo_ta, id_dm) 
            VALUES ('$ten_sp', '$don_gia', '$ngay_nhap_mysql', '$mo_ta', '$id_dm')";
    pdo_execute($sql);
}

function delete_sanpham($id_sp)
{
  $sql = "DELETE FROM san_pham WHERE id_sp=" . $id_sp;
  pdo_execute($sql);
}

function loadall_sanpham($kewword = "", $id_dm = 0)
{
  $sql = "SELECT * FROM san_pham WHERE 1";
  

  if ($kewword != "") {
    $sql .= " AND ten_sp LIKE '%" . $kewword . "%'";
   
  }
  if ($id_dm > 0) {
    $sql .= " AND id_dm = '" . $id_dm . "'";
   
  }

  $sql .= " ORDER BY id_sp DESC";
  $listsp = pdo_query($sql);
  return $listsp;
}
function loadall_sanpham_home()
{
  $sql = "SELECT * FROM san_pham ORDER BY id_dm DESC";
  $list_sp = pdo_query($sql);
  return $list_sp;
}
function loadall_sanpham_banchay()
{
  $sql = "SELECT * FROM san_pham WHERE 1 ORDER BY so_luot_xem DESC limit 0,6";
  $list_sp = pdo_query($sql);
  return $list_sp;
}
function loadall_sanpham_gia()
{
  $sql = "SELECT * FROM san_pham WHERE 1 ORDER BY so_luot_xem DESC limit 0,6";
  $list_sp = pdo_query($sql);
  return $list_sp;
}
function loadone_sanpham($id_dm)
{
  $sql = "SELECT * FROM san_pham WHERE id_dm='$id_dm'";
  $san_pham = pdo_query_one($sql);
  return $san_pham;
}
function load_ten_dm($id_danh_muc)
{
  if ($id_danh_muc > 0) {
    $sql = "SELECT * FROM danh_muc WHERE id='$id_danh_muc'";
    $dm = pdo_query_one($sql);
    extract($dm);
    return $name;
  } else {
    return "";
  }
}
function load_sanpham_cungloai($id_sp, $id_dm)
{
  $sql = "SELECT * FROM san_pham WHERE id_dm='$id_dm' AND id_sp !='$id_sp'";
  $list_sp = pdo_query($sql);
  return $list_sp;
}
function editSanpham($id_sp, $ten_sp, $don_gia, $ngay_nhap,  $mo_ta,  $id_dm)
{
  $sql = " UPDATE san_pham SET ten_sp='$ten_sp', don_gia='$don_gia',ngay_nhap='$ngay_nhap', mo_ta='$mo_ta', id_dm='$id_dm' WHERE id_sp = '$id_sp' ";
  pdo_execute($sql);
}