<form action="index.php" method="post" enctype="multipart/form-data">
    <button class="btn" type="submit" name="btn_add">Thêm slider</button>
    <table class="table table-striped">
        <tr>
            <th></th>
            <th>Mã slider</th>
            <th>Tên slider</th>
            <th>Hình</th>
            <th>Xử lí</th>
        </tr>
        <?php
        foreach ($items as $item) {
        ?>
            <tr>
                <td><input type="checkbox" name="ma_slide[]" value="<?php echo $item['ma_slide'] ?>" id=""></td>
                <td><?= $item['ma_slide'] ?></td>
                <td><?= $item['ten_slide'] ?></td>
                <td> <img src="<?= $IMAGE_URL . '/' . $item['hinh'] ?>" width="123" alt=""></td>
                <td>
                    <button class="btn btn-default"><a href="index.php?btn_edit&ma_slide=<?= $item['ma_slide'] ?>">Sửa</a></button>
                    <button class="btn btn-danger"><a href="index.php?btn_delete&ma_slide=<?= $item['ma_slide'] ?>">Xóa</a></button>
                </td>

            </tr>
        <?php
        }
        ?>
    </table>
    <div class="btn_fake" id="btn_all" name="btn_checkall">Chọn tất cả</div>
    <div class="btn_fake" id="btn_unall" name="btn_uncheckall">Bỏ chọn tất cả</div>
    <button class="btn" type="submit" name="btn_delete">Xóa mục đã chọn</button>
</form>

<script language="javascript">
    document.getElementById('btn_all').onclick = function() {
        var checkbox = document.getElementsByName('ma_slide[]');

        for (var i = 0; i < checkbox.length; i++) {
            checkbox[i].checked = true;
        }

    }
    document.getElementById('btn_unall').onclick = function() {
        var checkbox = document.getElementsByName('ma_slide[]');

        for (var i = 0; i < checkbox.length; i++) {
            checkbox[i].checked = false;
        }

    }
</script>