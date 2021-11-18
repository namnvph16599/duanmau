<?php
require "../../global.php";
require_once "../../dao/hang_hoa.php";
require_once "../../dao/loai_hang.php";
require_once "../../dao/khach_hang.php";

extract($_REQUEST);

if (exit_param("btn_register")) {
    if (khach_hang_exist($ma_kh)) {
        $MESSAGE = "Tên đăng nhập này đã được sử dụng";
        $VIEW_PAGE = "tai_khoan/dang_ki.php";
    } else {
        $hinh = uploadFile('hinh', $PATH_IMG . '/');
        $hinh = strlen($hinh) > 0 ? $hinh : 'avatar.jpg';

        khach_hang_insert($ma_kh, $ten_kh, $mat_khau2, $hinh, $email, $vai_tro, $kich_hoat);
        $MESSAGE = "Đăng kí thành công! Mời bạn đăng nhập";
        $VIEW_PAGE = "tai_khoan/dang_nhap.php";
    }
} else {
    $MESSAGE = "Đăng kí thất bại";
    $VIEW_PAGE = "tai_khoan/dang_ki.php";
}

require "../layout.php";
