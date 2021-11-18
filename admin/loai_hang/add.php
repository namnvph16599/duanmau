<form action="index.php" method="post" enctype="multipart/form-data">
    <div class="row">
        <div class="col">
            <div class="form-group">
                <label for="">Mã loại hàng</label>
                <input class="form-control" type="text" name="ma_loai" readonly placeholder="auto number" disabled>
            </div>
        </div>
        <div class="col">
            <div class="form-group">
                <label for="">Tên loại hàng</label>
                <input class="form-control" type="text" name="ten_loai" placeholder="Tên hàng">
            </div>
        </div>
    </div>
    <button class="btn" type="submit" name="btn_insert">Thêm</button>
    <button class="btn" type="reset" name="btn_reset">Nhập lại</button>
    <button class="btn"><a href="<?= $ADMIN_URL ?>/loai_hang/index.php">Danh sách loại hàng</a></button>

</form>