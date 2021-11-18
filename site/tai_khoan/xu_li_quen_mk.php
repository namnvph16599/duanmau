<?php
require "../../global.php";
require_once "../../dao/hang_hoa.php";
require_once "../../dao/loai_hang.php";
require_once "../../dao/khach_hang.php";

extract($_REQUEST);

if (exit_param("btn_forgot")) {
    $user = khach_hang_select_by_id($ma_kh);
    if ($user) {
        if ($user['email'] != $email) {
            $MESSAGE = "Sai địa chỉ email!";
            $VIEW_PAGE = "tai_khoan/quen_mk.php";
        } else {
            $MESSAGE = "Mật khẩu của bạn là: " . $user['mat_khau'];
            $VIEW_PAGE = "tai_khoan/dang_nhap.php";
        }
    } else {
        $MESSAGE = "Sai tên đăng nhập!";
        $VIEW_PAGE = "tai_khoan/quen_mk.php";
    }
}
require "../layout.php";
