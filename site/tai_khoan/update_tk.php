<section class="content_top"></section>
<!-- bestselling product -->
<section class="content">
    <div class="row">
        <div class="content__left col-lg-6">
            <img class="imgform" src="<?= $CONTENT_URL ?>/images/logosn.jpg" alt="">
        </div>
        <div class="content__right col-lg-6">
            <form class="myform" id="myform" action="xu_li_update_tk.php" method="post" enctype="multipart/form-data">
                <h2 class="content__right-title">Cập nhật tài khoản </h2>
                <?php
                if (strlen($MESSAGE)) {
                    echo "<h5>$MESSAGE</h5>";
                }
                ?>
                <input class="myinput" id="ma_kh" name="ma_kh" placeholder="Mã khách hàng">
                <br>
                <input class="myinput" id="ten_kh" name="ten_kh" placeholder="Tên khách hàng">
                <br>
                <input class="myinput" id="email" name="email" placeholder="Email">
                <br>
                <input class="myinput" id="hinh" type="file" name="hinh">
                <br>
                <button name="btn_update" class="mybtnlogin">Cập nhật</button>

            </form>
        </div>
    </div>

</section>
<section class="content_top"></section>