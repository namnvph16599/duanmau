<?php
require "../../global.php";
require "../../dao/hang_hoa.php";
require "../../dao/loai_hang.php";

extract($_REQUEST);
if (exit_param("ma_loai")) {
    $items = hang_hoa_select_by_loai($ma_loai);
} else if (exit_param("btnkeyword")) {
    $keyword = $_POST['key'];
    $items = hang_hoa_select_keyword($keyword);
} else {
    $items = hang_hoa_select_all();
}
$VIEW_PAGE = "hang_hoa/liet_ke_ui.php";

require "../layout.php";
