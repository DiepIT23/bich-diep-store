<?php
function insertSanpham($ten_sp, $don_gia, $ngay_nhap, $giam_gia, $mo_ta, $id_dm)
{
  $sql = "INSERT INTO `san_pham`(`ten_sp`, `don_gia`, `ngay_nhap`, `giam_gia`, `mo_ta`, `id_dm`) VALUES ( '$ten_sp', '$don_gia', '$ngay_nhap', '$giam_gia', '$mo_ta', '$id_dm')";
  $id_sp = pdo_execute_insert($sql);
  return $id_sp;
}

function delete_sanpham($id_sp)
{
  $sql = "DELETE FROM `san_pham` WHERE id_sp=" . $id_sp;
  pdo_execute($sql);
}

function loadall_sanpham($kewword = "", $id_dm = 0)
{
  $sql = "SELECT * FROM `san_pham` WHERE 1";


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
  $sql = "SELECT * FROM `san_pham` ORDER BY id_dm DESC";
  $list_sp = pdo_query($sql);
  return $list_sp;
}
function loadall_sanpham_banchay()
{
  $sql = "SELECT * FROM `san_pham` WHERE 1 ORDER BY so_luot_xem DESC limit 0,6";
  $list_sp = pdo_query($sql);
  return $list_sp;
}
function loadall_sanpham_gia()
{
  $sql = "SELECT * FROM `san_pham` WHERE 1 ORDER BY so_luot_xem DESC limit 0,6";
  $list_sp = pdo_query($sql);
  return $list_sp;
}
function loadone_sanpham($id_sp)
{
  $sql = "SELECT * FROM `san_pham` WHERE id_sp='$id_sp'";
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
  $sql = "SELECT * FROM `san_pham` WHERE id_dm='$id_dm' AND id_sp !='$id_sp'";
  $list_sp = pdo_query($sql);
  return $list_sp;
}
function editSanpham($id_sp, $ten_sp, $don_gia, $ngay_nhap, $giam_gia, $mo_ta, $id_dm)
{
  $sql = "UPDATE `san_pham` SET `ten_sp`='$ten_sp',`don_gia`='$don_gia',`ngay_nhap`='$ngay_nhap',`giam_gia`='$giam_gia',`mo_ta`='$mo_ta',`id_dm`='$id_dm' WHERE `id_sp`='$id_sp'";
  pdo_execute($sql);
}
function insertAnh($id_sp, $url_anh, $ngay_dang)
{
  $sql = "INSERT INTO `anh_sanpham`(`id_sp`, `url_anh`, `ngay_dang`) VALUES ('$id_sp','$url_anh','$ngay_dang')";
  pdo_execute($sql);
}

function loadSanphamById($id_sp)
{
  $sql = "SELECT * FROM san_pham WHERE id_sp = ?";
  return pdo_query_one($sql, $id_sp);
}

function loadOneAnh()
{
  $sql = "SELECT sp.id_sp, sp.ten_sp, sp.don_gia, sp.giam_gia, sp.ngay_nhap, sp.mo_ta, sp.id_dm, MIN(a.url_anh) AS hinh_anh
  FROM san_pham sp
  LEFT JOIN anh_sanpham a ON sp.id_sp = a.id_sp
  GROUP BY sp.id_sp";
  return pdo_query($sql);
}

function sp_moi()
{
  $sql = "SELECT sp.id_sp, sp.ten_sp, sp.don_gia, sp.giam_gia, sp.ngay_nhap, sp.mo_ta, sp.id_dm, MIN(a.url_anh) AS hinh_anh
  FROM san_pham sp
  LEFT JOIN anh_sanpham a ON sp.id_sp = a.id_sp
  GROUP BY sp.id_sp limit 0, 6";
  return pdo_query($sql);
}

function loadAnhBySanphamId($id_sp)
{
  $sql = "SELECT * FROM `anh_sanpham` WHERE id_sp = ?";
  return pdo_query($sql, $id_sp);
}
function listAnh($id_sp)
{
  $sql = "SELECT `url_anh` FROM `anh_sanpham` WHERE `id_sp` = $id_sp";
  return pdo_query($sql);
}
function deleteAnh($id_sp)
{
  $sql = "DELETE FROM `anh_sanpham` WHERE `id_sp` = $id_sp";
  pdo_execute($sql);
}

function sanPham_cungLoai($id_dm, $id_sp)
{
  $sql = "SELECT sp.* , MIN(a.url_anh) as hinh_anh
FROM san_pham sp
LEFT JOIN anh_sanpham a ON sp.id_sp = a.id_sp
WHERE sp.id_dm = $id_dm AND sp.id_sp <> $id_sp
GROUP BY sp.id_sp LIMIT 0, 5";
  return pdo_query($sql);
}
