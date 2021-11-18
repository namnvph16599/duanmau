<?php


require "../../global.php";
require_once "../../dao/hang_hoa.php";
require_once "../../dao/khach_hang.php";
require_once "../../dao/loai_hang.php";

extract($_REQUEST);


if (exit_param("dang_nhap", $_REQUEST)) {
    $VIEW_PAGE = "tai_khoan/dang_nhap.php";
} else if (exit_param("dang_ki", $_REQUEST)) {
    $VIEW_PAGE = "tai_khoan/dang_ki.php";
} else if (exit_param("quen_mk", $_REQUEST)) {
    $VIEW_PAGE = "tai_khoan/quen_mk.php";
} else if (exit_param("doi_mk", $_REQUEST)) {
    $VIEW_PAGE = "tai_khoan/doi_mk.php";
} else if (exit_param("update_tk", $_REQUEST)) {
    $VIEW_PAGE = "tai_khoan/update_tk.php";
}

require "../layout.php";
