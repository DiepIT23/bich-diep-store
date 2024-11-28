<?php
require_once "../global.php";
include_once "menu.php";
include_once "../models/pdo.php";
include_once "../models/Sanpham.php";
include_once "../models/Binhluan.php";
include_once "../models/Danhmuc.php";
include_once "../models/Donhang.php";
include_once "../models/Taikhoan.php";

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
       
            if (isset($_POST["sua"]) ) {
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
            if (isset($_POST["themmoi"])) {
                $ten_sp = $_POST["ten_sp"];
                $don_gia = $_POST["don_gia"];
                $mo_ta = $_POST['mo_ta'] ?: null;
                $giam_gia = $_POST['giam_gia'] ?: 0;
                $ngay_nhap = $_POST["ngay_nhap"];
                $id_dm = $_POST["id_dm"];

                $id_sp = insertSanpham($ten_sp, $don_gia, $ngay_nhap, $giam_gia, $mo_ta, $id_dm);

                // Thêm ảnh sản phẩm

                $img_dir = "../images/";

                foreach ($_FILES['hinh_anh']['name'] as $key => $image) {
                    $fileTmpPath = $_FILES['hinh_anh']['tmp_name'][$key];
                    $fileName = time() . "_" . basename($image);
                    $targetFile = $img_dir . $fileName;

                    if (move_uploaded_file($fileTmpPath, $targetFile)) {
                        insertAnh($id_sp, $fileName, $ngay_nhap);
                    }
                }
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
            $listdanhmuc = loadall_danhmuc();
            $listsanpham = loadall_sanpham("", 0);
            include "./san-pham/list.php";
            break;

        case 'sua-sanpham':
            if (isset($_GET['id_sp']) && $_GET['id_sp'] > 0) {
                $san_pham = loadone_sanpham($_GET['id_sp']);
                $listAnh = listAnh($_GET['id_sp']);
            }
            $listdanhmuc = loadall_danhmuc();
            include "./san-pham/edit.php";
            break;
        case 'update-sanpham':
            if (isset($_POST["capnhat_sp"])) {
                $id_sp = $_POST['id_sp'];
                $ten_sp = $_POST["ten_sp"];
                $don_gia = $_POST["don_gia"];
                $mo_ta = $_POST['mo_ta'] ?: null;
                $giam_gia = $_POST['giam_gia'];
                $ngay_nhap = $_POST["ngay_nhap"];
                $id_dm = $_POST["id_dm"];

                if (isset($_FILES['hinh_anh']['name'][0]) && $_FILES['hinh_anh']['name'][0] != '') {
                    $listAnh = listAnh($id_sp);
                    foreach ($listAnh as $anh) {
                        extract($anh);
                        if (file_exists($url_anh)) {
                            unlink($url_anh);
                        }
                    }
                    deleteAnh($id_sp);
                    $img_dir = "../images/";
                    foreach ($_FILES['hinh_anh']['name'] as $key => $anh) {
                        $fileTmpPath = $_FILES['hinh_anh']['tmp_name'][$key];
                        $fileName = time() . "_" . basename($anh);
                        $targetFile = $img_dir . $fileName;

                        if (move_uploaded_file($fileTmpPath, $targetFile)) {
                            insertAnh($id_sp, $fileName, $ngay_nhap);
                        }
                    }
                }

                editSanpham($id_sp, $ten_sp, $don_gia, $ngay_nhap, $giam_gia, $mo_ta, $id_dm);
            }
            $listdanhmuc = loadall_danhmuc();
            $listsanpham = loadall_sanpham("", 0);
            include "./san-pham/list.php";
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

                    //==================== CONTROLLER TÀI KHOẢN ========================//
                    case 'list-tk':
                        // $listtaikhoan = loadall_taikhoan();
                        include "./tai-khoan/list.php";
                    break;

                    // ===================== CONTROLLER ĐƠN HÀNG ===================== //
                    case 'list-donhang':
                        $listdonhang = loadDonhang(0);
                        include "./don-hang/list.php";
                        break;

        default:
            include "home.php";
            break;
    }
} else {
    include_once "home.php";
}
include_once "footer.php";
