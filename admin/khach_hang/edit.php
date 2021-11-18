<form action="index.php" method="post" enctype="multipart/form-data">
    <div class="row">
        <div class="col">
            <div class="form-group">
                <label for="">Mã khách hàng</label>
                <input class="form-control" type="text" value="<?= $ma_kh ?>" name="ma_kh" placeholder="Tên đăng nhập">
            </div>
        </div>
        <div class="col">
            <div class="form-group">
                <label for="">Tên khách hàng</label>
                <input class="form-control" type="text" value="<?= $ten_kh ?>" name="ten_kh" placeholder="">
            </div>
        </div>
        <div class="full">
            <div class="form-group">
                <label for="">Mật khẩu</label>
                <input class="form-control" type="text" value="<?= $mat_khau ?>" name="mat_khau"></input type="text" class="form">
            </div>
        </div>
        <div class="col">
            <div class="form-group">
                <label for="">Hình</label>
                <input class="form-control" type="file" name="hinh" placeholder="">
            </div>
        </div>
        <div class="col">
            <div class="form-group">
                <label for="">Email</label>
                <input class="form-control" type="email" value="<?= $email ?>" name="email" placeholder="Địa chỉ email">
            </div>
        </div>


        <div class="col">
            <div class="form-group">
                <label for="">Vai trò</label>
                <input type="radio" name="vai_tro" value="Admin" placeholder="Admin" checked><span for="">Admin</span>
                <input type="radio" name="vai_tro" value="Khách hàng" placeholder="Khách hàng"><span for="">Khách hàng</span>
            </div>
        </div>
        <div class="col">
            <div class="form-group">
                <label for="">Kích hoạt</label>
                <input type="radio" name="kich_hoat" value="Chưa kích hoạt" placeholder="Chưa kích hoạt"><span for="">Chưa kích hoạt</span>
                <input type="radio" name="kich_hoat" value="Đã kích hoạt" placeholder="Kích hoạt" checked><span for="">Kích hoạt</span>
            </div>
        </div>

    </div>
    <button class="btn" type="submit" name="btn_update">Sửa</button>
    <button class="btn" type="reset" name="btn_update">Nhập lại</button>
    <button class="btn"><a href="<?= $ADMIN_URL ?>/khach_hang/index.php">Danh sách</a></button>

</form>