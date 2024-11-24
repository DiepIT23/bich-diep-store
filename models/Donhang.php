<?php 
function insertDonhang($id_donhang, $id_khachhang, $tong_gia, $trang_thai, $ngay_dat_hang,$diachi_giaohang) {
    $sql = "INSERT INTO don_hang(id_donhang, id_khachhang, tong_gia, trang_thai, ngay_dat_hang,diachi_giaohang) 
            VALUES('$id_donhang', '$id_khachhang', '$tong_gia', '$trang_thai', '$ngay_dat_hang', '$diachi_giaohang')";
    pdo_execute($sql);
}

function loadDonhang($id_donhang = 0) {
    $sql = "SELECT * FROM don_hang WHERE 1";
    if ($id_donhang > 0) {
        $sql .= " AND id_donhang = '$id_donhang'";
    } else {
        $sql .= " ORDER BY id_donhang DESC";
    }
    $don_hang = pdo_query($sql);
    return $don_hang;
}

// function deleteDonhang($id_donhang) {
//     $sql = "DELETE FROM don_hang WHERE id_donhang = " . $id_donhang;
//     pdo_execute($sql);
// }
function updateTrangthaiDonhang($id_donhang, $trang_thai) {
    $sql = "UPDATE don_hang SET trang_thai = '$trang_thai' WHERE id_donhang = '$id_donhang'";
    pdo_execute($sql);
}
