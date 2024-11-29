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

function loadall_sanpham($keyword = "", $id_dm = 0)
{
  $sql = "SELECT sp.*, MIN(a.url_anh) AS hinh_anh
            FROM san_pham sp
            LEFT JOIN anh_sanpham a ON sp.id_sp = a.id_sp
            WHERE 1";

  if (!empty($keyword)) {
    $sql .= " AND sp.ten_sp LIKE '%" . $keyword . "%'";
  }

  if ($id_dm > 0) {
    $sql .= " AND sp.id_dm = '" . $id_dm . "'";
  }

  $sql .= " GROUP BY sp.id_sp ORDER BY sp.id_sp DESC";

  return pdo_query($sql);
}

function loadall_sanpham_banchay()
{
  $sql = "SELECT sp.*, MIN(a.url_anh) AS hinh_anh
            FROM san_pham sp
            LEFT JOIN anh_sanpham a ON sp.id_sp = a.id_sp
            WHERE 1 
            GROUP BY sp.id_sp
            ORDER BY so_luot_xem DESC limit 0,6";
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
  GROUP BY sp.id_sp
  ORDER BY sp.ngay_nhap DESC
  limit 0, 6";
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

function loadOneDM_Ao()
{
  $sql = "SELECT * FROM `danh_muc` WHERE `phan_loai` = 'Áo' limit 1";
  return pdo_query_one($sql);
}

function loadOneDM_Quan()
{
  $sql = "SELECT * FROM `danh_muc` WHERE `phan_loai` = 'Quần' limit 1";
  return pdo_query_one($sql);
}
