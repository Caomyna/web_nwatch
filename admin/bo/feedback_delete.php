<?php
    // session_start();
    include "db/database.php";
    $id_feedback = $_GET['id_feedback'];
    $sql = "DELETE FROM feedback WHERE id_feedback = $id_feedback;";
    $result = execute($sql);

    // Sau khi cập nhật dữ liệu, tự động điều hướng về trang Danh sách
    // header('location:feedback.php');
?>
