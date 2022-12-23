<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="css/swiper-bundle.min.css">

        <link rel="stylesheet" href="css/product_detail.css"> 
        <title>Product details</title>
    </head>
    <body>
        <!--NAVIGATION-->
        <?php include('nav.php');?>
        <?php 
            if(isset($_GET["id_product"]))
            {
                $id_product = $_GET['id_product'];
                $sql = "SELECT * FROM `product` WHERE `id_product` = '$id_product';";
                $product = executeResult($sql);
                $sql1 = "SELECT * FROM `galery` WHERE `product_id` = '$id_product';";
                $galery = executeResult($sql1);

                $query = "SELECT * FROM category INNER JOIN product ON category.id_category = product.category_id WHERE `id_product` = '$id_product'";
                $category_product = executeResult($query);
                
            }elseif (!isset($_GET["id_product"])) {
                echo "<script>window.location.href='shop.php'</script>";
            }
            $sql2 = "SELECT * FROM feedback";
            $feedback = executeResult($sql2);
        ?>

        <section class="container sproduct my-5 pt-2">
            <div class="row mt-5">
                <?php foreach($product as $key => $value): 
                ?>
                <div class="col-lg-5 col-md-12 col-12">                    
                    <img class="img-fluid w-100 pb-1" src="images/<?php echo $value['images'];?>" id="MainImg" alt="">
                    <div class="small-img-group">
                        <?php foreach($galery as $key1 => $value1): 
                        ?>
                        <div class="small-img-col">
                            <img src="images/<?php echo $value1['images'];?>" width="100%" class="small-img" alt="">
                        </div>
                        <?php endforeach?>
                    </div>
                </div>

                <div id="information" class="col-lg-7 col-md-12 col-12">
                    <?php foreach($category_product as $key3 => $value3): 
                    ?>
                    <h6>Sản phẩm / <?php echo($value3['name_category'])?></h6>                    
                    <h3 class="py-3"><?php echo($value3['name_category'])?> <?php echo $value['title']?></h3>
                    <?php endforeach?>
                    <h6>Mã: WDA00000104 (Mã quốc tế: <?php echo $value['title']?>)</h6>
                    <hr>
                    <div class="product-brands">
                        <h4 class="title"><span>Thương Hiệu Độc Quyền Trên Thế Giới</span></h4>
                        <a href="" data-wpel-link="internal">
                            <img width="268" height="125" src="images/Brand_DW.png" title="Daniel Wellington (DW)" alt="Daniel Wellington (DW)" class="brand-image">
                        </a>
                    </div>
                    <h2 class="prices py-2"><i><small><del><?php echo number_format($value['price'])?><sup>đ</sup></del></small></i>&rarr;<?php echo number_format($value['discount'])?><sup>đ</sup><i><small style="color:red">(Giảm 15%)</small></i></h2>
                    <div class="numbers">
                        <form action="cart.php?action=add" method="post">
                            <h3>Hãy chọn số lượng : <input type="number" value="1" name="num[<?php echo $id_product; ?>]" min=1></h3>
                            <button class="buy-btn">Thêm vào giỏ hàng</button>
                        </form>
                    </div>
                </div>
                <?php endforeach?>
            </div>
        </section>

        <section class="container information_product my-5 pt-5">
            <div class="product-detail-under">
                <div class="product-detail-under-top">
                    Thông tin sản phẩm
                </div>
                <div class="product-detail-under-content-big">
                    <div class="d-flex flex-row">
                        <div class="p-2 chitiet">
                            <p>Chi tiết</p>
                        </div>
                        <div class="p-2 title-item">
                            <p>&verbar;</p>
                        </div>
                        <div class="p-2 vanchuyen">
                            <p>Thông tin vận chuyển</p>
                        </div>
                        <div class="p-2 title-item">
                            <p>&verbar;</p>
                        </div>
                        <div class="p-2 thanhtoan">
                            <p>Phương thức thanh toán</p>                    
                        </div>
                        <div class="p-2 title-item">
                            <p>&verbar;</p>
                        </div>
                        <div class="p-2 doitra">
                            <p>Chính sách đổi & trả</p>                         
                        </div>
                    </div>
                    <div class="product-detail-under-content">
                        <div class="product-detail-under-content-chitiet">
                            <div class="row m-0 py-2">
                                <?php foreach($product as $key => $value): 
                                ?>
                                <div class="col-lg-6 col-md-6">
                                    <?php echo $value['descript']?>
                                </div>
                                <?php endforeach?>
                                <div class="col-lg-6 col-md-6">
                                    <div class="DetailsTable__Container-sc-6kksbc-0 kmjgzn">
                                        <div class="DetailsTable__Row-sc-6kksbc-5 jdSzSj">
                                            <span class="css-1fgw2as DetailsTable__Details-sc-6kksbc-2 DetailsTable__DetailsTitle-sc-6kksbc-3 izyYLc vPxeN">SKU</span>
                                            <meta itemprop="sku" content="DW01200005">
                                            <span class="css-1fgw2as DetailsTable__Details-sc-6kksbc-2 DetailsTable__DetailsText-sc-6kksbc-4 izyYLc kZfTqn">DW01200005</span>
                                        </div>
                                        <div class="DetailsTable__Row-sc-6kksbc-5 jdSzSj">
                                            <span class="css-1fgw2as DetailsTable__Details-sc-6kksbc-2 DetailsTable__DetailsTitle-sc-6kksbc-3 izyYLc vPxeN">Style with</span>
                                            <span class="css-1fgw2as DetailsTable__Details-sc-6kksbc-2 DetailsTable__DetailsText-sc-6kksbc-4 izyYLc kZfTqn">Apple Watch 40mm</span>
                                        </div>
                                        <div class="DetailsTable__Row-sc-6kksbc-5 jdSzSj">
                                            <span class="css-1fgw2as DetailsTable__Details-sc-6kksbc-2 DetailsTable__DetailsTitle-sc-6kksbc-3 izyYLc vPxeN">Compatibility</span>
                                            <meta itemprop="productSupported" content="Apple Watch series 6, 5, 4 and SE">
                                            <span class="css-1fgw2as DetailsTable__Details-sc-6kksbc-2 DetailsTable__DetailsText-sc-6kksbc-4 izyYLc kZfTqn">Apple Watch series 6, 5, 4 and SE</span>
                                        </div>
                                        <div class="DetailsTable__Row-sc-6kksbc-5 jdSzSj">
                                            <span class="css-1fgw2as DetailsTable__Details-sc-6kksbc-2 DetailsTable__DetailsTitle-sc-6kksbc-3 izyYLc vPxeN">Case Measurements</span>
                                            <span class="css-1fgw2as DetailsTable__Details-sc-6kksbc-2 DetailsTable__DetailsText-sc-6kksbc-4 izyYLc kZfTqn">42x42mm</span>
                                        </div>
                                        <div class="DetailsTable__Row-sc-6kksbc-5 jdSzSj">
                                            <span class="css-1fgw2as DetailsTable__Details-sc-6kksbc-2 DetailsTable__DetailsTitle-sc-6kksbc-3 izyYLc vPxeN">Case thickness</span>
                                            <span class="css-1fgw2as DetailsTable__Details-sc-6kksbc-2 DetailsTable__DetailsText-sc-6kksbc-4 izyYLc kZfTqn">13,05mm</span>
                                        </div>
                                        <div class="DetailsTable__Row-sc-6kksbc-5 jdSzSj">
                                            <span class="css-1fgw2as DetailsTable__Details-sc-6kksbc-2 DetailsTable__DetailsTitle-sc-6kksbc-3 izyYLc vPxeN">Material</span>
                                            <meta itemprop="material" content="Cao và thép không gỉ">
                                            <span class="css-1fgw2as DetailsTable__Details-sc-6kksbc-2 DetailsTable__DetailsText-sc-6kksbc-4 izyYLc kZfTqn">Cao và thép không gỉ</span>
                                        </div>
                                        <div class="DetailsTable__Row-sc-6kksbc-5 jdSzSj">
                                            <span class="css-1fgw2as DetailsTable__Details-sc-6kksbc-2 DetailsTable__DetailsTitle-sc-6kksbc-3 izyYLc vPxeN">Strap width</span><span class="css-1fgw2as DetailsTable__Details-sc-6kksbc-2 DetailsTable__DetailsText-sc-6kksbc-4 izyYLc kZfTqn">20mm</span>
                                        </div>
                                        <div class="DetailsTable__Row-sc-6kksbc-5 jdSzSj">
                                            <span class="css-1fgw2as DetailsTable__Details-sc-6kksbc-2 DetailsTable__DetailsTitle-sc-6kksbc-3 izyYLc vPxeN">Strap material</span>
                                            <span class="css-1fgw2as DetailsTable__Details-sc-6kksbc-2 DetailsTable__DetailsText-sc-6kksbc-4 izyYLc kZfTqn">Rubber</span>
                                        </div>
                                        <div class="DetailsTable__Row-sc-6kksbc-5 jdSzSj">
                                            <span class="css-1fgw2as DetailsTable__Details-sc-6kksbc-2 DetailsTable__DetailsTitle-sc-6kksbc-3 izyYLc vPxeN">Strap colour</span>
                                            <span class="css-1fgw2as DetailsTable__Details-sc-6kksbc-2 DetailsTable__DetailsText-sc-6kksbc-4 izyYLc kZfTqn">Đen</span>
                                        </div>
                                        <div class="DetailsTable__Row-sc-6kksbc-5 jdSzSj">
                                            <span class="css-1fgw2as DetailsTable__Details-sc-6kksbc-2 DetailsTable__DetailsTitle-sc-6kksbc-3 izyYLc vPxeN">Adjustable length</span>
                                            <span class="css-1fgw2as DetailsTable__Details-sc-6kksbc-2 DetailsTable__DetailsText-sc-6kksbc-4 izyYLc kZfTqn">135-195mm</span>
                                        </div>
                                    </div>
                                </div>
                            </div>    
                        </div>

                        <div class="product-detail-under-content-vanchuyen">
                            <div class="row m-0 py-1">
                                <div class="col-lg-10 col-md-6">
                                    <p>• Giao hàng miễn phí trên toàn quốc 
                                        <br><br>
                                        • 3-5 ngày vận chuyển 
                                        <div class="logo-chuyen-phat">
                                            <div class="row m-auto py-0">
                                                • Một số công ty chuyển phát nhanh uy tín:
                                                <img class="img-fluid col-lg-1 col-md-3 col-6" src="images/Logo_chuyen_phat_nhanh/GiaoHangNhanh.png" width="100%"  alt="">
                                                <img class="img-fluid col-lg-1 col-md-3 col-6" src="images/Logo_chuyen_phat_nhanh/KExpress.png" width="100%"  alt="">
                                                <img class="img-fluid col-lg-1 col-md-3 col-6" src="images/Logo_chuyen_phat_nhanh/VNPost.png" width="100%"  alt="">
                                                <img class="img-fluid col-lg-1 col-md-3 col-6" src="images/Logo_chuyen_phat_nhanh/VTPost.jpg" width="100%"  alt="">
                                            </div>
                                        </div>                                                                                    
                                     </p>
                                </div>
                            </div>
                        </div>

                        <div class="product-detail-under-content-thanhtoan">
                            <div class="row m-0 py-1">
                                <div class="col">
                                    <p>Simple Watch cung cấp các phương thức thanh toán an toàn và bạn có thể chọn thanh toán bằng Visa, Mastercard, JCB, thanh toán qua tiền mặt, internet banking hoặc trả góp 0%.</p>
                                    <div class="logo-chuyen-phat">
                                        <div class="row m-0 py-0">
                                            <img class="img-lazyload icon-visa" data-src="" alt="" style="opacity: 1;" src="images/Phương thức thanh toán/visa.svg">
                                            &ensp;
                                            <img class="img-lazyload icon-visa" data-src="" alt="" style="opacity: 1;" src="images/Phương thức thanh toán/mastercard.svg">
                                            &ensp;
                                            <img class="img-lazyload icon-visa" data-src="" alt="" style="opacity: 1;" src="images/Phương thức thanh toán/jcb.svg">
                                            &ensp;                                                                                                                        
                                            <img class="img-lazyload icon-visa" data-src="" alt="" style="opacity: 1;" src="images/Phương thức thanh toán/thanhtoantienmat.png">
                                            <img class="img-lazyload icon-visa" data-src="" alt="" style="opacity: 1;" src="images/Phương thức thanh toán/internetBanking.png">
                                            <img class="img-lazyload icon-visa" data-src="" alt="" style="opacity: 1;" src="images/Phương thức thanh toán/tragop.png">
                                        </div>
                                    </div>                                                                                    
                                    
                                </div>
                            </div>
                        </div>

                        <div class="product-detail-under-content-doitra">
                            <div class="row m-0 py-1">
                                <div class="col">
                                    <p>
                                        • Chúng tôi cung cấp trả lại miễn phí cho tất cả các sản phẩm của chúng tôi. Bạn có 
                                        thể trả lại các sản phẩm bạn đã mua trong vòng 30 ngày kể từ ngày nhận được (các) mặt 
                                        hàng để được hoàn tiền đầy đủ.
                                        <br>
                                        • Trong trường hợp bạn muốn trả lại đơn mua hàng của mình, tất cả các mặt hàng cần 
                                        được trả lại nếu bạn đã đặt một bộ quà tặng.
                                        <br>
                                        • Xin lưu ý rằng các mặt hàng “Miễn phí” (hoặc bất kỳ sản phẩm miễn phí nào nhận được 
                                        như một phần của ưu đãi khuyến mại) không đủ điều kiện để đổi và phải được trả lại 
                                        cùng với các mặt hàng khác trong đơn đặt hàng của bạn nếu bạn đang trả lại đơn đặt 
                                        hàng của mình để được hoàn lại tiền.
                                        <br>
                                        • Vui lòng lưu ý rằng sau khi đồng hồ đã được điều chỉnh để phù hợp với cổ tay của bạn,
                                         bảo hành vẫn còn hiệu lực nhưng bạn không thể trả lại đồng hồ.
                                        <br>
                                        • Vui lòng lưu ý rằng các mặt hàng mua trực tuyến không thể được trả lại cho một cửa 
                                        hàng bán lẻ địa phương.
                                    </p>                            
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Phần chữ đánh giá của khách hàng -->
        <section>
            <hr class="mx-auto">
            <h1 class="text-center" style="font-family: 'Courier New', Courier, monospace; color:coral">Đánh giá của khách hàng</h1>
            <p class="text-center">Dưới đây là một số đánh giá của khách hàng khi họ đã trải nghiệm sản phẩm của chúng tôi.</p>
        </section>

        <section class="danh-gia-khach-hang">            
            <div class="slide-container swiper">
                <div class="slide-content">
                    <div class="card-wrapper swiper-wrapper">
                        <?php foreach($feedback as $key5 => $value5): 
                        ?>
                        <div class="card swiper-slide">                            
                            <div class="image-content">
                                <span class="overlay"></span>
                                <div class="card-image">
                                    <img src="images/user_img/user.png" alt="" class="card-img">
                                </div>
                            </div>                                
                            <div class="card-content">
                                <h2 class="name"><?php echo $value5['fullname']?></h2>
                                <p class="description"><?php echo $value5['message']?></p>    
                            </div>                            
                        </div>
                        <?php endforeach?>
                    </div>
                </div>
                <div class="swiper-button-next swiper-navBtn"></div>
                <div class="swiper-button-prev swiper-navBtn"></div>
                <div class="swiper-pagination"></div>
            </div>
        </section>

        <section class="comment-box" style="margin-bottom: 40px;">
            <h1 class="text-center" style="font-family: 'Courier New', Courier, monospace; color:coral;">Bình luận</h1>
            <p class="text-center">Nếu bạn có những thắc mắc gì, hay có những đánh giá gì về sản phẩm của chúng tôi thì hãy gửi nhận xét ở phần phía dưới nhé!!!</p>
            <div class="row">
                <form method="POST" class="frame" action="">
                    <input type="text" name="fullname" placeholder="Họ và tên...">
                    <input type="email" name="email" placeholder="Địa chỉ email...">
                    <textarea name="message" placeholder="Hãy viết nhận xét của bạn ở đây..."></textarea>
                    <button type="submit" name="submit">Gửi bình luận</button>                
                </form>
            </div>
        </section>

        <?php 
            if(isset($_POST['submit']) && isset($_GET["id_product"])){
                $fullname = $_POST['fullname'];
                $message = $_POST['message'];
                $email = $_POST['email'];
    
                $sql = "INSERT INTO `feedback`(`fullname`, `email`, `message`) VALUES ('$fullname','$email', '$message')";
                $result = execute($sql);
                echo '<script>alert("Gửi phản hồi thành công !")</script>';     
            }
        ?>

        <?php include('footer.php');?>
        <!--Chuyển đổi ảnh trong phần Product Details-->
        <script>
            var MainImg = document.getElementById('MainImg');
            var smalling = document.getElementsByClassName('small-img');

            smalling[0].onclick = function(){
                MainImg.src = smalling[0].src;
            }
            smalling[1].onclick = function(){
                MainImg.src = smalling[1].src;
            }
            smalling[2].onclick = function(){
                MainImg.src = smalling[2].src;
            }
            smalling[3].onclick = function(){
                MainImg.src = smalling[3].src;
            }
        </script>

        <!--Product-information-->
        <script>
            const doitra = document.querySelector(".doitra");
            const chitiet = document.querySelector(".chitiet");
            const thanhtoan = document.querySelector(".thanhtoan");
            const vanchuyen = document.querySelector(".vanchuyen");

            if(doitra){
                doitra.addEventListener("click", function(){
                    document.querySelector(".product-detail-under-content-chitiet").style.display = "none";
                    document.querySelector(".product-detail-under-content-vanchuyen").style.display = "none";
                    document.querySelector(".product-detail-under-content-thanhtoan").style.display = "none";
                    document.querySelector(".product-detail-under-content-doitra").style.display = "block";
                })
            }
            if(chitiet){
                chitiet.addEventListener("click", function(){
                    document.querySelector(".product-detail-under-content-chitiet").style.display = "block";
                    document.querySelector(".product-detail-under-content-doitra").style.display = "none";
                    document.querySelector(".product-detail-under-content-vanchuyen").style.display = "none";
                    document.querySelector(".product-detail-under-content-thanhtoan").style.display = "none";
                })
            }
            if(thanhtoan){
                thanhtoan.addEventListener("click", function(){
                    document.querySelector(".product-detail-under-content-thanhtoan").style.display = "block";
                    document.querySelector(".product-detail-under-content-vanchuyen").style.display = "none";
                    document.querySelector(".product-detail-under-content-chitiet").style.display = "none";
                    document.querySelector(".product-detail-under-content-doitra").style.display = "none";
                })
            }
            if(vanchuyen){
                vanchuyen.addEventListener("click", function(){
                    document.querySelector(".product-detail-under-content-vanchuyen").style.display = "block";
                    document.querySelector(".product-detail-under-content-thanhtoan").style.display = "none";
                    document.querySelector(".product-detail-under-content-chitiet").style.display = "none";
                    document.querySelector(".product-detail-under-content-doitra").style.display = "none";
                })
            }
        </script>

        <!-- Nút sổ của product_detail -->
        <script>
            const butTon = document.querySelector(".product-detail-under-top");
            if(butTon){
                butTon.addEventListener("click", function(){
                    document.querySelector(".product-detail-under-content-big").classList.toggle("activeB");
                })
            }
        </script>

        <!-- Swiper JS -->
        <script src="css/swiper-bundle.min.js"></script>

        <!-- Initialize Swiper -->
        <script>
            var swiper = new Swiper(".slide-content", {
                slidesPerView: 3,
                spaceBetween: 25,
                loop: true,
                centerSlide:'true',
                fade:'true',
                grabCursor: 'true',
                pagination: {
                    el: ".swiper-pagination",
                    clickable: true,
                    dynamicBullets: true,
                },
                navigation:{
                    nextEl:".swiper-button-next",
                    prevEl: ".swiper-button-prev",
                },

                breakpoints:{
                    0: {
                        slidesPerView: 1,
                    },
                    520: {
                        slidesPerView: 2,
                    },
                    950: {
                        slidesPerView: 3,
                    }
                }
            });
        </script>

    </body>

</html>