<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Product details</title>

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

        <!-- Link Swiper's CSS -->
        <link rel="stylesheet" href="swiper-bundle.min.css">

        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <!--NAVIGATION-->
        <?php include("nav.php")?>
        <?php 
            if(isset($_GET["id_product"]))
            {
                $id_product = $_GET['id_product'];
                $sql = "SELECT * FROM `product` WHERE `id_product` = '$id_product';";
                $product = executeResult($sql);
                $sql1 = "SELECT * FROM `galery` WHERE `product_id` = '$id_product';";
                $galery = executeResult($sql1);
            }
        ?>

        <?php

        ?>

        <section class="container sproduct my-5 pt-5">
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
                    <h6>Home / Watch Men</h6>
                    <h3 class="py-3">Đồng Hồ Daniel Wellington Nam <?php echo $value['title']?></h3>
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
                    <div class="product-detail-under-content-title row">
                        <div class="product-detail-under-content-title-item chitiet">
                            <p>Chi tiết</p>
                        </div>
                        <div class="product-detail-under-content-title-item">
                            <p>&verbar;</p>
                        </div>
                        <div class="product-detail-under-content-title-item vanchuyen">
                            <p>Thông tin vận chuyển</p>
                        </div>
                        <div class="product-detail-under-content-title-item">
                            <p>&verbar;</p>
                        </div>
                        <div class="product-detail-under-content-title-item thanhtoan">
                            <p>Phương thức thanh toán</p>                         
                        </div>
                        <div class="product-detail-under-content-title-item">
                            <p>&verbar;</p>
                        </div>
                        <div class="product-detail-under-content-title-item doitra">
                            <p>Chính sách đổi & trả</p>                         
                        </div>
                    </div>
                    <div class="product-detail-under-content">
                        <div class="product-detail-under-content-chitiet">
                            <div class="row m-0 py-2">
                                <div class="col-lg-6 col-md-6">
                                    T-CLASSIC - THIẾT KẾ CỔ ĐIỂN KHÔNG BAO GIỜ LỖI MỐT <br><br>
                                    Trong bộ sưu tập T-Classic, dễ dàng tìm thấy những thuộc tính Nổi bật và những kỹ thuật 
                                    Tốt nhất từ Tissot, đem đến sự chính xác và chất lượng vượt trội từ với nhiều dòng sản 
                                    phẩm khác nhau. Một số mẫu trong bộ sưu tập T-classic luôn là best-seller trên toàn cầu 
                                    và đã giành được giải thưởng uy tín trong các cuộc thi đồng hồ. Thiết kế của đồng hồ 
                                    T-Classic là không bao giờ lỗi mốt, một số mẫu đã luôn tồn tại trong hơn 20 năm.
                                </div>
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
                                <div class="col-lg-10 col-md-6">
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
                                <div class="col-lg-10 col-md-6">
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
                        <div class="card swiper-slide">
                            <div class="image-content">
                                <span class="overlay"></span>
                                <div class="card-image">
                                    <img src="images/user_img/pic-1.png" alt="" class="card-img">
                                </div>
                            </div>    
                            <div class="card-content">
                                <h2 class="name">Nguyen Van B</h2>
                                <p class="description">Hiện tại, bộ phim "Thắp sáng anh, sưởi ấm em" chuyển thể từ tiểu thuyết "Chiếc bật lửa và váy công chúa" đã phá 10.000 điểm, gia nhập list bộ phim đã phá 10.000 điểm trên Youku như Hạnh Phúc Đến Vạn Gia, Băng Vũ Hoả, Khu Rừng Nhỏ Của Hai Người, Dữ Quân Sơ Tương Thức, Trọng Sinh Chi Môn, Trầm Vụn Hương Phai. </p>    
                            </div>
                        </div>
                        <div class="card swiper-slide">
                            <div class="image-content">
                                <span class="overlay"></span>
                                <div class="card-image">
                                    <img src="images/user_img/pic-1.png" alt="" class="card-img">
                                </div>
                            </div>    
                            <div class="card-content">
                                <h2 class="name">Nguyen Van B</h2>
                                <p class="description">Hiện tại, bộ phim "Thắp sáng anh, sưởi ấm em" chuyển thể từ tiểu thuyết "Chiếc bật lửa và váy công chúa" đã phá 10.000 điểm, gia nhập list bộ phim đã phá 10.000 điểm trên Youku như Hạnh Phúc Đến Vạn Gia, Băng Vũ Hoả, Khu Rừng Nhỏ Của Hai Người, Dữ Quân Sơ Tương Thức, Trọng Sinh Chi Môn, Trầm Vụn Hương Phai. </p>    
                            </div>
                        </div>
                        <div class="card swiper-slide">
                            <div class="image-content">
                                <span class="overlay"></span>
                                <div class="card-image">
                                    <img src="images/user_img/pic-1.png" alt="" class="card-img">
                                </div>
                            </div>    
                            <div class="card-content">
                                <h2 class="name">Nguyen Van B</h2>
                                <p class="description">Hiện tại, bộ phim "Thắp sáng anh, sưởi ấm em" chuyển thể từ tiểu thuyết "Chiếc bật lửa và váy công chúa" đã phá 10.000 điểm, gia nhập list bộ phim đã phá 10.000 điểm trên Youku như Hạnh Phúc Đến Vạn Gia, Băng Vũ Hoả, Khu Rừng Nhỏ Của Hai Người, Dữ Quân Sơ Tương Thức, Trọng Sinh Chi Môn, Trầm Vụn Hương Phai. </p>    
                            </div>
                        </div>
                        <div class="card swiper-slide">
                            <div class="image-content">
                                <span class="overlay"></span>
                                <div class="card-image">
                                    <img src="images/user_img/pic-1.png" alt="" class="card-img">
                                </div>
                            </div>    
                            <div class="card-content">
                                <h2 class="name">Nguyen Van B</h2>
                                <p class="description">Hiện tại, bộ phim "Thắp sáng anh, sưởi ấm em" chuyển thể từ tiểu thuyết "Chiếc bật lửa và váy công chúa" đã phá 10.000 điểm, gia nhập list bộ phim đã phá 10.000 điểm trên Youku như Hạnh Phúc Đến Vạn Gia, Băng Vũ Hoả, Khu Rừng Nhỏ Của Hai Người, Dữ Quân Sơ Tương Thức, Trọng Sinh Chi Môn, Trầm Vụn Hương Phai. </p>    
                            </div>
                        </div>
                        <div class="card swiper-slide">
                            <div class="image-content">
                                <span class="overlay"></span>
                                <div class="card-image">
                                    <img src="images/user_img/pic-1.png" alt="" class="card-img">
                                </div>
                            </div>    
                            <div class="card-content">
                                <h2 class="name">Nguyen Van B</h2>
                                <p class="description">Hiện tại, bộ phim "Thắp sáng anh, sưởi ấm em" chuyển thể từ tiểu thuyết "Chiếc bật lửa và váy công chúa" đã phá 10.000 điểm, gia nhập list bộ phim đã phá 10.000 điểm trên Youku như Hạnh Phúc Đến Vạn Gia, Băng Vũ Hoả, Khu Rừng Nhỏ Của Hai Người, Dữ Quân Sơ Tương Thức, Trọng Sinh Chi Môn, Trầm Vụn Hương Phai. </p>    
                            </div>
                        </div>
                        <div class="card swiper-slide">
                            <div class="image-content">
                                <span class="overlay"></span>
                                <div class="card-image">
                                    <img src="images/user_img/pic-1.png" alt="" class="card-img">
                                </div>
                            </div>    
                            <div class="card-content">
                                <h2 class="name">Nguyen Van B</h2>
                                <p class="description">Hiện tại, bộ phim "Thắp sáng anh, sưởi ấm em" chuyển thể từ tiểu thuyết "Chiếc bật lửa và váy công chúa" đã phá 10.000 điểm, gia nhập list bộ phim đã phá 10.000 điểm trên Youku như Hạnh Phúc Đến Vạn Gia, Băng Vũ Hoả, Khu Rừng Nhỏ Của Hai Người, Dữ Quân Sơ Tương Thức, Trọng Sinh Chi Môn, Trầm Vụn Hương Phai. </p>    
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-button-next swiper-navBtn"></div>
                <div class="swiper-button-prev swiper-navBtn"></div>
                <div class="swiper-pagination"></div>
            </div>
        </section>

        <section class="comment-box">
            <h1 class="text-center" style="font-family: 'Courier New', Courier, monospace; color:coral">Bình luận</h1>
            <p class="text-center">Nếu bạn có những thắc mắc gì, hay có những đánh giá gì về sản phẩm của chúng tôi thì hãy gửi nhận xét ở phần phía dưới nhé!!!</p>
            <div class="row">
                <form action="#" class="frame">
                    <input type="text" name="full-name" placeholder="Họ và tên...">
                    <input type="email" name="email" placeholder="Địa chỉ email...">
                    <textarea name="comment" placeholder="Hãy viết nhận xét của bạn ở đây..."></textarea>
                    <button type="submit">Gửi bình luận</button>                
                </form>
            </div>
            
        </section>

        <section id="featured" class="my-5 pb-5">
            <div class="container text-center mt-5 py-5">
                <h3>Related Products</h3>
                <hr class="mx-auto">
            </div>
            <div class="row mx-auto container-fluid">
                <div class="product text-center col-lg-3 col-md-4 col-12">
                    <img class="img-fluid mb-33" src="images/anhphu4.jpg" alt="">
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h5 class="p-name">Omega</h5>
                    <h4 class="p-price">25.000.000đ</h4>
                    <button class="buy-btn">Show More</button>
                </div>
                <div class="product text-center col-lg-3 col-md-4 col-12">
                    <img class="img-fluid mb-33" src="images/anhphu4.jpg" alt="">
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h5 class="p-name">Omega</h5>
                    <h4 class="p-price">25.000.000đ</h4>
                    <button class="buy-btn">Show More</button>
                </div>
                <div class="product text-center col-lg-3 col-md-4 col-12">
                    <img class="img-fluid mb-33" src="images/anhphu4.jpg" alt="">
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h5 class="p-name">Omega</h5>
                    <h4 class="p-price">25.000.000đ</h4>
                    <button class="buy-btn">Show More</button>
                </div>
                <div class="product text-center col-lg-3 col-md-4 col-12">
                    <img class="img-fluid mb-33" src="images/anhphu4.jpg" alt="">
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h5 class="p-name">Omega</h5>
                    <h4 class="p-price">25.000.000đ</h4>
                    <button class="buy-btn">Show More</button>
                </div>
            </div>
        </section>

        <footer class="mt-5 py-5">
            <div class="row container mx-auto pt-5">
                <div class="footer-one col-lg-3 col-md-6 col-12">
                    <img src="images/Simple.png" alt="">
                    <p class="pt-3">LEARN HOW TO MAKE RESPONSIVE ECOMMERCE WEBSITE USING HTML CSS AND JAVASCRIPT. IN THIS.</p>                   
                </div>
                <div class="footer-one col-lg-3 col-md-6 col-12 mb-3">
                    <h5 class="pb-2">Featured</h5>
                    <ul class="text-uppercase list-unstyled">
                        <li><a href="#">Men</a></li>
                        <li><a href="#">Women</a></li>
                        <li><a href="#">Women</a></li>
                        <li><a href="#">Women</a></li>
                        <li><a href="#">Women</a></li>
                        <li><a href="#">Women</a></li>
                        <li><a href="#">Women</a></li>
                    </ul>
                </div>
                <div class="footer-one col-lg-3 col-md-6 col-12 mb-3">
                    <h5 class="pb-2">Contact Us</h5>
                    <div>
                        <h6 class="text-uppercase">Address</h6>
                        <p>123 street name, city</p>
                    </div>
                    <div>
                        <h6 class="text-uppercase">Phone</h6>
                        <p>123 456 789</p>
                    </div>
                    <div>
                        <h6 class="text-uppercase">Email</h6>
                        <p>mail@example.com</p>
                    </div>
                </div>
                <div class="footer-one col-lg-3 col-md-6 col-12">
                    <h5 class="pb-2">Instagram</h5>
                    <div class="row">
                        <img class="img-fluid w-25 h-100 m-2" src="" alt="">
                        <img class="img-fluid w-25 h-100 m-2" src="" alt="">
                        <img class="img-fluid w-25 h-100 m-2" src="" alt="">
                        <img class="img-fluid w-25 h-100 m-2" src="" alt="">
                        <img class="img-fluid w-25 h-100 m-2" src="" alt="">
                    </div>
                </div>
            </div>

            <div class="copyright mt-5">
                <div class="row container mx-auto">
                    <div class="col-lg-3 col-md-6 col-12 mb-4">
                        <img src="" alt="">  
                    </div>
                    <div class="col-lg-4 col-md-6 col-12 text-nowrap mb-2">
                        <p>rymo eCommerce &copy; 2022. All Rights Reserved </p>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </footer>

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
        
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
        <script src="swiper-bundle.min.js"></script>

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