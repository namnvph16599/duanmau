<form action="index.php" method="post" enctype="multipart/form-data">
    <div class="row">
        <div class="col">
            <div class="form-group">
                <label for="">Mã slider</label>
                <input class="form-control" type="text" name="ma_slide" readonly placeholder="auto number" disabled>
            </div>
        </div>
        <div class="col">
            <div class="form-group">
                <label for="">Tên slider</label>
                <input class="form-control" type="text" name="ten_slide" placeholder="Tên slider">
            </div>
        </div>
        <div class="col">
            <div class="form-group">
                <label for="">Hình</label>
                <input class="form-control" type="file" name="hinh" placeholder="">
            </div>
        </div>
    </div>
    <button class="btn" type="submit" name="btn_insert">Thêm</button>
    <button class="btn" type="reset" name="btn_reset">Nhập lại</button>
    <button class="btn"><a href="<?= $ADMIN_URL ?>/slider/index.php">Danh sách slider</a></button>
</form>