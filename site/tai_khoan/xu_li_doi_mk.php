<?php
require "../../global.php";
require_once "../../dao/hang_hoa.php";
require_once "../../dao/loai_hang.php";
require_once "../../dao/khach_hang.php";

extract($_REQUEST);

if (exit_param("btn_change")) {
    if ($mat_khau2 != $mat_khau3) {
        $MESSAGE = "Xác nhận mật khẩu mới không đúng !";
    } else {
        $user = khach_hang_select_by_id($ma_kh);
        if ($user) {
            if ($user['mat_khau'] == $mat_khau) {
                try {
                    khach_hang_change_password($mat_khau2, $ma_kh);
                    $MESSAGE = "Đổi mật khẩu thành công";
                } catch (Exception $exc) {
                    $MESSAGE = "Đổi mật khẩu thất bại";
                }
            } else {
                $MESSAGE = "Sai mật khẩu cũ";
            }
        } else {
            $MESSAGE = "Sai mã khách hàng";
        }
    }
}

$VIEW_PAGE = "tai_khoan/doi_mk.php";

require "../layout.php";
