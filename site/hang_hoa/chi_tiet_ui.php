<section class="product">
    <div class="container">
        <div class="row bg-white pt-4 pb-4 border-bt pc">
            <!-- thông tin sản phẩm -->
            <article class="product__main col-lg-9 col-md-12 col-sm-12">
                <div class="row">
                    <div class="product__main-img col-lg-4 col-md-4 col-sm-12">
                        <div class="product__main-img-primary">
                            <img src="<?= $CONTENT_URL ?>/images/<?= $hinh ?>">
                        </div>
                    </div>

                    <div class="product__main-info col-lg-8 col-md-8 col-sm-12">
                        <div class="product__main-info-breadcrumb">
                            Trang chủ / Sản phẩm
                        </div>

                        <a href="#" class="product__main-info-title">
                            <h2 class="product__main-info-heading">
                                <?= $ten_hh ?>
                            </h2>
                        </a>

                        <div class="product__main-info-price">
                            <span class="product__main-info-price-current">
                                Mã hàng hóa : <?= $ma_hh ?>
                            </span>
                        </div>
                        <div class="product__main-info-price">
                            <span class="product__main-info-price-current">
                                Đơn giá : <?= number_format($gia) . " VNĐ" ?>
                            </span>
                        </div>
                        <div class="product__main-info-price">
                            <span class="product__main-info-price-current">
                                Giảm giá : <?= number_format($giam_gia) . " %" ?>
                            </span>
                        </div>
                        <div class="product__main-info-price">
                            <span class="product__main-info-price-current">
                                Mô tả :<?= $mo_ta ?>
                            </span>
                        </div>
                        <!-- số lượng -->
                        <!-- <div class="product__main-info-cart">
                            <div class="product__main-info-cart-quantity">
                                <input type="button" value="-" class="product__main-info-cart-quantity-minus">
                                <input type="number" step="1" min="1" max="999" value="1" class="product__main-info-cart-quantity-total">
                                <input type="button" value="+" class="product__main-info-cart-quantity-plus">
                            </div>
                        </div> -->

                        <div class="product__main-info-contact">
                            <button type="submit" class="product__main-info-contact-btn product__main-info-contact-btn-add">
                                Mua hàng
                            </button>
                            <button type="submit" class="product__main-info-contact-btn product__main-info-contact-btn-add">
                                Thêm vào giỏ
                            </button>
                        </div>
                    </div>
                </div>

                <div class="row bg-white">
                    <div class="col-12 product__main-tab">
                        <a href="#" class="product__main-tab-link product__main-tab-link--active">
                            Bình luận
                        </a>
                    </div>

                    <div class="col-12 product__main-content-wrap">
                        <!-- <h2 class="product__main-content-heading">
                            Mũ Fullface YOHE 967 2 Kính 2019 chất chơi
                        </h2> -->
                        <?php include "binh_luan.php" ?>

                        <!-- <p>
                            <span>Mũ fullface Yohe 967 2 kính</span> là dòng mũ mang phong cách Châu Âu mạnh mẽ. Chiếc mũ này nổi bật ở chất liệu vỏ mũ, chất liệu mặt kính mũ, kiểu dáng thời trang. Tạo nên một dòng mũ bảo hiểm Yohe đậm chất chơi.
                        </p> -->
                    </div>
                </div>
            </article>
            <!-- aside 3 -->
            <aside class="product__aside col-lg-3 col-md-0 col-sm-0">
                <!-- uy tín -->
                <div class="product__aside-top">
                    <div class="product__aside-top-item">
                        <img src="../../content/images/shipper.png">
                        <div class="product__aside-top-item-text">
                            <p>
                                Giao hàng nhanh chóng
                            </p>
                            <span>
                                Chỉ trong vòng 24h
                            </span>
                        </div>
                    </div>
                    <div class="product__aside-top-item">
                        <img src="../../content/images/brand.png">
                        <div class="product__aside-top-item-text">
                            <p>
                                Sản phẩm chính hãng
                            </p>
                            <span>
                                Sản phẩm nhập khẩu 100%
                            </span>
                        </div>
                    </div>
                    <div class="product__aside-top-item">
                        <img src="../../content/images/less.png">
                        <div class="product__aside-top-item-text">
                            <p>
                                Mua hàng tiết kiệm
                            </p>
                            <span>
                                Rẻ hơn từ 10% đến 30%
                            </span>
                        </div>
                    </div>
                </div>
                <!-- top 10 -->
                <div class="product__sidebar-heading">
                    <h2 class="product__sidebar-title">
                        Top 10 sản phẩm xem nhiều nhất
                    </h2>
                </div>
                <nav class="product__sidebar-list">
                    <div class="row">
                        <?= include_once "../trang_chinh/top10.php" ?>
                    </div>
                </nav>
        </div>
        </aside>


        <!-- hàng cùng loại-->
        <section class="product__love col-12 mt-4">
            <div class="row bg-white">
                <div class="col-lg-12 col-md-12 col-sm-12 product__love-title">
                    <h2 class="product__love-heading">
                        Sản phẩm tương tự
                    </h2>
                </div>
            </div>
            <div class="row bg-white">
                <?php $hh_cung_loai = hang_hoa_select_tuong_tu($ma_loai,$ma_hh);
                foreach ($hh_cung_loai as $hh) {
                ?>
                    <div class="product__panel-item col-lg-2 col-md-3 col-sm-6">
                        <div class="product__panel-img-wrap">
                            <img src="<?= $CONTENT_URL ?>/images/<?= $hh['hinh'] ?>" alt="" class="product__panel-img">
                        </div>
                        <h3 class="product__panel-heading">
                            <a href="<?= $SITE_URL ?>/hang_hoa/chi_tiet.php?ma_hh=<?= $hh['ma_hh'] ?>" class="product__panel-link"><?= $hh['ten_hh'] ?></a>
                        </h3>
                        <div class="product__panel-price">
                            <span class="product__panel-price-old product__panel-price-old-hide">
                                <?= number_format($hh['gia']) ?>
                            </span>
                            <span class="product__panel-price-current">
                                <?= number_format($hh['gia']) . "VNĐ" ?>
                            </span>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </section>
    </div>
</section>