<form action="index.php" method="post">
    <button class="btn"><a href="<?= $ADMIN_URL ?>/hang_hoa/?btn_add">Thêm hàng hoá</a></button>
    <table class="table">
        <thead>
            <tr>
                <th></th>
                <th>Mã hh</th>
                <th>Ảnh</th>
                <th>Tên sản phẩm</th>
                <th>Đơn giá</th>
                <th>Lượt xem</th>
                <th>Ngày đăng</th>
                <th>Ngày sửa</th>
                <th>Xử lí</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($ds_hang_hoa as $hang_hoa) : ?>
                <tr>
                    <td><input type="checkbox" name="ma_hh[]" value="<?php echo $hang_hoa['ma_hh'] ?>" id=""></td>
                    <td><?= $hang_hoa['ma_hh'] ?></td>
                    <td>
                        <img src="<?= $IMAGE_URL . '/' . $hang_hoa['hinh'] ?>" width="123" alt="">
                    </td>
                    <td><?= $hang_hoa['ten_hh'] ?></td>
                    <td><?= number_format($hang_hoa['gia']) . "VNĐ" ?></td>
                    <td><?= $hang_hoa['luot_xem'] ?></td>
                    <td><?= $hang_hoa['ngay_tao'] ?></td>
                    <td><?= $hang_hoa['ngay_sua'] ?></td>
                    <td>
                        <button class="btn btn-default"><a href="index.php?btn_edit&ma_hh=<?= $hang_hoa['ma_hh'] ?>">Sửa</a></button>
                        <button class="btn btn-danger"><a href="index.php?btn_delete&ma_hh=<?= $hang_hoa['ma_hh'] ?>">Xóa</a></button>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="btn_fake" id="btn_all" name="btn_checkall">Chọn tất cả</div>
    <div class="btn_fake" id="btn_unall" name="btn_uncheckall">Bỏ chọn tất cả</div>
    <button class="btn" type="submit" name="btn_delete">Xóa mục đã chọn</button>
</form>

<script language="javascript">
    document.getElementById('btn_all').onclick = function() {
        var checkbox = document.getElementsByName('ma_hh[]');

        for (var i = 0; i < checkbox.length; i++) {
            checkbox[i].checked = true;
        }

    }
    document.getElementById('btn_unall').onclick = function() {
        var checkbox = document.getElementsByName('ma_hh[]');

        for (var i = 0; i < checkbox.length; i++) {
            checkbox[i].checked = false;
        }

    }
</script>