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
                    <h6>S???n ph???m / <?php echo($value3['name_category'])?></h6>                    
                    <h3 class="py-3"><?php echo($value3['name_category'])?> <?php echo $value['title']?></h3>
                    <?php endforeach?>
                    <h6>M??: WDA00000104 (M?? qu???c t???: <?php echo $value['title']?>)</h6>
                    <hr>
                    <div class="product-brands">
                        <h4 class="title"><span>Th????ng Hi???u ?????c Quy???n Tr??n Th??? Gi???i</span></h4>
                        <a href="" data-wpel-link="internal">
                            <img width="268" height="125" src="images/Brand_DW.png" title="Daniel Wellington (DW)" alt="Daniel Wellington (DW)" class="brand-image">
                        </a>
                    </div>
                    <h2 class="prices py-2"><i><small><del><?php echo number_format($value['price'])?><sup>??</sup></del></small></i>&rarr;<?php echo number_format($value['discount'])?><sup>??</sup><i><small style="color:red">(Gi???m 15%)</small></i></h2>
                    <div class="numbers">
                        <form action="cart.php?action=add" method="post">
                            <h3>H??y ch???n s??? l?????ng : <input type="number" value="1" name="num[<?php echo $id_product; ?>]" min=1></h3>
                            <button class="buy-btn">Th??m v??o gi??? h??ng</button>
                        </form>
                    </div>
                </div>
                <?php endforeach?>
            </div>
        </section>

        <section class="container information_product my-5 pt-5">
            <div class="product-detail-under">
                <div class="product-detail-under-top">
                    Th??ng tin s???n ph???m
                </div>
                <div class="product-detail-under-content-big">
                    <div class="d-flex flex-row">
                        <div class="p-2 chitiet">
                            <p>Chi ti???t</p>
                        </div>
                        <div class="p-2 title-item">
                            <p>&verbar;</p>
                        </div>
                        <div class="p-2 vanchuyen">
                            <p>Th??ng tin v???n chuy???n</p>
                        </div>
                        <div class="p-2 title-item">
                            <p>&verbar;</p>
                        </div>
                        <div class="p-2 thanhtoan">
                            <p>Ph????ng th???c thanh to??n</p>                    
                        </div>
                        <div class="p-2 title-item">
                            <p>&verbar;</p>
                        </div>
                        <div class="p-2 doitra">
                            <p>Ch??nh s??ch ?????i & tr???</p>                         
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
                                            <meta itemprop="material" content="Cao v?? th??p kh??ng g???">
                                            <span class="css-1fgw2as DetailsTable__Details-sc-6kksbc-2 DetailsTable__DetailsText-sc-6kksbc-4 izyYLc kZfTqn">Cao v?? th??p kh??ng g???</span>
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
                                            <span class="css-1fgw2as DetailsTable__Details-sc-6kksbc-2 DetailsTable__DetailsText-sc-6kksbc-4 izyYLc kZfTqn">??en</span>
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
                                    <p>??? Giao h??ng mi???n ph?? tr??n to??n qu???c 
                                        <br><br>
                                        ??? 3-5 ng??y v???n chuy???n 
                                        <div class="logo-chuyen-phat">
                                            <div class="row m-auto py-0">
                                                ??? M???t s??? c??ng ty chuy???n ph??t nhanh uy t??n:
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
                                    <p>Simple Watch cung c???p c??c ph????ng th???c thanh to??n an to??n v?? b???n c?? th??? ch???n thanh to??n b???ng Visa, Mastercard, JCB, thanh to??n qua ti???n m???t, internet banking ho???c tr??? g??p 0%.</p>
                                    <div class="logo-chuyen-phat">
                                        <div class="row m-0 py-0">
                                            <img class="img-lazyload icon-visa" data-src="" alt="" style="opacity: 1;" src="images/Ph????ng th???c thanh to??n/visa.svg">
                                            &ensp;
                                            <img class="img-lazyload icon-visa" data-src="" alt="" style="opacity: 1;" src="images/Ph????ng th???c thanh to??n/mastercard.svg">
                                            &ensp;
                                            <img class="img-lazyload icon-visa" data-src="" alt="" style="opacity: 1;" src="images/Ph????ng th???c thanh to??n/jcb.svg">
                                            &ensp;                                                                                                                        
                                            <img class="img-lazyload icon-visa" data-src="" alt="" style="opacity: 1;" src="images/Ph????ng th???c thanh to??n/thanhtoantienmat.png">
                                            <img class="img-lazyload icon-visa" data-src="" alt="" style="opacity: 1;" src="images/Ph????ng th???c thanh to??n/internetBanking.png">
                                            <img class="img-lazyload icon-visa" data-src="" alt="" style="opacity: 1;" src="images/Ph????ng th???c thanh to??n/tragop.png">
                                        </div>
                                    </div>                                                                                    
                                    
                                </div>
                            </div>
                        </div>

                        <div class="product-detail-under-content-doitra">
                            <div class="row m-0 py-1">
                                <div class="col">
                                    <p>
                                        ??? Ch??ng t??i cung c???p tr??? l???i mi???n ph?? cho t???t c??? c??c s???n ph???m c???a ch??ng t??i. B???n c?? 
                                        th??? tr??? l???i c??c s???n ph???m b???n ???? mua trong v??ng 30 ng??y k??? t??? ng??y nh???n ???????c (c??c) m???t 
                                        h??ng ????? ???????c ho??n ti???n ?????y ?????.
                                        <br>
                                        ??? Trong tr?????ng h???p b???n mu???n tr??? l???i ????n mua h??ng c???a m??nh, t???t c??? c??c m???t h??ng c???n 
                                        ???????c tr??? l???i n???u b???n ???? ?????t m???t b??? qu?? t???ng.
                                        <br>
                                        ??? Xin l??u ?? r???ng c??c m???t h??ng ???Mi???n ph????? (ho???c b???t k??? s???n ph???m mi???n ph?? n??o nh???n ???????c 
                                        nh?? m???t ph???n c???a ??u ????i khuy???n m???i) kh??ng ????? ??i???u ki???n ????? ?????i v?? ph???i ???????c tr??? l???i 
                                        c??ng v???i c??c m???t h??ng kh??c trong ????n ?????t h??ng c???a b???n n???u b???n ??ang tr??? l???i ????n ?????t 
                                        h??ng c???a m??nh ????? ???????c ho??n l???i ti???n.
                                        <br>
                                        ??? Vui l??ng l??u ?? r???ng sau khi ?????ng h??? ???? ???????c ??i???u ch???nh ????? ph?? h???p v???i c??? tay c???a b???n,
                                         b???o h??nh v???n c??n hi???u l???c nh??ng b???n kh??ng th??? tr??? l???i ?????ng h???.
                                        <br>
                                        ??? Vui l??ng l??u ?? r???ng c??c m???t h??ng mua tr???c tuy???n kh??ng th??? ???????c tr??? l???i cho m???t c???a 
                                        h??ng b??n l??? ?????a ph????ng.
                                    </p>                            
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Ph???n ch??? ????nh gi?? c???a kh??ch h??ng -->
        <section>
            <hr class="mx-auto">
            <h1 class="text-center" style="font-family: 'Courier New', Courier, monospace; color:coral">????nh gi?? c???a kh??ch h??ng</h1>
            <p class="text-center">D?????i ????y l?? m???t s??? ????nh gi?? c???a kh??ch h??ng khi h??? ???? tr???i nghi???m s???n ph???m c???a ch??ng t??i.</p>
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
            <h1 class="text-center" style="font-family: 'Courier New', Courier, monospace; color:coral;">B??nh lu???n</h1>
            <p class="text-center">N???u b???n c?? nh???ng th???c m???c g??, hay c?? nh???ng ????nh gi?? g?? v??? s???n ph???m c???a ch??ng t??i th?? h??y g???i nh???n x??t ??? ph???n ph??a d?????i nh??!!!</p>
            <div class="row">
                <form method="POST" class="frame" action="">
                    <input type="text" name="fullname" placeholder="H??? v?? t??n...">
                    <input type="email" name="email" placeholder="?????a ch??? email...">
                    <textarea name="message" placeholder="H??y vi???t nh???n x??t c???a b???n ??? ????y..."></textarea>
                    <button type="submit" name="submit">G???i b??nh lu???n</button>                
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
                echo '<script>alert("G???i ph???n h???i th??nh c??ng !")</script>';     
            }
        ?>

        <?php include('footer.php');?>
        <!--Chuy???n ?????i ???nh trong ph???n Product Details-->
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

        <!-- N??t s??? c???a product_detail -->
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