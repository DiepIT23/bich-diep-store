<?php
session_start();
ob_start();
require_once "global.php";
include_once "models/pdo.php";
include_once "views/header.php";
include_once "models/Sanpham.php";
include_once "models/Danhmuc.php";
include_once "models/taikhoan.php";

// Hiển thị danh mục 
$list_dm = loadall_danhmuc();
include_once "views/header.php";

if (isset($_GET['act']) && $_GET['act'] !== '') {
    $act = $_GET['act'];
    switch ($act) {

            // ======================= CONTROLLER SẢN PHẨM ======================= //

        case 'ao':
            include_once "views/Ao/index.php";
            break;
        case 'quan':
            include_once "views/Quan/index.php";
            break;
        case 'ds-sp':
            // Lấy từ khóa tìm kiếm 
            $searchQuery = isset($_GET['q']) ? trim($_GET['q']) : '';
            $products = [];
            include_once "views/ds-sp.php";
            break;
        case 'sp-chitiet':
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
            if (isset($_POST["dangnhap"])) {
                $ten_dang_nhap = $_POST["ten_dang_nhap"];
                $mat_khau = $_POST["mat_khau"];
                $checkuser = check_user($ten_dang_nhap, $mat_khau);
                if (is_array($checkuser)) {
                    $_SESSION["ten_dang_nhap"] = $checkuser;
                    print_r($checkuser);
                    header("location:$ROOT_URL/");
                    exit;
                } else {
                    $thongbao = "Tài khoản không tồn tại , vui lòng kiểm tra hoặc đăng ký !";
                }
            }
            include_once "views/taikhoan/dang-nhap.php";
            break;
        case 'dangky':
            // print_r(($_POST));
            if (isset($_POST["dangky"])) {
                $ten_user = $_POST["ten_user"];
                $email = $_POST["email"];
                $ten_dang_nhap = $_POST["ten_dang_nhap"];
                $mat_khau = $_POST["mat_khau"];
                // $hinh_anh = $_POST["hinh_anh"];
                $dia_chi = $_POST["dia_chi"];
                $sdt = $_POST["sdt"];
                insert_taikhoan($ten_user, $email, $ten_dang_nhap, $mat_khau, $dia_chi, $sdt);
                $thongbao = "Đăng ký thành công . Vui lòng đăng nhập để bình luận hoặc mua hàng";
            }
            include_once "views/taikhoan/dang-ky.php";
            break;
        case "thoat":
            if (isset($_SESSION['ten_dang_nhap'])) {
                unset($_SESSION['ten_dang_nhap']);
                header("location:$ROOT_URL/");
            }
            break;
        case 'edit-tk':
            if (isset($_POST["capnhat"])) {
                $ten_user = $_POST["ten_user"];
                $email = $_POST["email"];
                $ten_dang_nhap = $_POST["ten_dang_nhap"];
                $mat_khau = $_POST["mat_khau"];
                $hinh_anh = $_POST["hinh_anh"];
                $dia_chi = $_POST["dia_chi"];
                $sdt = $_POST["sdt"];

                update_taikhoan($id_user, $ten_user, $email, $ten_dang_nhap, $mat_khau, $hinh_anh, $dia_chi, $sdt);
                $_SESSION["ten_dang_nhap"] =  check_user($ten_dang_nhap, $mat_khau);
                    header("location:$ROOT_URL/");
                    exit;
            }
            include_once "views/taikhoan/edit-tk.php";
            break;
        case 'quenmk':
            if (isset($_POST["guimk"])) {
                $email = $_POST["email"];
                $checkemail = checkemail($email);
                if (is_array($checkemail)) {
                    $thongbao = "Mật khẩu của bạn là : " . $checkemail["mat_khau"];
                } else {
                    $thongbao = "Email này không tồn tại";
                }
            }
            include_once "views/taikhoan/quenmk.php";
            break;



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
ob_end_flush();
