<?php
require_once "../../global.php";
require_once "../../dao/loai_hang.php";
require_once "../../dao/binh_luan.php";
require_once "../../dao/thong_ke.php";
extract($_REQUEST);
if (exit_param("chart",$_REQUEST)) {
    $items = thong_ke_hang_hoa();
    $VIEW_PAGE = "chart.php";
} else {
    $items = thong_ke_hang_hoa();
    $VIEW_PAGE = "list.php";
}
require_once "../layout.php";
