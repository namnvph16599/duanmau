<section class="content_top"></section>
<!-- bestselling product -->
<section class="content_register">
    <div class="row">
        <div class="content__left col-lg-6">
            <img class="imgform" src="<?= $CONTENT_URL ?>/images/logosn.jpg" alt="">
        </div>
        <div class="content__right col-lg-6">
            <form class="myform_register" id="myform" action="xu_li_dang_ki.php" method="post" enctype="multipart/form-data">
                <h2 class="content__right-title">Đăng kí</h2>
                <?php
                if (strlen($MESSAGE)) {
                    echo "<h5>$MESSAGE</h5>";
                }
                ?>
                <input class="myinput" id="ma_kh" name="ma_kh" value="" placeholder="Tên đăng nhập">
                <br>
                <input class="myinput" id="ten_kh" name="ten_kh" type="text" value="" placeholder="Họ và tên">
                <br>
                <input class="myinput" id="mat_khau2" name="mat_khau2" type="password" value="" placeholder="Mật khẩu">
                <br>
                <input class="myinput" id="mat_khau3" name="mat_khau3" type="password" value="" placeholder="Xác nhận mật khẩu">
                <br>
                <input class="myinput" id="hinh" name="hinh" type="file" value="" placeholder="">
                <br>
                <input class="myinput" id="email" name="email" type="email" value="" placeholder="Địa chỉ Email">
                <br>
                <button name="btn_register" class="mybtnlogin">Đăng kí</button>
                <input type="hidden" name="vai_tro" value="Khách hàng">
                <input type="hidden" name="kich_hoat" value="Đã kích hoạt">
            </form>
        </div>
    </div>
</section>
<section class="content_top"></section>