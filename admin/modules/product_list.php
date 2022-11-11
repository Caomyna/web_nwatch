<?php
    // session_start();
    include "db/database.php";
?>

<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Trang quản trị Admin</h3>
    </div>

    <!--content-->
    <div class="card-body">
        <h2>Danh sách sản phẩm </h2>
        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>STT</th>
                    <th  width="20px"> ID </th>
                    <th>Hình ảnh</th>
                    <th>Tên sản phẩm</th>
                    <th>Giá bán</th>
                    <th>Danh mục</th>
                    <th>Ngày cập nhật</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php
                    // Lấy danh sách danh mục sản phẩm từ database
                    $sql = 'SELECT product.id_product, product.images, product.title, product.price, product.updated_at, 
                    category.name_category FROM product LEFT OUTER JOIN category ON product.category_id = category.id_category';
                    $productList = executeResult($sql);
                    $index = 1;
                    foreach($productList as $item) : 
                ?>
            
                <tr>
                    <td><?php echo $index++; ?></td>
                    <td><?php echo $item['id_product']; ?></td>
                    <td><img style="width:100px;" src="../<?php echo $item['images'];?>"/></td>
                    <td><?php echo $item['title']; ?></td>
                    <td><?php echo $item['price']; ?></td>
                    <td><?php echo $item['name_category']; ?></td>
                    <td><?php echo $item['updated_at']; ?></td>
                    <td>
                        <a href="index.php?page=product_edit.php&id_product=<?php echo $item['id_product'];?>" class="btn btn-warning">Sửa</a>
                    </td>
                    <td>
                        <a href="index.php?page=product_delete.php&id_product=<?php echo $item['id_product'];?>" class="btn btn-danger">Xóa</a>
                    </td>
                </tr>
                        
            </tbody>
            <?php endforeach; ?>
        </table>
    </div>
</div>
 
