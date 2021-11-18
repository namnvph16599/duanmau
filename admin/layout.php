<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản trị website</title>
    <link rel="stylesheet" href="<?= $ADMIN_URL ?>/css/style.css">
</head>

<body>
    <div class="container">
        <header>
            <h1>QUẢN TRỊ WEBSITE</h1>
            <nav>
                <ul>
                    <li><a href="<?= $ADMIN_URL ?>/trang_chinh/index.php">Trang chủ</a></li>
                    <li><a href="<?= $ADMIN_URL ?>/loai_hang/index.php">Loại hàng</a></li>
                    <li><a href="<?= $ADMIN_URL ?>/hang_hoa/index.php">Hàng hóa</a></li>
                    <li><a href="<?= $ADMIN_URL ?>/khach_hang/index.php">Khách hàng</a></li>
                    <li><a href="<?= $ADMIN_URL ?>/binh_luan/index.php">Bình luận</a></li>
                    <li><a href="<?= $ADMIN_URL ?>/slider/index.php">Slider</a></li>
                    <li><a href="<?= $ADMIN_URL ?>/thong_ke/index.php">Thống kê</a></li>
                </ul>
            </nav>
        </header>
        <article>
            <!-- <div class="headline">
                <h1></h1>
            </div> -->
            <?php
            if (isset($_SESSION['user'])) {
                include_once $VIEW_PAGE;
            } else {
                echo "<h1>Bạn phải đăng nhập</h1>";
            }
            ?>
        </article>
    </div>
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.min.js"></script>
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js" type="text/javascript"></script>
</body>

</html>