<form action="index.php" method="post" enctype="multipart/form-data">
    <button class="btn" type="submit" name="btn_add">Thêm loại hàng</button>
    <table class="table">
        <thead>
            <tr>
                <th></th>
                <th>Mã loại</th>
                <th>Tên loại</th>
                <th>Xử lí</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($items as  $value) :
            ?>
                <tr>
                    <td><input type="checkbox" name="ma_loai[]" value="<?php echo $value['ma_loai'] ?>" id=""></td>
                    <td><?php echo $value['ma_loai'] ?></td>
                    <td><?php echo $value['ten_loai'] ?></td>
                    <td>
                        <button class="btn btn-default"><a href="index.php?btn_edit&ma_loai=<?= $value['ma_loai'] ?>">Sửa</a></button>
                        <button class="btn btn-danger"><a href="index.php?btn_delete&ma_loai=<?= $value['ma_loai'] ?>">Xóa</a></button>
                    </td>
                </tr>
            <?php
            endforeach;
            ?>
        </tbody>
    </table>
    <div class="btn_fake" id="btn_all" name="btn_checkall">Chọn tất cả</div>
    <div class="btn_fake" id="btn_unall" name="btn_uncheckall">Bỏ chọn tất cả</div>
    <button class="btn" type="submit" name="btn_delete">Xóa mục đã chọn</button>
</form>

<script language="javascript">
    document.getElementById('btn_all').onclick = function() {
        var checkbox = document.getElementsByName('ma_loai[]');

        for (var i = 0; i < checkbox.length; i++) {
            checkbox[i].checked = true;
        }

    }
    document.getElementById('btn_unall').onclick = function() {
        var checkbox = document.getElementsByName('ma_loai[]');

        for (var i = 0; i < checkbox.length; i++) {
            checkbox[i].checked = false;
        }

    }
</script>