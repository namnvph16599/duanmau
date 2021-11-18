<form action="index.php" method="post">
    <table class="table">
        <thead>
            <tr>
                <th></th>
                <th>Nội dung</th>
                <th>Ngày bình luận</th>
                <th>Mã khách hàng</th>
                <th>Xử lí</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($items as $value) : ?>
                <tr>
                    <td><input type="checkbox" name="ma_bl[]" value="<?php echo $value['ma_bl'] ?>" id=""></td>
                    <td><?= $value['noi_dung'] ?></td>
                    <td><?= $value['ngay_tao'] ?></td>
                    <td><?= $value['ma_kh'] ?></td>
                    <td><button class="btn btn-danger"><a href="index.php?btn_delete&ma_bl=<?= $value['ma_bl'] ?> ">Xóa</a></button></td>
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
        var checkbox = document.getElementsByName('ma_bl[]');

        for (var i = 0; i < checkbox.length; i++) {
            checkbox[i].checked = true;
        }

    }
    document.getElementById('btn_unall').onclick = function() {
        var checkbox = document.getElementsByName('ma_bl[]');

        for (var i = 0; i < checkbox.length; i++) {
            checkbox[i].checked = false;
        }

    }
</script>