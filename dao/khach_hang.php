<?php
include_once "pdo.php";
/**
 * Sinh viên hoàn thiện các hàm theo chú thích sau
 */
//function function khach_hang_insert
function khach_hang_insert($ma_kh, $ten_kh, $mat_khau, $hinh, $email, $vai_tro, $kich_hoat)
{
    $sql = "INSERT into khach_hang(ma_kh,ten_kh,mat_khau,hinh,email,vai_tro,
    kich_hoat) values (?,?,?,?,?,?,?)";
    pdo_execute($sql, $ma_kh, $ten_kh, $mat_khau, $hinh, $email, $vai_tro, $kich_hoat);
}
//function function khach_hang_update
function khach_hang_update($ma_kh, $ten_kh, $mat_khau, $hinh, $email, $vai_tro, $kich_hoat)
{
    $sql = "UPDATE khach_hang set ma_kh=?, ten_kh=?,mat_khau=?,hinh=?,email=?,vai_tro=?,kich_hoat=? where ma_kh=?";
    pdo_execute($sql, $ma_kh, $ten_kh, $mat_khau, $hinh, $email, $vai_tro, $kich_hoat, $ma_kh);
}
function khach_hang_update_user($ten_kh, $email, $hinh, $ma_kh)
{
    $sql = "update khach_hang set ten_kh=?,email=?,hinh=? where ma_kh=?";
    pdo_execute($sql,  $ten_kh, $email, $hinh,  $ma_kh);
}
//functiong function khach_hang_delete
function khach_hang_delete($ma_kh)
{
    $sql = "delete from khach_hang where ma_kh = ? ";
    if (is_array($ma_kh)) {
        foreach ($ma_kh as $ma) {
            pdo_execute($sql, $ma);
        }
    } else {
        pdo_execute($sql, $ma_kh);
    }
}

//function khach_hang_select_all
function khach_hang_select_all()
{
    $sql = "select * from khach_hang";
    return pdo_query($sql);
}
//function khach_hang_select_by_id
function khach_hang_select_by_id($ma_kh)
{
    $sql = "select * from khach_hang where ma_kh=?";
    return pdo_query_one($sql, $ma_kh);
}
/**
 * function khach_hang_exist
 * Để kiểm tra sự tồn tại của khách hàng
 */
function khach_hang_exist($ma_kh)
{
    $sql = "select count(*) from khach_hang where ma_kh = ?";
    return pdo_query_one($sql, $ma_kh)['count(*)'] > 0 ? true : false;
}
/**
 * function khach_hang_select_by_role
 * Lấy ra danh sách khách hàng theo vai trò (quản trị hay khách hàng)
 */
function khach_hang_select_by_role($vai_tro)
{
    $sql = "SELECT * FROM khach_hang where vai_tro=?";
    pdo_query($sql, $vai_tro);
}
/**
 * function khach_hang_change_password
 * dùng để thay đổi mật khẩu
 */
function khach_hang_change_password($mat_khau, $ma_kh)
{
    $sql = "update khach_hang set mat_khau=? where ma_kh = ?";
    pdo_execute($sql, $mat_khau, $ma_kh);
}
