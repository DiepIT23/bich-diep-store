<?php
function loadall_taikhoan()
{
    $sql = "SELECT * FROM tai_khoan";
    $tk = pdo_query($sql);
    return $tk;
}

function loadone_taikhoan($id_user)
{
    $sql = "SELECT * FROM tai_khoan WHERE id_user='$id_user'";
    $tk = pdo_query($sql);
    return $tk;
}
function insert_taikhoan($ten_user, $email, $ten_dang_nhap, $mat_khau, $dia_chi, $sdt)
{
    $sql = "INSERT INTO `tai_khoan`( `ten_user`, `email`, `ten_dang_nhap`, `mat_khau`,  `dia_chi`, `sdt`) 
    VALUES ('$ten_user','$email','$ten_dang_nhap','$mat_khau','$dia_chi','$sdt')";
    pdo_execute($sql);
}
function check_user($ten_dang_nhap, $mat_khau)
{
    $sql = "SELECT * FROM tai_khoan WHERE ten_dang_nhap='$ten_dang_nhap' AND mat_khau ='$mat_khau'";
    $sp = pdo_query_one($sql);
    return $sp;
}
function checkemail($email)
{
    $sql = "SELECT * FROM tai_khoan WHERE email='$email'";
    $sp = pdo_query_one($sql);
    return $sp;
}
function update_taikhoan($id_user, $ten_user, $email, $ten_dang_nhap, $mat_khau, $hinh_anh, $dia_chi, $sdt)
{
    if ($hinh_anh != "") {
        $sql = " UPDATE tai_khoan SET ten_user='$ten_user',email='$email',ten_dang_nhap='$ten_dang_nhap',mat_khau='$mat_khau',hinh_anh='$hinh_anh' , dia_chi='$dia_chi',sdt='$sdt' WHERE id_user = " . $id_user;
    } else {
        $sql = " UPDATE tai_khoan SET ten_user='$ten_user',email='$email',ten_dang_nhap='$ten_dang_nhap',mat_khau='$mat_khau',dia_chi='$dia_chi',sdt='$sdt' WHERE id_user = " . $id_user;
    }
    pdo_execute($sql);
}
function update_mk($id, $user, $newpass)
{
    $sql = " UPDATE tai_khoan SET user='$user',pass='$newpass' WHERE id = '$id'";
    pdo_execute($sql);
}
function loadone_tk($id)
{
    $sql = "SELECT * FROM tai_khoan WHERE id='$id'";
    $taikhoan = pdo_query_one($sql);
    return $taikhoan;
}
function delete_tk($id)
{
    $sql = "DELETE FROM tai_khoan WHERE id='$id'";
    $taikhoan = pdo_query_one($sql);
    return $taikhoan;
}
