<form action="index.php" method="post" enctype="multipart/form-data">
    <button class="btn"><a href="<?= $ADMIN_URL ?>/khach_hang/?btn_add">Thêm khách hàng</a></button>
    <table class="table">
        <thead>
            <tr>
                <th></th>
                <th>Mã KH</th>
                <th>Tên KH</th>
                <th>Ảnh</th>
                <th>Email</th>
                <th>Vai trò</th>
                <th>Kích hoạt</th>
                <th>Xử lí</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($ds_khach_hang as $kh) :
            ?>
                <tr>
                    <td><input type="checkbox" name="ma_kh[]" value="<?php echo $kh['ma_kh'] ?>" id=""></td>
                    <td><?php echo $kh['ma_kh'] ?></td>
                    <td><?php echo $kh['ten_kh'] ?></td>
                    <td><img src="<?= $IMAGE_URL . '/' . $kh['hinh'] ?>" width="123" alt=""></td>
                    <td><?php echo $kh['email'] ?></td>
                    <td><?php echo $kh['vai_tro'] ?></td>
                    <td><?php echo $kh['kich_hoat'] ?></td>
                    <td> <button class="btn btn-default"><a href="index.php?btn_edit&ma_kh=<?= $kh['ma_kh'] ?>">Sửa</a></button>
                        <button class="btn btn-danger"><a href="index.php?btn_delete&ma_kh=<?= $kh['ma_kh'] ?>">Xóa</a></button>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
    <div class="btn_fake" id="btn_all" name="btn_checkall">Chọn tất cả</div>
    <div class="btn_fake" id="btn_unall" name="btn_uncheckall">Bỏ chọn tất cả</div>
    <button class="btn" type="submit" name="btn_delete">Xóa mục đã chọn</button>
</form>


<script language="javascript">
    document.getElementById('btn_all').onclick = function() {
        var checkbox = document.getElementsByName('ma_kh[]');

        for (var i = 0; i < checkbox.length; i++) {
            checkbox[i].checked = true;
        }

    }
    document.getElementById('btn_unall').onclick = function() {
        var checkbox = document.getElementsByName('ma_kh[]');

        for (var i = 0; i < checkbox.length; i++) {
            checkbox[i].checked = false;
        }

    }
</script>