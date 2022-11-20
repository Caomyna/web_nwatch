<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Cart</title>
    </head>
    <body>
        <?php include('nav.php');?>

        <section id="blog-home" class="pt-5 mt-5 container">
            <h2 class="font-weight-bold pt-5">Shopping Cart</h2>
            <hr>
        </section>

        <section id="cart-container" class="container my-5">
            <table width="100%">
                <thead>
                    <tr>
                        <td>Remove</td>
                        <td>Image</td>
                        <td>Product</td>
                        <td>Price</td>
                        <td>Quatity</td>
                        <td>Total</td>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td><a href="#"><i class="fas fa-trash-alt"></i></a></td>
                        <td><img src="" alt=""></td>
                        <td><h5>Watch omega</h5></td>
                        <td><h5>120.000đ</h5></td>
                        <td><input class="w-25 pl-1" value="1" type="number"></td>
                        <td><h5>240.000đ</h5></td>
                    </tr>
                    <tr>
                        <td><a href="#"><i class="fas fa-trash-alt"></i></a></td>
                        <td><img src="" alt=""></td>
                        <td><h5>Watch omega</h5></td>
                        <td><h5>120.000đ</h5></td>
                        <td><input class="w-25 pl-1" value="1" type="number"></td>
                        <td><h5>240.000đ</h5></td>
                    </tr>
                    <tr>
                        <td><a href="#"><i class="fas fa-trash-alt"></i></a></td>
                        <td><img src="" alt=""></td>
                        <td><h5>Watch omega</h5></td>
                        <td><h5>120.000đ</h5></td>
                        <td><input class="w-25 pl-1" value="1" type="number"></td>
                        <td><h5>240.000đ</h5></td>
                    </tr>
                </tbody>
            </table>
        </section>

        <section id="cart-bottom" class="container">
            <div class="row">
                <div class="coupon col-lg-6 col-md-6 col-12 mb-4">
                    <div>
                        <h5>COUPON</h5>
                        <p>Enter your coupon code if you have one.</p>
                        <input type="text" placeholder="Coupon Code">
                        <button>Apply coupon</button>
                    </div>
                </div>
                <div class="total col-lg-6 col-md-6 col-12">
                    <div>
                        <h5>CART TOTAL</h5>
                        <div class="d-flex justify-content-between">
                            <h6>Subtotal</h6>
                            <p>100.000đ</p>
                        </div>
                        <div class="d-flex justify-content-between">
                            <h6>Shipping</h6>
                            <p>100.000đ</p>
                        </div>
                        <hr class="second-hr">
                        <div class="d-flex justify-content-between">
                            <h6>Total</h6>
                            <p>100.000đ</p>
                        </div>
                        <button class="ml-auto">Proceed To Checkout</button>
                    </div>
                </div>
            </div>
        </section>
        <?php include('footer.php');?>
    </body>
</html>