<?php
    // session_start();
    include "db/database.php";
    $id_product = $_GET['id_product'];
    $sql = "DELETE FROM product WHERE id_product = $id_product;";
    $result = execute($sql);
    echo '<script>alert("Đã xóa thành công!")</script>';
    // Sau khi cập nhật dữ liệu, tự động điều hướng về trang Danh sách
    // header('location:product_list.php');
?>
