<!-- danh mục loại hàng & banner -->
<section class="menu-slide">
    <div class="container">
        <div class="row">
            <div class="slider col-lg-12 col-md-12 col-sm-12">
                <div class="row">
                    <div class="slide__left col-lg-8 col-md-12 col-sm-12">
                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="3000">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="<?= $IMAGE_URL ?>/<?= $banner_home['hinh'] ?>" class="d-block w-100" alt="...">
                                </div>
                                <?php foreach ($slider as $key => $slide) { ?>
                                    <div class="carousel-item ">
                                        <img src="<?= $IMAGE_URL ?>/<?= $slide['hinh']   ?>" class="d-block w-100" alt="...">
                                    </div>
                                <?php } ?>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                        <div class="slide__left-bottom">
                            <div class="slide__left-botom-one">
                                <img src="<?= $CONTENT_URL ?>/images/banner4.jpg" class="slide__left-bottom-one-img">
                            </div>
                            <div class="slide__left-bottom-two">
                                <img src="<?= $CONTENT_URL ?>/images/banner5.jpg" class="slide__left-bottom-tow-img">
                            </div>
                        </div>
                    </div>

                    <div class="slide__right col-lg-4 col-md-0 col-sm-0">
                        <img src="<?= $CONTENT_URL ?>/images/news2.jpg" class="slide__right-img">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- top 10 sản phẩm yêu thích -->
<section class="product">
    <div class="container">
        <div class="row">
            <!-- top 10 sản phẩm nhiều lượt xem nhất -->
            <aside class="product__sidebar col-lg-3 col-md-0 col-sm-12">
                <div class="product__sidebar-heading">
                    <div class=""></div>
                    <h2 class="product__sidebar-title">
                        Top 10 sản phẩm xem nhiều nhất
                    </h2>
                </div>
                <nav class="product__sidebar-list">
                    <div class="row">
                        <?= include_once "top10.php" ?>
                    </div>
                </nav>
            </aside>

            <article class="product__content col-lg-9 col-md-12 col-sm-12">
                <nav class="row">
                    <ul class="product__list hide-on-mobile">
                        <h2 class="product__link">Top các sản phẩm đặt biệt</h2>
                    </ul>
                </nav>
                <div class="row product__panel">
                    <?php
                    foreach ($dac_biet_list as $item) {
                    ?>
                        <div class='product__panel-item col-lg-3 col-md-4 col-sm-6'>
                            <div class='product__panel-item-wrap'>
                                <div class='product__panel-img-wrap'>
                                    <img src='<?= $CONTENT_URL ?>/images/<?= $item['hinh'] ?>' alt='Ảnh giày' class='product__panel-img' href="">
                                </div>
                                <h3 class='product__panel-heading'>
                                    <a href='<?= $SITE_URL ?>/hang_hoa/chi_tiet.php?ma_hh=<?= $item['ma_hh'] ?>' class='product__panel-link'><?= $item['ten_hh'] ?></a>
                                </h3>
                                <div class='product__panel-price'>
                                    <span class='product__panel-price-current'>
                                        <?= number_format($item['gia']) . 'VNĐ' ?>
                                    </span>
                                </div>
                            </div>
                        </div>
                    <?php
                    }
                    ?>
            </article>
        </div>
    </div>
</section>
<!--end top 10 sản phẩm yêu thích -->

<!-- sản phamr trang chủ -->
<section class="bestselling">
    <div class="container">
        <div class="row">
            <div class="bestselling__heading-wrap">
                <div class="bestselling__heading">Các sản phẩm mới về</div>
            </div>
        </div>

        <section class="row">
            <?php foreach ($item_all as $item) { ?>
                <div class="bestselling__product col-lg-4 col-md-6 col-sm-12">
                    <div class="bestselling__product-img-box">
                        <img src="<?= $CONTENT_URL ?>/images/<?= $item['hinh'] ?>" alt="Hình ảnh giày" class="bestselling__product-img">
                    </div>
                    <div class="bestselling__product-text">
                        <h3 class="bestselling__product-title">
                            <a href="<?= $SITE_URL ?>/hang_hoa/chi_tiet.php?ma_hh=<?= $item['ma_hh'] ?>" class="bestselling__product-link"><?= $item['ten_hh'] ?></a>
                        </h3>
                        <span class="bestselling__product-price">
                            <?= number_format($item['gia']) . "VNĐ" ?>
                        </span>

                        <div class="bestselling__product-btn-wrap">
                            <a href="<?= $SITE_URL ?>/hang_hoa/chi_tiet.php?ma_hh=<?= $item['ma_hh'] ?>" class="bestselling__product-btn">Xem hàng</a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </section>
    </div>
</section>