<?php
require "../../global.php";
require "../../dao/slide.php";

extract($_REQUEST);
if (exit_param("btn_insert")) {
    $hinh = uploadFile('hinh', $PATH_IMG . '/');
    $hinh = strlen($hinh) > 0 ? $hinh : 'product.jpg';
    slider_insert($ten_slide, $hinh);
    $items = slider_selectAll();
    $VIEW_PAGE = "list.php";
} else if (exit_param("btn_add")) {
    $VIEW_PAGE = "add.php";
} else if (exit_param("btn_edit")) {
    $VIEW_PAGE = "edit.php";
} else if (exit_param("btn_update")) {
    $hinh = uploadFile('hinh', $PATH_IMG . '/');
    $hinh = strlen($hinh) > 0 ? $hinh : 'product.jpg';

    slider_update($ten_slide, $hinh, $ma_slide);
    $items = slider_selectAll();
    $VIEW_PAGE = "list.php";
} else if (exit_param("btn_delete")) {
    if (isset($_POST['ma_slide'])) {
        $ma_slide = $_POST['ma_slide'];
    }

    slider_delete($ma_slide);
    $items = slider_selectAll();
    $VIEW_PAGE = "list.php";
} else {
    $items = slider_selectAll();
    $VIEW_PAGE = "list.php";
}
require "../layout.php";
