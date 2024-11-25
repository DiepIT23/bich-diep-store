<?php
require_once "../global.php";
include_once "menu.php";
include_once "../models/pdo.php";
include_once "../models/Sanpham.php";
include_once "../models/Binhluan.php";
include_once "../models/Danhmuc.php";
include_once "../models/Donhang.php";

if (isset($_GET['act']) && $_GET['act'] !== "") {
    $act = $_GET['act'];
    switch ($act) {

            // ===================== CONTROLLER DANH MỤC ===================== //

        case 'them-danhmuc':
            if (isset($_POST["themmoi"])) {
                insertDanhmuc($_POST['ten_loai'], $_POST['phan_loai']);
                $thongbao = "Thêm thành công";
            }
            include "./danh-muc/add.php";
            break;
        case 'xoa-danhmuc':
            if (isset($_GET["id_dm"]) && $_GET["id_dm"] > 0) {
                echo "<p style='color:red;'>Bạn hãy xóa hết sản phẩm thuộc danh mục này!</p>";
            }
            $listdanhmuc = loadall_danhmuc();
            include "./danh-muc/list.php";
            break;
        case 'sua-danhmuc':
            if (isset($_GET["id_dm"]) && $_GET["id_dm"] > 0) {
                $dm = loadone_danhmuc($_GET["id_dm"]);
            }
            include "./danh-muc/update.php";
            break;
        case 'update-danhmuc':

            if (isset($_POST["sua"])) {
                $ten_dm = $_POST["ten_dm"];
                $phan_loai = $_POST["phan_loai"];
                $id_dm = $_POST["id_dm"];
                updateDanhmuc($id_dm, $ten_dm, $phan_loai);
                $thongbao = "Cập nhật thành công";
            }
            $listdanhmuc = loadall_danhmuc();
            include "./danh-muc/list.php";
            break;
        case 'list-danhmuc':
            $listdanhmuc = loadall_danhmuc();
            include "./danh-muc/list.php";
            break;



            // ===================== CONTROLLER SẢN PHẨM ===================== //
        case 'them-sanpham':
            if (isset($_POST["themmoi"]) && $_POST["themmoi"]) {
                $id_dm = $_POST["id_dm"];
                $ten_sp = $_POST["ten_sp"];
                $mo_ta = $_POST["mo_ta"];
                $don_gia = $_POST["don_gia"];
                $giam_gia = $_POST["giam_gia"];
                $ngay_nhap = $_POST["ngay_nhap"];
                insertSanpham($ten_sp, $don_gia, $ngay_nhap, $dac_biet, $giam_gia, $mo_ta, $so_luot_xem, $id_dm);
                $thongbao = "Thêm thành công";
            }
            $listdanhmuc = loadall_danhmuc();
            include "./san-pham/add.php";
            break;
        case 'list-sanpham':
            if (isset($_POST["listok"]) && $_POST["listok"]) {
                $kewword = $_POST["keyword"];
                $id_dm = $_POST["id_dm"];
            } else {
                $kewword = '';
                $id_dm = 0;
            }
            $listdanhmuc = loadall_danhmuc();
            $listsanpham = loadall_sanpham($kewword, $id_dm);
            include "./san-pham/list.php";
            break;
        case 'xoa-sanpham':
            if (isset($_GET["id_sp"]) && $_GET["id_sp"] > 0) {
                delete_sanpham($_GET["id_sp"]);
            }
            $listsanpham = loadall_sanpham("", 0);
            include "./san-pham/list.php";
            break;

        case 'sua-sanpham':
            if (isset($_GET['id_sp']) && $_GET['id_sp'] > 0) {
                $san_pham = loadone_sanpham($_GET['id_sp']);
            }
            $listdanhmuc = loadall_danhmuc();
            include "./san_pham/edit.php";
            break;
        case 'update-sanpham':
            if (isset($_POST["capnhat_sp"]) && $_POST["capnhat_sp"]) {
                $id_sp = $_POST["id_sp"];
                $id_dm = $_POST["id_dm"];
                $ten_sp = $_POST["ten_sp"];
                $filename = $_FILES["hinh"]["name"];
                $target_dir = "../uploads/";
                $target_file = $target_dir . basename($filename);
                if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                    //echo "File" . htmlspecialchars(basename($_FILES["hinh"]["name"])) . " đã được up load.";
                } else {
                    //echo "Lỗi up load file.";
                }
                $mo_ta = $_POST["mo_ta"];
                $don_gia = $_POST["don_gia"];
                editSanpham($id_sp, $ten_sp, $don_gia, $ngay_nhap, $dac_biet, $giam_gia, $mo_ta, $so_luot_xem, $id_dm);
                $thongbao = "Cập nhật thành công";
            }
            $listdanhmuc = loadall_danhmuc();
            $listsanpham = loadall_sanpham("", 0);
            include "./san_pham/list.php";
            break;

            //==================== CONTROLLER BÌNH LUẬN ========================//
        case 'list-bl':
            $listbinhluan = loadbl_binhluan(0);
            include "./binh-luan/list.php";
            break;
        case 'xoa-bl':
            if (isset($_GET["id_bl"]) && $_GET["id_bl"] > 0) {
                //$id = $_GET["id"];
                deleteBinhluan($_GET["id_bl"]);
            }
            $listbinhluan = loadbl_binhluan(0);
            include "./binh-luan/list.php";
            break;

            // ===================== CONTROLLER ĐƠN HÀNG ===================== //
            // case 'list-donhang':
            //     $listdonhang = loadDonhang(0);
            //     include "./don-hang/list.php";
            //     break;
        default:
            include "home.php";
            break;
    }
} else {
    include_once "home.php";
}
include_once "footer.php";
