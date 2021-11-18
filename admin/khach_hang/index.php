<?php
require "../../global.php";
require_once "../../dao/khach_hang.php";
extract($_REQUEST);
if (exit_param("btn_insert")) {

    $hinh = uploadFile('hinh', $PATH_IMG . '/');
    $hinh = strlen($hinh) > 0 ? $hinh : 'product.jpg';

    khach_hang_insert($ma_kh, $ten_kh, $mat_khau, $hinh, $email, $vai_tro, $kich_hoat);

    $ds_khach_hang = khach_hang_select_all();
    $VIEW_PAGE = "list.php";
}
//chuyern trang khi thêm
else if (exit_param("btn_add")) {
    $VIEW_PAGE = "add.php";
}
//chuyển trang khi sửa
else if (exit_param("btn_edit")) {
    $ma_kh = $_REQUEST['ma_kh'];
    $khach_hang_info = khach_hang_select_by_id($ma_kh);
    extract($khach_hang_info);
    $VIEW_PAGE = "edit.php";
}
//update
else if (exit_param("btn_update")) {
    $hinh = uploadFile('hinh', $PATH_IMG . '/');
    $hinh = strlen($hinh) > 0 ? $hinh : 'product.jpg';

    khach_hang_update(
        $ma_kh,
        $ten_kh,
        $mat_khau,
        $hinh,
        $email,
        $vai_tro,
        $kich_hoat,
        $ma_kh
    );
    $ds_khach_hang = khach_hang_select_all();
    $VIEW_PAGE = "list.php";
}
//delete
else if (exit_param("btn_delete")) {
    if (isset($_POST['ma_kh'])) {
        $ma_kh = $_POST['ma_kh'];
    }
    khach_hang_delete($ma_kh);
    $ds_khach_hang = khach_hang_select_all();
    $VIEW_PAGE = "list.php";
} else {
    $ds_khach_hang = khach_hang_select_all();
    $VIEW_PAGE = "list.php";
}
require "../layout.php";
