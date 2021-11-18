<form action="index.php" method="post" enctype="multipart/form-data">
    <div class="row">
        <div class="col">
            <div class="form-group">
                <label for="">Mã slider</label>
                <input class="form-control" type="text" name="ma_slide" value="<?= $ma_slide ?>" placeholder="<?= $ma_slide ?>" readonly>
            </div>
        </div>
        <div class="col">
            <div class="form-group">
                <label for="">Tên slider</label>
                <input class="form-control" type="text" name="ten_slide" value="<?= $ten_slide ?>" placeholder="">
            </div>
        </div>
        <div class="col">
            <div class="form-group">
                <label for="">Hình</label>
                <input class="form-control" type="file" name="hinh" placeholder="">
            </div>
        </div>
    </div>
    <button class="btn" type="submit" name="btn_update">Sửa</button>
    <button class="btn" type="reset" name="btn_reset">Nhập lại</button>
    <button class="btn"><a href="<?= $ADMIN_URL ?>/slider/index.php">Danh sách loại hàng</a></button>
</form>