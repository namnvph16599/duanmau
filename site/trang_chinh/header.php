<!-- header top -->
<div class="header__top">
    <div class="container">
        <section class="row flex">
            <div class="col-lg-5 col-md-0 col-sm-0 heade__top-left">
                <a href="<?= $SITE_URL ?>/trang_chinh/index.php?trang_chu" class="header__nav-link">SNEAKERSTORE - Chuyên giày SNEAKER</a>
                <!-- <span>SNEAKERSTORE - Chuyên giày SNEAKER</span> -->
            </div>

            <nav class="col-lg-7 col-md-0 col-sm-0 header__top-right">
                <ul class="header__top-list">
                    <?php
                    if (isset($_SESSION['user'])) {
                        require_once "dang_nhap_info.php";
                    } else {
                    ?>
                        <li class="header__top-item">
                            <a href="<?= $SITE_URL ?>/tai_khoan/index.php?dang_ki" class="header__top-link">Đăng ký</a>
                        </li>
                        <li class="header__top-item">
                            <a href="<?= $SITE_URL ?>/tai_khoan/index.php?dang_nhap" class="header__top-link">Đăng nhập</a>
                        </li>
                    <?php
                    }
                    ?>
                </ul>
            </nav>
        </section>
    </div>
</div>
<!--end header top -->

<!-- header bottom -->
<div class="header__bottom">
    <div class="container">
        <section class="row">
            <div class="col-lg-3 col-md-4 col-sm-12 header__logo">
                <h1 class="header__heading">
                    <a href="<?= $SITE_URL ?>/trang_chinh/index.php?trang_chu" class="header__logo-link">
                        <img src="<?= $CONTENT_URL ?>/images/logosn.jpg" alt="Logo" class="header__logo-img">
                    </a>
                </h1>
            </div>
            <!-- <div class="col-lg-6 col-md-7 col-sm-0 header__search"> -->

            <!-- form tìm kiếm sản phẩm the keyword -->
            <form action="<?= $SITE_URL ?>/hang_hoa/liet_ke.php" method="post" class="col-lg-6 col-md-7 col-sm-0 header__search">
                <input type="text" class="header__search-input" name="key" placeholder="Tìm kiếm tại đây...">
                <button type="submit" name="btnkeyword" class="header__search-btn">
                    <div class="header__search-icon-wrap">
                        <i class="fas fa-search header__search-icon"></i>
                    </div>
                </button>
            </form>
            <!-- </div> -->

            <div class="col-lg-2 col-md-0 col-sm-0 header__call">
                <div class="header__call-icon-wrap">
                    <i class="fas fa-phone-alt header__call-icon"></i>
                </div>
                <div class="header__call-info">
                    <div class="header__call-text">
                        Gọi điện tư vấn
                    </div>
                    <div class="header__call-number">
                        0376021530
                    </div>
                </div>
            </div>

            <a href="cart.html" class="col-lg-1 col-md-1 col-sm-0 header__cart">
                <div class="header__cart-icon-wrap">
                    <!-- <span class="header__notice"></span> -->
                    <i class="fas fa-shopping-cart header__nav-cart-icon"></i>
                </div>
            </a>
        </section>
    </div>
</div>
<!--end header bottom -->

<!-- header nav -->
<div class="header__nav">
    <div class="container">
        <section class="row">
            <div class="header__nav-menu-wrap col-lg-3 col-md-0 col-sm-0">
                <i class="fas fa-bars header__nav-menu-icon"></i>
                <div class="header__nav-menu-title">Danh mục sản phẩm</div>
                <nav class="menu__nav">
                    <!-- danh mục loại hàng -->
                    <ul class="menu__list">
                        <?php include "danh_muc.php" ?>
                    </ul>
                </nav>
            </div>

            <div class="header__nav col-lg-9 col-md-0 col-sm-0">
                <ul class="header__nav-list">
                    <li class="header__nav-item">
                        <a href="<?= $SITE_URL ?>/trang_chinh/index.php?trang_chu" class="header__nav-link">Trang chủ</a>
                    </li>
                    <li class="header__nav-item">
                        <a href="<?= $SITE_URL ?>/trang_chinh/index.php?gioi_thieu" class="header__nav-link">Giới thiệu</a>
                    </li>
                    <li class="header__nav-item">
                        <a href="<?= $SITE_URL ?>/trang_chinh/index.php?lien_he" class="header__nav-link">Liên hệ</a>
                    </li>
                    <li class="header__nav-item">
                        <a href="<?= $SITE_URL ?>/trang_chinh/index.php?gop_y" class="header__nav-link">Góp ý</a>
                    </li>
                    <li class="header__nav-item">
                        <a href="<?= $SITE_URL ?>/trang_chinh/index.php?hoi_dap" class="header__nav-link">Hỏi đáp</a>
                    </li>
                    <!-- <li class="header__nav-item">
                            <a href="contact.html" class="header__nav-link">Liên hệ</a>
                        </li> -->
                </ul>
            </div>
        </section>
    </div>
</div>