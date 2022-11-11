<?php
    include "db/database.php";
?>


<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Trang quản trị Admin</h3>
    </div>
    <!--content-->
    <div class="main-content">
        <h2>Danh sách đơn hàng</h2>
        <table class="table table-bordered table-hover" id="tbl_orders">
            <thead>
                <tr>
                    <th>STT</th>
                    <th  width="20px">Mã đơn hàng</th>
                    <th>Tên khách hàng</th>
                    <th>Email</th>
                    <th>SĐT</th>
                    <th>Ngày đặt hàng</th>
                    <th>Nơi giao</th>
                    <th>Tổng tiền</th>
                    <th>Trạng thái</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php
                    // Lấy danh sách danh mục sản phẩm từ database
                    $sql = 'SELECT orders.id_orders, orders.fullname, orders.email, orders.phone_number, orders.address, 
                    orders.order_date, orders.status, orders.total_money FROM orders';
                    $orders = executeResult($sql);
                    $index = 1;
                    foreach($orders as $item) : 
                ?>
            
                <tr>
                    <td><?php echo $index++; ?></td>
                    <td><?php echo $item['id_orders']; ?></td>
                    <td><?php echo $item['fullname']; ?></td>
                    <td><?php echo $item['email']; ?></td>
                    <td><?php echo $item['phone_number']; ?></td>
                    <td><?php echo $item['order_date']; ?></td>
                    <td><?php echo $item['address']; ?></td>
                    <td><?php echo $item['total_money']; ?></td>
                    <td>
                        <?php if ($item['status'] == 0) : ?>
                            <span class="badge badge-danger">Chưa xử lý</span>
                        <?php else : ?>
                            <span class="badge badge-success">Đã giao hàng</span>
                        <?php endif; ?>

                    </td>
                    <td>
                        <!-- Đơn hàng nào chưa thanh toán thì được phép phép Xóa, Sửa -->
                        <?php if ($item['status'] == 0) : ?>
                            <!-- Nút sửa, bấm vào sẽ hiển thị form hiệu chỉnh thông tin dựa vào khóa chính `dh_ma` -->
                            <a href="orders_edit.php?id_orders=<?= $item['id_orders'] ?>" class="btn btn-warning">
                                Sửa
                            </a>
                            <!-- Nút xóa, bấm vào sẽ xóa thông tin dựa vào khóa chính `dh_ma` -->
                            <button type="button" class="btn btn-danger btnDelete" data-id_orders="<?= $item['id_orders'] ?>">
                                Xóa
                            </button>
                        <?php else : ?>
                            <!-- Đơn hàng nào đã thanh toán rồi thì không cho phép Xóa, Sửa (không hiển thị 2 nút này ra giao diện) 
                            - Cho phép IN ấn ra giấy
                            -->
                            <!-- Nút in, bấm vào sẽ hiển thị mẫu in thông tin dựa vào khóa chính `dh_ma` -->
                            <a href="orders_print.php?id_orders=<?= $item['id_orders'] ?>" class="btn btn-success">
                                In
                            </a>
                        <?php endif; ?>
                    </td>
                    <!-- <td>
                        <a href="" class="btn btn-dark">Sửa</a>
                    
                        <a href="" class="btn btn-dark">Xóa</a>
                    </td> -->
                </tr>
                        
            </tbody>
            <?php endforeach; ?>
        </table>
    </div>
</div>

<!-- SweetAlert -->
<script src="/php/myhand/assets/vendor/sweetalert/sweetalert.min.js"></script>
    <script>
        $(document).ready(function() {
            // Yêu cầu DataTable quản lý datatable #tblDanhSach
            $('#tbl_orders').DataTable({
                dom: 'Blfrtip',
                buttons: [
                    'copy', 'excel', 'pdf'
                ]
            });

            // Cảnh báo khi xóa
            // 1. Đăng ký sự kiện click cho các phần tử (element) đang áp dụng class .btnDelete
            $('.btnDelete').click(function() {
                // Click hanlder
                // 2. Sử dụng thư viện SweetAlert để hiện cảnh báo khi bấm nút xóa
                swal({
                        title: "Bạn có chắc chắn muốn xóa?",
                        text: "Một khi đã xóa, không thể phục hồi....",
                        icon: "warning",
                        buttons: true,
                        dangerMode: true,
                    })
                    .then((willDelete) => {
                        if (willDelete) { // Nếu đồng ý xóa

                            // 3. Lấy giá trị của thuộc tính (custom attribute HTML) 'dh_ma'
                            // var dh_ma = $(this).attr('data-dh_ma');
                            var id_orders = $(this).data('id_orders');
                            var url = "delete.php?id_orders=" + id;

                            // Điều hướng qua trang xóa với REQUEST GET, có tham số dh_ma=...
                            location.href = url;
                        } else { // Nếu không đồng ý xóa
                            header('location:order.php');
                            // swal("Cẩn thận hơn nhé!");
                        }
                    });

            });
        });
    </script>


