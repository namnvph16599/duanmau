<?php
require "../../global.php";
require_once "../../dao/hang_hoa.php";
require_once "../../dao/loai_hang.php";
require_once "../../dao/khach_hang.php";

$dac_biet_list = hang_hoa_select_dac_biet();
$item_all = hang_hoa_select_home();

extract($_REQUEST);

if (exit_param("btn_login")) {
    $user = khach_hang_select_by_id($ma_kh);
    if ($user) {
        if ($user['mat_khau'] == $mat_khau) {
            $MESSAGE = "Đăng nhập thành công";
            if (exit_param("ghi_nho")) {
                add_cookie("ma_kh", $ma_kh, 30);
                add_cookie("mat_khau", $mat_khau, 30);
            } else {
                delete_cookie("ma_kh");
                delete_cookie("mat_khau");
            }
            //ghi vào session để ktra
            $_SESSION['user'] = $user;
            if (isset($_SESSION['request_url'])) {
                header('Location: ' . $_SESSION['request_url']);
            }
            // $VIEW_PAGE = "tai_khoan/succes.php";
            header('location:' . $SITE_URL . '/trang_chinh/index.php?trang_chu');
        } else {
            $MESSAGE = "Đăng nhập thất bại ! Sai mật khẩu";
            $VIEW_PAGE = "tai_khoan/dang_nhap_form.php";
        }
    } else {
        $MESSAGE = "Sai mã đăng nhập";
        $VIEW_PAGE = "tai_khoan/dang_nhap_form.php";
    }
} else {
    if (exit_param("btn_logoff")) {
        session_unset();
    }
    $ma_kh = get_cookie("ma_kh");
    $mat_khau = get_cookie("mat_khau");
    $VIEW_PAGE = "tai_khoan/dang_nhap_form.php";
}


require "../layout.php";
