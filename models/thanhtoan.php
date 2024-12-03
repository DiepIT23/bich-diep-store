<!-- <?php 
function giohang(){
    global $IMAGES_URL;
    $tong = 0;
                    $i = 0;
                    // Kiểm tra nếu giỏ hàng có sản phẩm
                    if (isset($_SESSION['mycart']) && !empty($_SESSION['mycart'])) {
                        foreach ($_SESSION['mycart'] as $cart) {
                            $hinh_anh = $IMAGES_URL . "/" . $cart['hinh_anh']; // Đường dẫn ảnh
                            $ttien = $cart['so_luong'] * $cart['don_gia']; // Tính thành tiền
                            $tong += $ttien;
                            $xoasp = '<a href="index.php?act=delcart&idcart=' . $i . '"><button class="btn btn-danger btn-sm">Xóa</button></a>';
                            echo '<tr>
                                    <td><img src="' . $hinh_anh . '" alt="" class="product-img me-3" style="width:80px; height:80px;"></td>
                                    <td>' . $cart['ten_sp'] . '</td>
                                    <td>' . number_format($cart['don_gia'], 0, ',', '.') . ' VNĐ</td>
                                    <td>' . $cart['so_luong'] . '</td>
                                    <td>' . number_format($ttien, 0, ',', '.') . ' VNĐ</td>
                                    <td>' . $xoasp . '</td>
                                </tr>';
                            $i++;
                        }
                    }
                        echo'<tr>
                        <td colspan="4">Tổng đơn hàng</td>
                        <td>'.$tong.'</td>
                        </tr>';
                    }
               
?> -->
<?php
function getDonHangByKhachHang($id_khachhang) {
    global $pdo;
    $sql = "SELECT * FROM don_hang WHERE id_khachhang = :id_khachhang ORDER BY ngay_dat_hang DESC";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['id_khachhang' => $id_khachhang]);
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function getChiTietDonHang($id_donhang) {
    global $pdo;
    $sql = "SELECT ctdh.id_chitiet, ctdh.so_luong, ctdh.don_gia_sp, 
                   sp.ten_sp, sp.hinh_anh 
            FROM chitietdonhang ctdh
            JOIN sanpham sp ON ctdh.id_sp = sp.id_sp
            WHERE ctdh.id_donhang = :id_donhang";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['id_donhang' => $id_donhang]);
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

?>

