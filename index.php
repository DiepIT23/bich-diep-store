<?php
session_start();
ob_start();
require_once "global.php";
include_once "models/pdo.php";
include_once "models/Sanpham.php";
include_once "models/Danhmuc.php";
include_once "models/Taikhoan.php";

if (!isset($_SESSION['mycart'])) $_SESSION['mycart'] = [];
// Hiển thị danh mục 
$list_dm = loadall_danhmuc();
$dm_ao = loadOneDM_Ao();
$dm_quan = loadOneDM_Quan();
include_once "views/header.php";

// Hiển thị sản phẩm bán chạy
$list_sp_banchay = loadall_sanpham_banchay();


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

            $dssp = loadall_sanpham($kyw, $id_dm);

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
            if (isset($_POST["giohang"])) {
                $id_sp = $_POST['id_sp'];
                $ten_sp = $_POST['ten_sp'];
                $don_gia = $_POST['don_gia'];
                $hinh_anh = $_POST['hinh_anh'];
                $so_luong = 1; // Số lượng mặc định là 1

                // Lưu sản phẩm vào giỏ hàng (đảm bảo lưu đúng đường dẫn ảnh)
                $sanpham = [$id_sp, $ten_sp, $don_gia, $hinh_anh, $so_luong];
                $_SESSION['mycart'][] = $sanpham;
            }
            include_once "views/giohang.php";
            break;
        case 'delcart':
            if (isset($_GET['idcart'])) {
                $idcart = $_GET['idcart'];
                unset($_SESSION['mycart'][$idcart]); // Xóa phần tử theo chỉ số
                $_SESSION['mycart'] = array_values($_SESSION['mycart']); // Reset lại chỉ số mảng
            } else {
                $_SESSION['mycart'] = []; // Xóa toàn bộ giỏ hàng
            }
            header("Location:$ROOT_URL/?act=giohang");
            break;
        case 'add_to_cart':
            if (isset($_POST['id_sp'])) {
                // Lấy thông tin sản phẩm từ form
                $id_sp = $_POST['id_sp'];
                $ten_sp = $_POST['ten_sp'];
                $don_gia = $_POST['don_gia'];
                $hinh_anh = $_POST['hinh_anh'];
                $so_luong = isset($_POST['quantity']) ? $_POST['quantity'] : 1; // Lấy số lượng từ form

                // Kiểm tra giỏ hàng có tồn tại trong session chưa
                if (!isset($_SESSION['mycart'])) {
                    $_SESSION['mycart'] = [];
                }

                // Thêm sản phẩm vào giỏ
                $new_item = [
                    'id_sp' => $id_sp,
                    'ten_sp' => $ten_sp,
                    'don_gia' => $don_gia,
                    'hinh_anh' => $hinh_anh,
                    'so_luong' => $so_luong, // Sử dụng số lượng người dùng chọn
                ];
                // Kiểm tra nếu sản phẩm đã có trong giỏ, tăng số lượng
                $exists = false;
                foreach ($_SESSION['mycart'] as &$item) {
                    if ($item['id_sp'] == $id_sp) {
                        $item['so_luong'] += $so_luong; // Tăng số lượng nếu sản phẩm đã có trong giỏ
                        $exists = true;
                        break;
                    }
                }
                // Nếu chưa có trong giỏ, thêm mới
                if (!$exists) {
                    $_SESSION['mycart'][] = $new_item;
                }
                // Chuyển hướng trở lại giỏ hàng
                header("Location: $ROOT_URL/?act=giohang");
                exit;
            }
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
                header("Location: $ROOT_URL/?dangnhap");
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
include_once "views/footer.php";
ob_end_flush();
