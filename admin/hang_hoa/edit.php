<form action="index.php" id="form_hang_hoa" method="post" enctype="multipart/form-data">
    <div class="row">
        <div class="col">
            <div class="form-group">
                <label for="">Mã hàng hóa</label>
                <input class="form-control" type="text" name="ma_hh" value="<?= $ma_hh ?>" readonly placeholder="auto number">
            </div>
        </div>
        <div class="col">
            <div class="form-group">
                <label for="">Tên hàng hóa</label>
                <input class="form-control" type="text" name="ten_hh" value="<?= $ten_hh ?>" placeholder="tên hàng">
            </div>
        </div>
        <div class="col">
            <div class="form-group">
                <label for="">Đơn giá</label>
                <input class="form-control" type="number" name="gia" value="<?= $gia ?>" min="0" value="0">
            </div>
        </div>
        <div class="col">
            <div class="form-group">
                <label for="">Loại hàng</label>
                <select class="form-control" name="ma_loai" id="">
                    <?php foreach($loai_hang as $loai): ?>
                        <option value="<?=$loai['ma_loai']?>"><?=$loai['ten_loai']?></option>
                    <?php endforeach; ?>
                    
                </select>
            </div>
        </div>
        <div class="col">
            <div class="form-group">
                <label for="">Hàng đặc biệt</label>
                <div class="form-special">
                    <input type="radio" name="dac_biet" value="1"> Đặc biệt
                    <input type="radio" name="dac_biet" value="0" checked> Bình thường
                </div>
            </div>
        </div>
        <div class="col">
            <div class="form-group">
                <label for="">Hình</label>
                <input type="file" name="hinh" placeholder="">
            </div>
        </div>
        <div class="col">
            <div class="form-group">
                <label for="">Giảm giá</label>
                <input class="form-control" type="number" name="giam_gia" value="<?= $giam_gia ?>" placeholder="Theo phần trăm">
            </div>
        </div>
        <div class="full">
            <div class="form-group">
                <label for="">Mô tả</label>
                <textarea name="mo_ta" value="<?= $mo_ta ?>"></textarea>
            </div>
        </div>

    </div>
    <button class="btn" type="submit" name="btn_update">Sửa</button>
    <button class="btn"><a href="<?= $ADMIN_URL ?>/hang_hoa/index.php">Danh sách</a></button>

</form>