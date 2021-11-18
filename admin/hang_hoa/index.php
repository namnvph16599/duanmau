<?php
require_once "../../global.php";
require_once "../../dao/loai_hang.php";
require_once "../../dao/hang_hoa.php";

extract($_REQUEST);
// $arr = ['name'=>'ngocbq', 'email'=>'ngocbq@fe.edu.vn']
// extract($arr);
// $name = 'ngocbq'; $email = 'ngocbq@fe.edu.vn';
if (exit_param("btn_insert")) {
    $hinh = uploadFile('hinh', $PATH_IMG . '/');
    $hinh = strlen($hinh) > 0 ? $hinh : 'product.jpg';
    $ngay_tao = date("Y-m-d");

    hang_hoa_insert(
        $ten_hh,
        $don_gia,
        $giam_gia,
        $hinh,
        $mo_ta,
        $dac_biet,
        $ma_loai,
        $ngay_tao,
        $ngay_tao
    );

    $ds_hang_hoa = hang_hoa_select_all();
    $VIEW_PAGE = 'list.php';
}
//chuyển trang khi thêm
else if (exit_param("btn_add")) {
    $loai_hang = loai_hang_selectAll();
    $VIEW_PAGE = "add.php";
}
//chuyển trang khi sửa
else if (exit_param("btn_edit")) {
    $ma_hh = $_REQUEST['ma_hh'];
    $ma_hh_info = hang_hoa_select_by_id($ma_hh);
    extract($ma_hh_info);
    $loai_hang = loai_hang_selectAll();
    $VIEW_PAGE = "edit.php";
}
//update hàng hóa
else if (exit_param("btn_update")) {
    $hinh = uploadFile('hinh', $PATH_IMG . '/');
    $hinh = strlen($hinh) > 0 ? $hinh : 'product.jpg';
    $ngay_sua = date("Y-m-d");
    hang_hoa_update(
        $ten_hh,
        $gia,
        $giam_gia,
        $hinh,
        $mo_ta,
        $dac_biet,
        $ma_loai,
        $ngay_sua,
        $ma_hh
    );
    $ds_hang_hoa = hang_hoa_select_all();
    $VIEW_PAGE = 'list.php';
}
// xóa hàng hóa
else if (exit_param("btn_delete")) {
    if (isset($_POST['ma_hh'])) {
        $ma_hh = $_POST['ma_hh'];
    }
    hang_hoa_delete($ma_hh);
    $ds_hang_hoa = hang_hoa_select_all();
    $VIEW_PAGE = "list.php";
} else {
    $ds_hang_hoa = hang_hoa_select_all();
    $VIEW_PAGE = 'list.php';
}


include_once "../layout.php";
