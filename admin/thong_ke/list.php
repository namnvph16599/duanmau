<table class="table">
    <thead>
        <tr>
            <th>
                Loại hàng
            </th>
            <th>Số lượng</th>
            <th>Giá cao nhất</th>
            <th>Giá thấp nhất</th>
            <th>Giá trung bình</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($items as $item) :
        ?>
            <tr>
                <td>
                    <?= $item['ten_loai'] ?>
                </td>
                <td>
                    <?= $item['so_luong'] ?>
                </td>
                <td>
                    <?= number_format($item['gia_min']) . " VNĐ"?>
                </td>
                <td>
                    <?= number_format($item['gia_max']) . " VNĐ" ?>
                </td>
                <td>
                    <?= number_format($item['gia_avg']) . " VNĐ"?>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<button class="btn btn-default"><a href="index.php?chart">Xem biểu đồ</a></button>