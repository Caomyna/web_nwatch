<?php
    // session_start();
    include "db/database.php";
?>
<?php
    if(!isset($_GET['id_product']) || $_GET['id_product']==NULL){
        echo '<script>alert("Giá trị ID không tồn tại. Vui lòng kiểm tra lại.!")</script>';
    }else{
        $id_product = $_GET['id_product'];
        $sql = "SELECT * FROM product WHERE id_product = '$id_product';";
        $product_edit = executeSingleResult($sql);
    }
?>


<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Trang quản trị Admin</h3>
    </div>
    <!--content-->
    <div class="main-content">
        <h2>Cập nhật sản phẩm</h2>
        <form action="" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label class="form-label">Chọn loại sản phẩm</label>
                <select name="id_category" class="form-select" aria-label=".form-select-sm">
                    <?php
                        // Lấy danh sách danh mục sản phẩm từ database
                        $sql = 'select * from category';
                        $categoryList = executeResult($sql);
                        foreach($categoryList as $item) : 
                    ?>
                
                    <option value="<?php echo $item['id_category']; ?>"><?php echo $item['name_category']; ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label">Nhập Tên sản phẩm</label>
                <input value="<?php echo $product_edit['title'];?>" name ="name_product" type="text" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Giá sản phẩm</label>
                <input value="<?php echo $product_edit['price'];?>" name ="price" type="text" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Giá khuyến mãi</label>
                <input value="<?php echo $product_edit['discount'];?>" name ="discount" type="text" class="form-control" required>
            </div>
            <!-- <div class="mb-3">
                <label class="form-label">Ảnh sản phẩm</label>
                <input name ="img_main" type="file" class="form-control" required>
            </div> -->
            <div class="mb-3">
                <label class="form-label">Ảnh sản phẩm</label>
                <input name ="images" multiple type="file" class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label">Mô tả sản phẩm</label>
                <textarea value="<?php echo $product_edit['descript'];?>"name="descript" class="form-control" id="" cols="30" rows="10"></textarea>
            </div>

            <button name ="save" type="submit" class="btn btn-success">Cập nhật</button>
        </form>
    </div>
</div>
               

<?php
    if (isset($_POST['save'])) {
        // Lấy dữ liệu người dùng hiệu chỉnh gởi từ REQUEST POST
        $id_category = $_POST['id_category'];
        $title = $_POST['name_product'];
        $price = $_POST['price'];
        $discount = $_POST['discount'];
        // Điều kiện kiểm tra định dạng ảnh, nếu không phải ảnh không cho upload
        if ($_FILES['images']['type'] == "image/jpeg" || $_FILES['images']['type'] == "image/png" || $_FILES['images']['type'] == "image/gif") {
            $path = "image/"; // Thư mục images để lưu ảnh
            $tmp_name = $_FILES['images']['tmp_name'];
            $name = $_FILES['images']['name'];
            // Upload ảnh vào thư mục images
            $images = $path . $name; // Đường dẫn ảnh lưu vào cơ sở dữ liệu
        }
        $descript = $_POST['descript'];
        $updated_at = date('Y-m-d H:s:i');
        $query = "UPDATE product SET category_id ='$id_category', title = '$title', price = '$price', 
        discount ='$discount', images = '$images' , descript ='$descript',
        updated_at = '$updated_at' WHERE id_product = $id_product;";
        $productEdit = execute($query);
        echo '<script>alert("Cập nhập thành công!")</script>';
        echo "<script>window.location.href='index.php?page=product_list.php'</script>";
    }
?>
