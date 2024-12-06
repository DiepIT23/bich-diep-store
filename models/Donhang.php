<?php

function insertDonhang($id_donhang, $id_khachhang, $tong_gia, $trang_thai, $ngay_dat_hang, $diachi_giaohang)
{
    $sql = "INSERT INTO don_hang (id_donhang, id_khachhang, tong_gia, trang_thai, ngay_dat_hang, diachi_giaohang) 
            VALUES ('$id_donhang', '$id_khachhang', '$tong_gia', '$trang_thai', '$ngay_dat_hang', '$diachi_giaohang')";
    pdo_execute($sql);
}

function loadDonhang($id_donhang = 0)
{
    $sql = "SELECT tk.ten_user, tk.email, tk.sdt, dh.tong_gia, dh.trang_thai, dh.diachi_giaohang, dh.ngay_dat_hang, dh.id_donhang
    FROM don_hang dh
    JOIN tai_khoan tk ON tk.id_user = dh.id_khachhang
    JOIN chi_tiet_don_hang ct ON ct.id_donhang = dh.id_donhang
    WHERE 1";
    if ($id_donhang > 0) {
        $sql .= " AND id_donhang = '$id_donhang'";
    } else {
        $sql .= " ORDER BY id_donhang DESC";
    }
    return pdo_query($sql);
}

function updateTrangthaiDonhang($id_donhang, $trang_thai)
{
    $sql = "UPDATE don_hang SET trang_thai = '$trang_thai' WHERE id_donhang = '$id_donhang'";
    pdo_execute($sql);
}


function getDonHangByKhachHang($id_khachhang)
{
    global $pdo;
    $sql = "SELECT * FROM don_hang WHERE id_khachhang = :id_khachhang ORDER BY ngay_dat_hang DESC";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['id_khachhang' => $id_khachhang]);
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}





function getChiTietDonHang($id_donhang)
{
    global $pdo;
    $sql = "SELECT 
                ctdh.*, 
                sp.ten_sp, 
                sp.hinh_anh 
            FROM chitietdonhang ctdh
            JOIN sanpham sp ON ctdh.id_sp = sp.id_sp
            WHERE ctdh.id_donhang = :id_donhang";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['id_donhang' => $id_donhang]);
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function thongKeDonHang($ngay_dat_hang)
{
    $sql = "SELECT 
                ngay_dat_hang,
                COUNT(*) AS tong_don,
                SUM(tong_gia) AS doanh_thu
            FROM don_hang
            WHERE trang_thai = 'Đã hoàn thành'
              AND ngay_dat_hang = '$ngay_dat_hang'
            GROUP BY ngay_dat_hang";
    return pdo_query($sql);
}