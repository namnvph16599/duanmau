<?php

use function PHPSTORM_META\map;

require "../../global.php";
require_once "../../dao/hang_hoa.php";
require_once "../../dao/loai_hang.php";
include "../../dao/slide.php";

extract($_REQUEST);


if (exit_param("gioi_thieu", $_REQUEST)) {
    $VIEW_PAGE = "trang_chinh/gioi_thieu.php";
} else if (exit_param("lien_he", $_REQUEST)) {
    $VIEW_PAGE = "trang_chinh/lien_he.php";
} else if (exit_param("gop_y", $_REQUEST)) {
    $VIEW_PAGE = "trang_chinh/gop_y.php";
} else if (exit_param("hoi_dap", $_REQUEST)) {
    $VIEW_PAGE = "trang_chinh/hoi_dap.php";
} else {
    $dac_biet_list = hang_hoa_select_dac_biet();
    $item_all = hang_hoa_select_home();
    $slider = slider_select_All();
    $banner_home = slider_home();
    $VIEW_PAGE = "trang_chinh/trang_chu.php";
}

require "../layout.php";
