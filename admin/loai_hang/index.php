<?php
require "../../global.php";
require_once "../../dao/loai_hang.php";

extract($_REQUEST); //extract đưa tất cả mảng có key về dạng biến

if (array_key_exists('btn_insert', $_REQUEST)) {

    loai_hang_insert($ten_loai);

    $items = loai_hang_selectAll();
    $VIEW_PAGE = 'list.php';
} else if (array_key_exists('btn_add', $_REQUEST)) {
    $VIEW_PAGE = 'add.php';
} else if (exit_param('btn_delete')) {
    if (isset($_POST['ma_loai'])) {
        $maloai = $_POST['ma_loai'];
    }
    loai_hang_delete($ma_loai);
    $items = loai_hang_selectAll();
    $VIEW_PAGE = 'list.php';
} else if (exit_param('btn_edit')) {
    $ma_loai = $_REQUEST['ma_loai'];
    $loai_hang_info = loai_hang_getInfo($ma_loai);
    extract($loai_hang_info);
    $items = loai_hang_selectAll();
    $VIEW_PAGE = 'edit.php';
}
//sửa 
else if (exit_param('btn_update')) {
    $ma_loai = $_POST['ma_loai'];
    $ten_loai = $_POST['ten_loai'];

    loai_hang_update($ten_loai, $ma_loai);
    $items = loai_hang_selectAll();
    $VIEW_PAGE = 'list.php';
} else {

    $items = loai_hang_selectAll();
    $VIEW_PAGE = 'list.php';
}
require "../layout.php";
