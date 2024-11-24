<?php
function loadall_taikhoan() {
    $sql = "SELECT * FROM tai_khoan";
    return pdo_query($sql);
}

function loadone_taikhoan($id_user) {
    $sql = "SELECT * FROM tai_khoan WHERE id_user = ?";
    return pdo_query_one($sql, [$id_user]);
}

function insert_taikhoan($ten_user, $email, $ten_dang_nhap, $mat_khau,  $dia_chi, $sdt) {
    $sql = "INSERT INTO `tai_khoan`( `ten_user`, `email`, `ten_dang_nhap`, `mat_khau`,  `dia_chi`, `sdt`) 
    VALUES ('$ten_user','$email','$ten_dang_nhap','$mat_khau','$dia_chi','$sdt')";
    pdo_execute($sql);
}

function check_user($ten_dang_nhap, $mat_khau)
{
    $sql = "SELECT * FROM tai_khoan WHERE user='$ten_dang_nhap' AND pass ='$mat_khau'";
    $sp = pdo_query_one($sql);
    return $sp;
}

function checkemail($email) {
    $sql = "SELECT * FROM tai_khoan WHERE email = ?";
    return pdo_query_one($sql, [$email]);
}

function update_taikhoan($id_user, $ten_user, $email, $ten_dang_nhap, $mat_khau, $hinh_anh, $dia_chi, $sdt, $vai_tro) {
    $sql = "UPDATE taikhoan SET 
            ten_user = ?, email = ?, ten_dang_nhap = ?, mat_khau = ?, 
            hinh_anh = ?, dia_chi = ?, sdt = ?, vai_tro = ? 
            WHERE id_user = ?";
    pdo_execute($sql, [$ten_user, $email, $ten_dang_nhap, $mat_khau, $hinh_anh, $dia_chi, $sdt, $vai_tro, $id_user]);
}

function update_password($id_user, $mat_khau) {
    $sql = "UPDATE taikhoan SET mat_khau = ? WHERE id_user = ?";
    pdo_execute($sql, [$mat_khau, $id_user]);
}

function delete_taikhoan($id_user) {
    $sql = "DELETE FROM tai_khoan WHERE id_user = ?";
    pdo_execute($sql, [$id_user]);
}
?>
ư