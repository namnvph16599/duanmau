<div class="">
    <span class="quanli__text" >Xin chào : <?= $_SESSION['user']['ten_kh'] ?></span>
    <span class="quanli__text" >|<a class="quanli_link" href="<?= $SITE_URL ?>/tai_khoan/xu_li_dang_nhap.php?btn_logoff" name="btn_logoff">Đăng xuất</a></span>
    <span class="quanli__text" >|<a class="quanli_link" href="<?= $SITE_URL ?>/tai_khoan/index.php?doi_mk">Đổi mật khẩu</a></span>
    <span class="quanli__text" >|<a class="quanli_link" href="<?= $SITE_URL ?>/tai_khoan/index.php?update_tk">Cập nhật tài khoản</a></span>
    <?php
    if ($_SESSION['user']['vai_tro'] == 'Admin') {
        echo "<span class='quanli__text' >|<a class='quanli_link' href='$ADMIN_URL/trang_chinh'>Quản trị website</a></span>";
    }
    ?>
</div>