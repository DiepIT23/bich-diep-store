<?php

/**
 * Mở kết nối đến CSDL sử dụng PDO
 */
function pdo_get_connection()
{
    $dburl = "mysql:host=localhost;dbname=bich_diep_store;charset=utf8";
    $username = 'root';
    $password = '';

    try {
        $conn = new PDO($dburl, $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
    } catch (PDOException $e) {
        die("Kết nối CSDL thất bại: " . $e->getMessage());
    }
}

/**
 * Thực thi câu lệnh SQL thao tác dữ liệu (INSERT, UPDATE, DELETE)
 * @param string $sql Câu lệnh SQL
 * @param array $args Mảng giá trị cho các tham số
 */
function pdo_execute($sql, ...$args)
{
    try {
        $conn = pdo_get_connection();
        $stmt = $conn->prepare($sql);
        $stmt->execute($args);

        return $conn->lastInsertId();
    } catch (PDOException $e) {
        throw $e;
    } finally {
        unset($conn);
    }
}

function pdo_execute_insert($sql, ...$args)
{
    $id = null;
    try {
        $conn = pdo_get_connection();
        $stmt = $conn->prepare($sql);
        $stmt->execute($args);

        $id =  $conn->lastInsertId();
    } catch (PDOException $e) {
        throw $e;
    } finally {
        unset($conn);
    }
    return $id;
}

/**
 * Thực thi câu lệnh SQL truy vấn dữ liệu (SELECT) trả về nhiều bản ghi
 * @param string $sql Câu lệnh SQL
 * @param array $args Mảng giá trị cho các tham số
 * @return array Mảng các bản ghi
 */
function pdo_query($sql, ...$args)
{
    try {
        $conn = pdo_get_connection();
        $stmt = $conn->prepare($sql);
        $stmt->execute($args);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        throw $e;
    } finally {
        unset($conn);
    }
}

/**
 * Thực thi câu lệnh SQL truy vấn một bản ghi
 * @param string $sql Câu lệnh SQL
 * @param array $args Mảng giá trị cho các tham số
 * @return array|null Bản ghi hoặc null nếu không tồn tại
 */
function pdo_query_one($sql, ...$args)
{
    try {
        $conn = pdo_get_connection();
        $stmt = $conn->prepare($sql);
        $stmt->execute($args);
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        return $row ?: null;
    } catch (PDOException $e) {
        throw $e;
    } finally {
        unset($conn);
    }
}

/**
 * Thực thi câu lệnh SQL truy vấn một giá trị
 * @param string $sql Câu lệnh SQL
 * @param array $args Mảng giá trị cho các tham số
 * @return mixed Giá trị của trường đầu tiên hoặc null nếu không tồn tại
 */
function pdo_query_value($sql, ...$args)
{
    try {
        $conn = pdo_get_connection();
        $stmt = $conn->prepare($sql);
        $stmt->execute($args);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        return $row ? $row[0] : null;
    } catch (PDOException $e) {
        throw $e;
    } finally {
        unset($conn);
    }
}
