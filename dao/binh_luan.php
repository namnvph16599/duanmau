<?php
include_once "pdo.php";

//function binh_luan_insert
function binh_luan_insert($noi_dung, $ma_kh, $ma_hh, $ngay_tao)
{
    $sql = "INSERT INTO binh_luan(noi_dung,ma_kh,ma_hh,ngay_tao) VALUES(?,?,?,?)";
    pdo_execute($sql, $noi_dung, $ma_kh, $ma_hh, $ngay_tao);
}
//function binh_luan_update
function binh_luan_update($noi_dung, $ma_kh, $ma_hh, $ngay_tao, $ma_bl)
{
    $sql = "Update binh_luan set noi_dung=?,ma_kh=?,ma_hh=?,ngay_tao=? set ma_bl=?";
    pdo_execute($sql, $noi_dung, $ma_kh, $ma_hh, $ngay_tao, $ma_bl);
}
//function binh_luan_delete
function binh_luan_delete($ma_bl)
{
    $sql = "Delete from binh_luan where ma_bl=?";
    if (is_array($ma_bl)) {
        foreach ($ma_bl as $ma) {
            pdo_execute($sql, $ma);
        }
    } else {
        pdo_execute($sql, $ma_bl);
    }
}
//function binh_luan_select_all
function binh_luan_selectAll()
{
    $sql = "select * from binh_luan";
    return  pdo_query($sql);
}
//function binh_luan_select_by_id
function binh_luan_getId($ma_bl)
{
    $sql = "select * from binh_luan where ma_bl=?";
    return pdo_query_one($sql, $ma_bl);
}
//function binh_luan_exist
function binh_luan_exist($ma_bl)
{
    $sql = "select count(*) from binh_luan where ma_bl=?";
    return pdo_query_value($sql, $ma_bl) > 0;
}
/**
 * function binh_luan_select_by_hang_hoa
 * Hiển thị các bình luận theo hàng hóa
 */
function binh_luan_select_by_hang_hoa($ma_hh)
{
    $sql = "select b.*,h.ten_hh FROM binh_luan b JOIN hang_hoa h ON h.ma_hh=b.ma_hh WHERE b.ma_hh =? ORDER BY ngay_tao DESC ";
    return pdo_query($sql, $ma_hh);
}
