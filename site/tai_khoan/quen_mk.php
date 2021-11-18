<section class="content_top"></section>
<!-- bestselling product -->
<section class="content">
    <div class="row">
        <div class="content__left col-lg-6">
            <img class="imgform" src="<?= $CONTENT_URL ?>/images/logosn.jpg" alt="">
        </div>
        <div class="content__right col-lg-6">
            <form class="myform" id="myform" action="xu_li_quen_mk.php" method="post">
                <h2 class="content__right-title">Quên mật khẩu</h2>
                <?php
                if (strlen($MESSAGE)) {
                    echo "<h5>$MESSAGE</h5>";
                }
                ?>
                <input class="myinput" id="ma_kh" name="ma_kh" placeholder="Mã khách hàng">
                <br>
                <input class="myinput" id="email" name="email" type="email" placeholder="Địa chỉ email">
                <br>
                <button name="btn_forgot" class="mybtnlogin">Tìm lại mật khẩu</button>
            </form>
        </div>
    </div>

</section>
<section class="content_top"></section>