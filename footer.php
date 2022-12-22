<head>
    <link rel="stylesheet" href="css/style.css">
    <style>
        .footer{
            background-color: black;
            background-size: cover;
            background-position: center;
            padding: 7px 16px;
            padding-bottom: 20px;
        }
        
        .footer .box-container{
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(13.5em, 0fr));
            gap: 0.8rem;
        }
        
        .footer .box-container .box h3{
            color:var(--main-color);
            font-size: 1.5rem;
            padding: 1rem;
        }
        
        .footer .box-container .box a{
            color:var(--white);
            font-size: 0.9rem;
            padding-bottom: 1rem;
            display: block;
            text-decoration: none;
        }
        
        .footer .box-container .box a i{
            color:var(--main-color);
            padding-right: 0.8rem;
            transition: .2s linear;
        }
        
        .footer .box-container .box a:hover i{
            padding-right: 1rem;
        }
        .footer p{
            color: #999;
            font-size: 0.8rem;
        }
    </style>
</head>
<footer class="footer">

    <section class="footer">

        <div class="box-container">

            <div class="box">
                <h3>Quick links</h3>
                <a href="home.php"> <i class="fas fa-angle-right"></i> Trang chủ</a>
                <a href="about.php"> <i class="fas fa-angle-right"></i> Giới thiệu</a>
                <a href="package.php"> <i class="fas fa-angle-right"></i>Sản phẩm</a>
                <a href="book.php"> <i class="fas fa-angle-right"></i> Liên hệ</a>
            </div>

            <div class="box">
                <h3>Extra links</h3>
                <a href="home.php"> <i class="fas fa-angle-right"></i> Điều khoản sử dụng</a>
                <a href="about.php"> <i class="fas fa-angle-right"></i> Chính sách bảo hành</a>
            </div>

            <div class="box">
                <h3>Contact Info</h3>
                <a href="#"> <i class="fas fa-phone"></i> +123-456-7890 </a>
                <a href="#"> <i class="fas fa-phone"></i> +111-222-3333 </a>
                <a href="#"> <i class="fas fa-envelope"></i> simplewatch@gmail.com </a>
                <a href="#"> <i class="fas fa-map"></i> Đà Nẵng, Việt Nam </a>
            </div>

            <div class="box">
                <h3>Follow us</h3>
                <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
                <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
                <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
                <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
            </div>

            <div class="box">
                <img src="images/Simple.png" alt="">
                <p class="pt-3">LEARN HOW TO MAKE RESPONSIVE ECOMMERCE WEBSITE USING HTML CSS AND JAVASCRIPT. IN THIS.</p>                   
            </div>
        </div>

    </section>
</footer>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>