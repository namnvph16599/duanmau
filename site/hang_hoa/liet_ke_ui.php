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
                        <?= include "../trang_chinh/top10.php" ?>
                    </div>
                </nav>
            </aside>

            <article class="product__content col-lg-9 col-md-12 col-sm-12">
                <nav class="row">
                    <ul class="product__list hide-on-mobile">
                        <h2 class="product__link">Tìm sản phẩm</h2>
                    </ul>
                </nav>
                <div class="row product__panel">
                    <?php
                    foreach ($items as $item) {
                        extract($item)
                    ?>
                        <div class='product__panel-item col-lg-3 col-md-4 col-sm-6'>
                            <div class='product__panel-item-wrap'>
                                <div class='product__panel-img-wrap'>
                                    <img src="<?= $CONTENT_URL ?>/images/<?= $item['hinh'] ?>" alt="Ảnh giày" class="product__panel-img">
                                </div>
                                <h3 class='product__panel-heading'>
                                    <a href='../hang_hoa/chi_tiet.php?ma_hh=<?= $item['ma_hh'] ?>' class='product__panel-link'><?= $item['ten_hh'] ?></a>
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