<?php
if (!isset($_SESSION['user'])) {
    echo '<h2 class="product__main-content-wrap">Đăng nhập để bình luận về sản phẩm này !</h2>';
} else {
?>
    <form action="<?= $_SERVER["REQUEST_URI"] ?>" method="post">
        <div class="row bg-white">
            <div class="col-lg-9 col-md-12 col-sm-12 ">
                <input class="myinput_bl" id="bl" name="noi_dung" />
            </div>
            <div class="col-lg-3 col-md-12 col-sm-12 ">
                <button class="mybtn_bl">Gửi</button>
            </div>
        </div>

    </form>
<?php }
extract($_REQUEST);
if (exit_param("noi_dung")) {
    $ma_kh = $_SESSION['user']['ma_kh'];
    $ngay_tao = date_format(date_create(), 'Y-m-d');
    binh_luan_insert($noi_dung, $ma_kh, $ma_hh, $ngay_tao);
}
$binh_luan_list = binh_luan_select_by_hang_hoa($ma_hh);
foreach ($binh_luan_list as $bl) {
    echo "
    <div>
    <p><span>Mã khách hàng : $bl[ma_kh]</span>,Ngày bình luận :$bl[ngay_tao]
    <h4 class=''>Nội dung :$bl[noi_dung]</h4>
    </p>
    </div>";
}
?>