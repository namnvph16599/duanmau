<section class="content_top"></section>
<!-- bestselling product -->
<section class="content">
    <div class="row">
        <div class="content__left col-lg-6">
            <img class="imgform" src="<?= $CONTENT_URL ?>/images/logosn.jpg" alt="">
        </div>
        <div class="content__right col-lg-6">
            <form class="myform" id="myform" action="xu_li_doi_mk.php" method="post">
                <h2 class="content__right-title">Đổi mật khẩu</h2>
                <?php
                if (strlen($MESSAGE)) {
                    echo "<h5>$MESSAGE</h5>";
                }
                ?>
                <input class="myinput" id="ma_kh" name="ma_kh" placeholder="Mã khách hàng">
                <br>
                <input class="myinput" id="mat_khau" name="mat_khau" type="password" placeholder="Mật khẩu cũ ">
                <br>
                <input class="myinput" id="mat_khau2" name="mat_khau2" type="password" placeholder="Mật khẩu mới ">
                <br>
                <input class="myinput" id="mat_khau3" name="mat_khau3" type="password" placeholder="Xác nhận mật khẩu mới ">
                <br>
                <button name="btn_change" class="mybtnlogin">Đổi mật khẩu</button>
            </form>
        </div>
    </div>

</section>
<section class="content_top"></section>