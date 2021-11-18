<?php
include_once "pdo.php";
/**
 * Sinh viên hoàn thiện các hàm theo chú thích sau
 */
//function hang_hoa_insert
function hang_hoa_insert($ten_hh, $gia, $giam_gia, $hinh, $mo_ta, $dac_biet, $ma_loai, $ngay_tao, $ngay_sua)
{
    $sql = "INSERT INTO hang_hoa(ten_hh, gia, giam_gia, hinh, mo_ta, dac_biet, ma_loai, ngay_tao, ngay_sua) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?)";
    pdo_execute($sql, $ten_hh, $gia, $giam_gia, $hinh, $mo_ta, $dac_biet, $ma_loai, $ngay_tao, $ngay_sua);
}
//function hang_hoa_update
function hang_hoa_update(
    $ten_hh,
    $gia,
    $giam_gia,
    $hinh,
    $mo_ta,
    $dac_biet,
    $ma_loai,
    $ngay_sua,
    $ma_hh
) {
    $sql = "update hang_hoa set ten_hh=?,gia=?,giam_gia=?,hinh=?,mo_ta=?,dac_biet=?,
    ma_loai=?,ngay_sua=? where ma_hh = ?";
    pdo_execute(
        $sql,
        $ten_hh,
        $gia,
        $giam_gia,
        $hinh,
        $mo_ta,
        $dac_biet,
        $ma_loai,
        $ngay_sua,
        $ma_hh
    );
}
//function hang_hoa_delete
function hang_hoa_delete($ma_hh)
{
    $sql = "delete from hang_hoa where ma_hh=?";
    if (is_array($ma_hh)) {
        foreach ($ma_hh as $ma) {
            pdo_execute($sql, $ma);
        }
    } else {
        pdo_execute($sql, $ma_hh);
    }
}
//function hang_hoa_select_all
function hang_hoa_select_all()
{
    $sql = "Select * from hang_hoa";
    return pdo_query($sql);
}
function hang_hoa_select_home()
{
    $sql = "Select * from hang_hoa limit 6";
    return pdo_query($sql);
}
//function hang_hoa_select_by_id
function hang_hoa_select_by_id($ma_hh)
{
    $sql = "Select * from hang_hoa where ma_hh = ?";
    return pdo_query_one($sql, $ma_hh);
}
//function hang_hoa_exist
function hang_hoa_exist($ma_hh)
{
    $sql = "select count(*) from hang_hoa where ma_hh = ?";
    return pdo_query_value($sql, $ma_hh) > 0;
}
//function hang_hoa_tang_so_luot_xem
function hang_hoa_tang_so_luot_xem($ma_hh)
{
    $sql = "update hang_hoa set luot_xem =luot_xem +1 where ma_hh=?";
    pdo_execute($sql, $ma_hh);
}
/**
 * function hang_hoa_select_top10()
 * Hiển thị 10 sản phẩm có số lượt xem lớn nhất
 */
function hang_hoa_select_top10()
{
    $sql = "select * from hang_hoa where luot_xem > 0 order by luot_xem desc limit 0,10";
    return pdo_query($sql,);
}

/**
 * function hang_hoa_select_dac_biet()
 * Hiển thị các sản phẩm đặc biệt
 */
function hang_hoa_select_dac_biet()
{
    $sql = "SELECT * FROM hang_hoa where dac_biet='1' limit 12 ";
    return pdo_query($sql);
}

/**
 * function hang_hoa_select_by_loai
 * Hiển thị sản phẩm theo loại
 */
function hang_hoa_select_by_loai($ma_loai)
{
    $sql = "SELECT * FROM hang_hoa where ma_loai=?";
    return pdo_query($sql, $ma_loai);
}
//
function hang_hoa_select_tuong_tu($ma_loai,$ma_hh)
{
    $sql = "SELECT * FROM hang_hoa where ma_loai=? and ma_hh != ?";
    return pdo_query($sql, $ma_loai,$ma_hh);
}
/**
 * function hang_hoa_select_keyword
 * tìm kiếm hàng hóa theo tên hàng hóa
 * sử dụng LIKE
 */
function hang_hoa_select_keyword($keyword)
{
    $sql = "SELECT * FROM hang_hoa hh JOIN loai_hang lo ON lo.ma_loai=hh.ma_loai
    WHERE ten_hh LIKE ? OR ten_loai LIKE ?";
    return pdo_query($sql, '%' . $keyword . '%', '%' . $keyword . '%');
}
