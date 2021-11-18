<?php
require_once "pdo.php";
//Insert dữ liêu
function loai_hang_insert($ten_loai)
{
    $sql = "INSERT INTO loai_hang(ten_loai) VALUES(?)";
    pdo_execute($sql, $ten_loai);
}

//Select * from
function loai_hang_selectAll()
{
    $sql = "SELECT * FROM loai_hang";
    return pdo_query($sql);
}

//  * Xóa dữ liệu
//  * Kiểm tra xem $ma_loai có phải là mảng không (Xóa 1 lúc nhiều loại)
//  * Nếu đúng thì sẽ xóa từng loại 1
//  * Nếu sai thì chỉ xóa 1 loại
//  */

function loai_hang_delete($ma_loai)
{
    $sql = "DELETE FROM loai_hang WHERE ma_loai=?";
    if (is_array($ma_loai)) {
        foreach ($ma_loai as $ma) {
            pdo_execute($sql, $ma);
        }
    } else {
        pdo_execute($sql, $ma_loai);
    }
}

//Cập nhật loại hàng
function loai_hang_update($ten_loai, $ma_loai)
{
    $sql = "UPDATE loai_hang set ten_loai=? where ma_loai=?";
    pdo_execute($sql,  $ten_loai, $ma_loai);
}
// truy vấn theo mã loại
function loai_hang_getInfo($ma_loai)
{
    $sql = "SELECT * FROM loai_hang WHERE ma_loai=?";
    return pdo_query_one($sql, $ma_loai);
}
//Kiểm tra sự tồn tại của loại hàng
function loai_hang_exist($ma_loai)
{
    $sql = "SELECT count(*) FROM loai WHERE ma_loai=?";
    return pdo_query_value($sql, $ma_loai) > 0;
}
