<?php

/**
 * Hàm kết nối đến cơ sở dữ liệu
 * return kết nối
 */
function pdo_connection()
{
    $conn = new PDO("mysql:host=localhost; dbname=web2041; charset=utf8", "root", "");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $conn;
}

/**
 * Hàm để thực thi câu lệnh sql (INSERT, UPDATE, DELETE)
 * tham số: $sql câu lệnh sql
 * tham số: mảng dữ liệu đầu vào
 * PDOException $e bắt lỗi nếu có
 */
function pdo_execute($sql)
{
    $args = array_slice(func_get_args(), 1);
    try {
        $conn = pdo_connection();
        $stmt = $conn->prepare($sql);
        $stmt->execute($args);
    } catch (PDOException $e) {
        echo "Lỗi xảy ra: " . $e->getMessage();
    } finally {
        unset($conn);
    }
}
/**
 * Hàm để lấy ra danh sách dữ liệu
 * tham số: $sql câu lệnh truy vấn
 * tham số: $args mảng các tham số đầu vào
 * return danh sách
 */
function pdo_query($sql)
{
    $args = array_slice(func_get_args(), 1);
    try {
        $conn = pdo_connection();
        $stmt = $conn->prepare($sql);
        $stmt->execute($args);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        echo "Lỗi xảy ra: " . $e->getMessage();
    } finally {
        unset($conn);
    }
}
/**
 * hàm lấy ra 1 bản ghi
 * tham số: $sql câu lệnh truy vấn
 * tham số: $array mảng các tham số đầu vào
 * return: giá trị
 */
function pdo_query_one($sql)
{
    $args = array_slice(func_get_args(), 1);
    try {
        $conn = pdo_connection();
        $stmt = $conn->prepare($sql);
        $stmt->execute($args);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        echo "Lỗi xảy ra: " . $e->getMessage();
    } finally {
        unset($conn);
    }
}
/**
 * Hàm thực thi SQL để lấy 1 giá trị
 * tham số: $sql  câu lệnh truy vấn
 * tham số: $args mảng các tham số đầu vào
 * return: giá trị
 */
function pdo_query_value($sql)
{
    $args = array_slice(func_get_args(), 1);
    try {
        $conn = pdo_connection();
        $stmt = $conn->prepare($sql);
        $stmt->execute($args);
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result[0];
    } catch (PDOException $e) {
        echo "Lỗi xảy ra: " . $e->getMessage();
    } finally {
        unset($conn);
    }
}


//loại -> nhiều hàng hóa -> từng loại -> danh sách dữ liệu của loại hàng hóa đó