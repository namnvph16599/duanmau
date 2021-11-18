<?php
require_once "pdo.php";

//thêm mới slide 

function slider_insert($ten_slide, $hinh)
{
    $sql = "INSERT INTO slider(ten_slide,hinh) VALUES (?,?)";
    pdo_execute($sql, $ten_slide, $hinh);
}

//xóa slide 

function slider_delete($ma_slide)
{
    $sql = "DELETE FROM slider WHERE ma_slide=?";
    pdo_execute($sql, $ma_slide);
}

//cập nhật slide 

function slider_update($ten_slide, $hinh, $ma_slide)
{
    $sql = "UPDATE slider SET ten_slide=?,hinh=? WHERE ma_slide=? ";
    pdo_execute($sql, $ten_slide, $hinh, $ma_slide);
}

//truy vấn tất cả

function slider_selectAll()
{
    $sql = "SELECT * FROM slider";
    return pdo_query($sql);
}

//hiển thị slide ở trang chủ
function slider_select_All()
{
    $sql = "SELECT * FROM slider WHERE ma_slide != 0";
    return pdo_query($sql);
}
//truy vấn theo mã 
function slider_home()
{
    $sql = "SELECT * FROM slider WHERE ma_slide = 0 ";
    return pdo_query_one($sql);
}
