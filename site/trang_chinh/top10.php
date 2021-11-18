<?php
$hh_array = hang_hoa_select_top10();
foreach ($hh_array as $hh) {
    $href = "$SITE_URL/hang_hoa/chi_tiet.php?ma_hh=$hh[ma_hh]";
    echo "
        <div class='product__sidebar-item col-lg-6'>
            <img src='$CONTENT_URL/images/$hh[hinh]' alt='' class='product__sidebar-item-img'>
            <a href='$href' class='product__sidebar-item-name'>$hh[ten_hh]</a>
        </div>
        ";
}
