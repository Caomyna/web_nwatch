<?php 
    include('db/database.php');
    $inform = '<script> confirm("Bạn có chắc chắn muốn xóa?");</script>';
    if($inform){
        $id_category = $_GET['id_category'];
        $sql = "DELETE FROM category WHERE id_category=$id_category";
        $result = execute($sql);
        // url ('category_list.php');
        echo '<script>alert("Đã xóa thành công!")</script>';
    }else{
        exit();
    }

    // $sql='ALTER TABLE `product`
    // ADD FOREIGN KEY (`category_id`) REFERENCES `category` (`id_category`);';
?>
