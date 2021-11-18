<form action="index.php" method="post">
    <table class="table">
        <thead>
            <tr>
                <th>Hàng hóa</th>
                <th>Số bình luận</th>
                <th>Cũ nhất</th>
                <th>Mới nhất</th>
                <th>Chi tiết</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($items as  $value) : ?>
                <tr>
                    <td><?= $value['ten_hh'] ?></td>
                    <td><?= $value['so_luong'] ?></td>
                    <td><?= $value['cu_nhat'] ?></td>
                    <td><?= $value['moi_nhat'] ?></td>
                    <td>
                        <button class="btn btn-danger"><a href="<?= $ADMIN_URL?>/binh_luan/index.php?ma_hh=<?=$value['ma_hh']?> ">Chi tiết</a></button>
                    </td>

                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</form>