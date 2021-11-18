<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ - SNEAKERSTORE</title>
    <script src="<?= $CONTENT_URL ?>/js/jquery-3.3.1.js"></script>
    <script src="<?= $CONTENT_URL ?>/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Paytone+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= $CONTENT_URL ?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= $CONTENT_URL ?>/fonts/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="<?= $CONTENT_URL ?>/css/home.css">
    <link rel="stylesheet" href="<?= $CONTENT_URL ?>/css/style.css">
    <link rel="stylesheet" href="<?= $CONTENT_URL ?>/css/lien_he.css">
    <link rel="stylesheet" href="<?= $CONTENT_URL ?>/css/product.css">
    <link rel="stylesheet" href="<?= $CONTENT_URL ?>/css/gioi_thieu.css">
    <link rel="stylesheet" href="<?= $CONTENT_URL ?>/css/mycssform.css">
    <link rel="stylesheet" href="<?= $CONTENT_URL ?>/css/dang_nhap_info.css">
    <!-- <base target="_blank1" rel="noopener noreferrer"> -->

</head>

<body>
    <div class="app">
        <!-- header -->
        <header id="header">
            <?php require "trang_chinh/header.php"; ?>
        </header>
        <!-- end header -->
        <div class="content__main">
            <?php require $VIEW_PAGE ?>
        </div>

        <!-- footer -->
        <footer>
            <?php require "trang_chinh/footer.php" ?>
        </footer>
        <!-- end footer -->
    </div>
    <script src="<?= $CONTENT_URL ?>/js/jq.js"></script>
    <script>
        $().ready(function() {
            $("#myform").validate({
                onfocusout: false,
                onkeyup: false,
                onclick: false,
                rules: {
                    "ma_kh": {
                        required: true,
                        maxlength: 15
                    },
                    "mat_khau": {
                        required: true,
                        minlength: 8
                    },
                    "mat_khau2": {
                        required: true,
                        minlength: 8
                    },
                    "mat_khau3": {
                        required: true,
                        equalTo: "#mat_khau2",
                        minlength: 8
                    },
                    "email": {
                        required: true,
                        email: true,
                    },
                    "ten_kh": {
                        required: true,
                    }
                    ,
                    "hinh": {
                        required: true,
                    }
                },
                messages: {
                    "ma_kh": {
                        required: "Bắt buộc nhập mã khách hàng",
                        maxlength: 15
                    },
                    "mat_khau": {
                        required: "Bắt buộc nhập mật khẩu",
                        minlength: "Hãy nhập ít nhất 8 kí tự"
                    },
                    "mat_khau2": {
                        required: "Mật khẩu bắt buộc nhập",
                        minlength: "Hãy nhập ít nhất 8 kí tự"
                    },
                    "mat_khau3": {
                        required: "Mật khẩu bắt buộc nhập",
                        equalTo: "Mật khẩu phải trùng nhau",
                        minlength: "Hãy nhập ít nhất 8 kí tự"
                    },
                    "email": {
                        required: "Bắt buộc nhập email",
                        email: "Phải nhập đúng định dạng email"
                    },
                    "ten_kh": {
                        required: "Bắt buộc phải nhập họ tên",
                    }
                    ,
                    "hinh": {
                        required: "Bắt buộc phải tải hình lên",
                    }
                }
            });
        });
    </script>
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.min.js"></script>
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js" type="text/javascript"></script>
</body>

</html>