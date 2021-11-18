<?php
require_once "../../global.php";
require_once "../../dao/binh_luan.php";
require_once "../../dao/thong_ke.php";

extract($_REQUEST);
if (exit_param("ma_hh", $_REQUEST)) {
    $items = binh_luan_select_by_hang_hoa($ma_hh);
    $VIEW_PAGE = "detail.php";
} else if (exit_param("btn_delete")) {
    if (isset($_POST['ma_bl'])) {
        $ma_bl = $_POST['ma_bl'];
    }
    binh_luan_delete($ma_bl);
    $items = thong_ke_binh_luan();
    $VIEW_PAGE = "list.php";
} else {
    $items = thong_ke_binh_luan();
    $VIEW_PAGE = "list.php";
}

require_once "../layout.php";
