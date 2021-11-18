<?php
require "../../global.php";
require_once "../../dao/hang_hoa.php";
require_once "../../dao/loai_hang.php";
require_once "../../dao/khach_hang.php";

extract($_REQUEST);

if (exit_param("btn_update")) {
    $user = khach_hang_select_by_id($_SESSION['user']['ma_kh']);
    if ($user['ma_kh'] == $ma_kh) {
        $_SESSION['user'] = khach_hang_select_by_id($ma_kh);
        $hinh = uploadFile('hinh', $PATH_IMG . '/');
        $hinh = strlen($hinh) > 0 ? $hinh : 'avatar.jpg';
        try {
            khach_hang_update_user($ten_kh, $email, $hinh, $ma_kh);
            $MESSAGE = "Cập nhật thành công";
            $_SESSION['user'] = khach_hang_select_by_id($ma_kh);
        } catch (Exception $exc) {
            $MESSAGE = "Cập nhật thất bại";
        }
    } else {
        $MESSAGE = "Sai mã khách hàng";
    }
} else {
    extract($_SESSION['user']);
}
$VIEW_PAGE = "tai_khoan/update_tk.php";
require "../layout.php";
