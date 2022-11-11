<?php
    include "db/database.php";
?>

<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Trang quản trị Admin</h3>
    </div>
    <!--content-->
    <div class="main-content">
        <h2>Quản lý người dùng </h2>
        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>STT</th>
                    <th>Họ Tên </th>
                    <th>Email</th>
                    <th>Địa chỉ</th>
                    <th>Mật khẩu</th>
                    <th>Vai trò</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php
                    // Lấy danh sách danh mục sản phẩm từ database
                    $sql = 'SELECT users.fullname, users.email, users.address, users.password, users.role FROM users';
                    $users = executeResult($sql);
                    $index = 1;
                    foreach($users as $item) : 
                ?>
            
                <tr>
                    <td><?php echo $index++; ?></td>
                    <td><?php echo $item['fullname']; ?></td>
                    <td><?php echo $item['email']; ?></td>
                    <td><?php echo $item['address']; ?></td>
                    <td><?php echo $item['password']; ?></td>
                    <td>
                        <?php 
                            if ($item['role']==1) {
                                echo 'Admin';
                            }else{
                                echo 'user'; 
                            }
                        ?>
                
                    </td>
                    <td>
                        <a href="" class="btn btn-danger">Xóa</a>
                    </td>
                </tr>
                        
            </tbody>
            <?php endforeach; ?>
        </table>
    </div>
</div>



