<!DOCTYPE html>
<html lang="en">
    <body>
        <?php include('nav.php');?>
        <?php
            // include 'admin/db/database.php';
            $sql = "SELECT * FROM category";
            $category = executeResult($sql);
            $query = "SELECT * FROM product";
            $product = executeResult($query);
        ?>
        <section id="featured" class="my-5 py-5">
            <div class="container mt-5 py-5">
                <h2 class="font-weight-bold">Our Featured</h2>
                <hr>                
                <p>Here you can check out our new products with fair price on rymo.</p>
                <?php foreach($category as $key => $value):?>    
                <?php echo $value['name_category']?>
                <?php endforeach?>
            </div>
            
            <div class="row mx-auto container-fluid">
                <?php foreach($product as $key => $value): 
                ?>
                <div onclick="window.location.href='product_detail_DW1.html?id_product='" class="product text-center col-lg-3 col-md-4 col-12">
                    <img class="img-fluid mb-3" src="images/<?php echo $value['images']?>" alt="">
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h5 class="p-name"><?php echo $value['title']?></h5>
                    <h4 class="p-price"><?php echo number_format($value['discount'])?><sup>đ</sup></h4>
                    <h5 class="p-price"><del><?php echo number_format($value['price'])?><sup>đ</sup></del></h5>
                    <button class="buy-btn">Show More</button>
                </div>
                <?php endforeach?>

                <nav aria-label="...">
                    <ul class="pagination mt-5">
                        <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item" aria-current="page">
                            <a class="page-link" href="#">2</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#">Next</a>
                        </li>
                    </ul>
                </nav>

            </div>
        </section>

    <?php include('footer.php');?>
    </body>
</html>