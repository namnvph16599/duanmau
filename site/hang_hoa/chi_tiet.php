<?php
require "../../global.php";
require "../../dao/hang_hoa.php";
require "../../dao/loai_hang.php";
require "../../dao/binh_luan.php";

extract($_REQUEST);

//truy vẫn theo ãm
$hang_hoa = hang_hoa_select_by_id($ma_hh);
extract($hang_hoa);

//sau khi xem tăng số lượt xem lên 1
hang_hoa_tang_so_luot_xem($ma_hh);

$VIEW_PAGE = "hang_hoa/chi_tiet_ui.php";

require "../layout.php";
