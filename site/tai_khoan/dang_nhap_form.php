<section class="content_top"></section>
<!-- bestselling product -->
<section class="content">
    <div class="row">
        <div class="content__left col-lg-6">
            <img class="imgform" src="<?= $CONTENT_URL ?>/images/logosn.jpg" alt="">
        </div>
        <div class="content__right col-lg-6">
            <form class="myform" id="myform" action="xu_li_dang_nhap.php" method="post">
                <h2 class="content__right-title">Đăng nhập</h2>
                <?php
                if (strlen($MESSAGE)) {
                    echo "<h5>$MESSAGE</h5>";
                }
                ?>
                <input class="myinput" id="ma_kh" name="ma_kh" value="<?= $ma_kh ?>" placeholder="Mã khách hàng">
                <br>
                <input class="myinput" id="mat_khau" name="mat_khau" type="password" value="<?= $mat_khau ?>" placeholder="Mật khẩu">
                <br>
                <input class="input_check" name="ghi_nho" type="checkbox" checked>
                <span class="input_check-text">Ghi nhớ tài khoản?</span>
                <br>
                <button name="btn_login" class="mybtnlogin">Đăng nhập</button>
                <div class="myform_link-div">
                    <a class="myform_link-text" href="<?= $SITE_URL ?>/tai_khoan/index.php?quen_mk">Quên mật khẩu</a>
                    <a class="myform_link-text" href="<?= $SITE_URL ?>/tai_khoan/index.php?dang_ki">Đăng ký</a>
                </div>
            </form>
        </div>
    </div>

</section>
<section class="content_top"></section>
