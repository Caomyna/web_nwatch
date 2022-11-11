<?php
    include "db/database.php";

    if(!isset($_GET['id_category'])|| $_GET['id_category']==NULL){
        echo '<script>alert("Giá trị ID không tồn tại. Vui lòng kiểm tra lại.!")</script>';
    }else{
        $id_category = $_GET['id_category'];
        $sql = "SELECT * FROM category WHERE id_category = '$id_category';";
        $category_edit = executeSingleResult($sql);
        $nameCategory = $category_edit['name_category'];
    }
?>

<!-- Content Wrapper. Contains page content -->
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Trang quản trị Admin</h3>
    </div>
    <!--content-->
    <div class="main-content">
        <h2>Cập nhật danh mục sản phẩm</h2>
        <form action="" method="post">
            <div class="mb-3">
                <label class="form-label">Nhập Tên danh mục sản phẩm</label>
                <input name ="name_category" type="text" class="form-control" value="<?php echo $nameCategory; ?>" required>
            </div>
            <button name ="save" type="submit" class="btn btn-success">Lưu</button>
        </form>
    </div>
</div>
<?php
    if (isset($_POST['save'])) {
        // Lấy dữ liệu người dùng hiệu chỉnh gởi từ REQUEST POST
        $name_category = $_POST['name_category'];
        $query = "UPDATE category SET name_category ='$name_category' WHERE id_category=$id_category;";
        $category_edit = execute($query);
        echo '<script>alert("Cập nhập thành công!")</script>';
        // header('location:category_list.php');
    }
?>
