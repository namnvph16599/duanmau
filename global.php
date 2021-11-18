<?php
session_start();
$ROOT_URL = "/DuAnMau_Web2041";
$CONTENT_URL = $ROOT_URL . "/content";
$ADMIN_URL = $ROOT_URL . "/admin";
$SITE_URL = $ROOT_URL . "/site";
$IMAGE_URL = $ROOT_URL . "/content/images";
$DAO_URL=$ROOT_URL . "/dao";
//Đường daaxnx đến thư mục upload file
$PATH_IMG = $_SERVER['DOCUMENT_ROOT'] . $ROOT_URL . "/content/images";

$VIEW_PAGE = 'index.php';
$MESSAGE = '';

//hàm upload file
//tham số file ten file trong form
//path_dỉr dg dân upload file
//return tên file
function uploadFile($file, $path_dir)
{
    $file_upload = $_FILES[$file];
    $file_name = $file_upload['name'];
    $path_file_dir = $path_dir . $file_name;
    move_uploaded_file($file_upload['tmp_name'], $path_file_dir);
    return $file_name;
}

function exit_param($fieldname)
{ //klieerm tra biến xem có tồn tại trong reques hay kh
    return array_key_exists($fieldname, $_REQUEST);
}

/**
 * Tạo cookie
 * @param string $name là tên cookie
 * @param string $value là giá trị cookie
 * @param int $day là số ngày tồn tại cookie
 */
function add_cookie($name, $value, $day)
{
    setcookie($name, $value, time() + (86400 * $day), "/");
}
/**
 * Xóa cookie
 * @param string $name là tên cookie
 */
function delete_cookie($name)
{
    add_cookie(
        $name,
        "",
        -1
    );
}
/**
 * Đọc giá trị cookie
 * @param string $name là tên cookie
 * @return string giá trị của cookie
 */
function get_cookie($name)
{
    return $_COOKIE[$name] ?? '';
}

/**
 * Kiểm tra đăng nhập và vai trò sử dụng.
 * Các php trong admin hoặc php yêu cầu phải được đăng nhập mới được
 * phép sử dụng thì cần thiết phải gọi hàm này trước
 **/
function check_login()
{
    global $SITE_URL;
    if (isset($_SESSION['user'])) {
        if ($_SESSION['user']['vai_tro'] == 1) {
            return;
        }
        if (strpos($_SERVER["REQUEST_URI"], '/admin/') == FALSE) {
            return;
        }
    }
    $_SESSION['request_uri'] = $_SERVER["REQUEST_URI"];
    header("location: $SITE_URL/tai_khoan/dang_nhap.php");
}
