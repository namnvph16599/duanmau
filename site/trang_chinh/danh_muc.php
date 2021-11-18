<!-- <li class="menu__item">
    <a href="#" class="menu__link">
        Giày Jordan</a>
</li> -->
<?php
$loai_array = loai_hang_selectAll();
foreach ($loai_array as $loai) {
    $href = "$SITE_URL/hang_hoa/liet_ke.php?ma_loai=$loai[ma_loai]";
    echo  "<li class='menu__item'>
    <a href='$href' class='menu__link'>$loai[ten_loai]</a>
    </li>";
}
?>