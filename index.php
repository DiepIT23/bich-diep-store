<?php
require_once "global.php";
include_once "models/pdo.php";
include_once "models/Sanpham.php";

include_once "models/Danhmuc.php";
include_once "models/taikhoan.php";

// Hiển thị danh mục 
$list_dm = loadall_danhmuc();
$dm_ao = loadOneDM_Ao();
$dm_quan = loadOneDM_Quan();
include_once "views/header.php";



// Hiển thị sản phẩm mới
$list_sp_moi = sp_moi();

// Hiển thị sản phẩm 
$list_sp = loadall_sanpham();


if (isset($_GET['act']) && $_GET['act'] !== '') {
    $act = $_GET['act'];
    switch ($act) {

            // ======================= CONTROLLER SẢN PHẨM ======================= //

        case 'ds-sp':
            if (isset($_POST['keyword']) && $_POST['keyword'] !== "") {
                $kyw = $_POST['keyword'];
            } else {
                $kyw = "";
            }
            if (isset($_GET['id_dm']) && $_GET['id_dm'] > 0) {
                $id_dm = $_GET['id_dm'];
            } else {
                $id_dm = 0;
            }

            $list_sp = loadall_sanpham($kyw, $id_dm);
            include_once "views/ds-sp.php";
            break;
        case 'sp-chitiet':
            $listAnh = listAnh($_GET['id_sp']);
            $san_pham = loadone_sanpham($_GET['id_sp']);
            extract($san_pham);
            $sp_cungloai = sanPham_cungLoai($id_dm, $_GET['id_sp']);
            include_once "views/spchitiet.php";
            break;
        case 'thanhtoan':
            include_once 'views/thanhtoan.php';
            break;
        case 'giohang':
            include_once "views/giohang.php";
            break;

            // ======================= CONTROLLER TÀI KHOẢN ======================= //

        case 'dangnhap':
            include_once "views/taikhoan/dang-nhap.php";
            break;
        case 'dangky':
            include_once "views/taikhoan/dang-ky.php";
            break;
        // case 'edit-tk':
        //     if (isset($_POST["capnhat"])) {
        //         $ten_user = $_POST["ten_user"];
        //         $email = $_POST["email"];
        //         $ten_dang_nhap = $_POST["ten_dang_nhap"];
        //         $mat_khau = $_POST["mat_khau"];
        //         $hinh_anh = $_POST["hinh_anh"];
        //         $dia_chi = $_POST["dia_chi"];
        //         $sdt = $_POST["sdt"];

        //         update_taikhoan($id_user, $ten_user, $email, $ten_dang_nhap, $mat_khau, $hinh_anh, $dia_chi, $sdt);
        //         $_SESSION["ten_dang_nhap"] =  check_user($ten_dang_nhap, $mat_khau);
        //         header("location:$ROOT_URL/");
        //         exit;
        //     }
        //     include_once "views/taikhoan/edit-tk.php";
        //     break;
        // case 'quenmk':
        //     if (isset($_POST["guimk"])) {
        //         $email = $_POST["email"];
        //         $checkemail = checkemail($email);
        //         if (is_array($checkemail)) {
        //             $thongbao = "Mật khẩu của bạn là : " . $checkemail["mat_khau"];
        //         } else {
        //             $thongbao = "Email này không tồn tại";
        //         }
        //     }
        //     include_once "views/taikhoan/quenmk.php";
        //     break;
       



        case 'lienhe':
            include_once "views/lienhe.php";
            break;
        case 'gioithieu':
            include_once "views/gioithieu.php";
            break;
        default:
            include_once "views/trangchu.php";
            break;
    }
} else {
    include_once "views/trangchu.php";
}
include_once "views/timkiem.php";
include_once "views/footer.php";
