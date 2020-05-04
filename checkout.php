<?php
include_once("connect.php");
session_start();
 #get user id
 $query1=mysqli_query($con,"select * from Users where email='".$_SESSION['username']."' ");
 $query1_row=mysqli_fetch_array($query1);
 $user_id=$query1_row['user_id'];

//  getting the shopping cart 
 // get sum of values in cart
 $sum_price = "select sum(tt_price) as total from cart_items where user_id='".$user_id."'";
 $result = mysqli_query($con,$sum_price);
 $mtotal= mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>CWI | Checkout</title>

    <!-- Favicon  -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Core Style CSS -->
    <link rel="stylesheet" href="css/core-style.css">
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <!-- Search Wrapper Area Start -->
    <div class="search-wrapper section-padding-100">
        <div class="search-close">
            <i class="fa fa-close" aria-hidden="true"></i>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="search-content">
                        <form action="#" method="get">
                            <input type="search" name="search" id="search" placeholder="Type your keyword...">
                            <button type="submit"><img src="img/core-img/search.png" alt=""></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Search Wrapper Area End -->

    <!-- ##### Main Content Wrapper Start ##### -->
    <div class="main-content-wrapper d-flex clearfix">

        <!-- Mobile Nav (max width 767px)-->
        <div class="mobile-nav">
            <!-- Navbar Brand -->
            <div class="amado-navbar-brand">
               <a href="index.html"><img src="img/core-img/CWI1.png" alt=""></a>
            </div>
            <!-- Navbar Toggler -->
            <div class="amado-navbar-toggler">
                <span></span><span></span><span></span>
            </div>
        </div>
        <header class="header-area clearfix">
            <!-- Close Icon -->
            <div class="nav-close">
                <i class="fa fa-close" aria-hidden="true"></i>
            </div>
            <!-- Logo -->
            <div class="logo">
                <a href="index.html"><img src="img/core-img/CWI1.png" alt=""></a>
                 <a href="index.html">CWI MISSION</a>
            </div>
            <!-- Amado Nav -->
        </header>
        <div class="products-catagories-area clearfix">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 col-lg-8">
                        <div class="checkout_details_area mt-50 clearfix">

                            <div class="cart-title">
                                <h2>Checkout</h2>
                            </div>
                            <div class="card">
                            <div class="card-header">
                                ADDRESS DETAILS
                            </div>
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $query1_row['username']; ?></h5>
                                <p class="card-text"><?php echo $query1_row['location']; echo "  "; echo $query1_row['email'];?></p>
                                <p class="card-text"><?php echo $query1_row['contact'];?></p>
                            </div>
                            </div>
                            <br /><hr />
                            <!-- payment methods -->
                            <div class="cart-title">
                                <h2>PAYMENT METHOD</h2>
                            </div>
                            <!-- Payment using mobile money -->
                            <div class="card">
                            <div class="card-header">
                                PAYMENT USING MOBILE MONEY
                            </div>
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $query1_row['username']; ?></h5>
                                <form action="mm_pay.php" method="post">
                                <div class="col-12 mb-3">
                                        <label>Mobile Money Number</label><br />
                                        <input type="text" class="form-control" id="city" placeholder="<?php echo $query1_row['contact'];?>" name="contact">
                                         
                                        <input type="hidden" value="<?php echo $mtotal['total'];?>" name="amount">
                                    </div>
                                    
                                       
                                   
                                    <div class="cart-btn mt-100">
                                <input type="submit" name="submit"  class="btn amado-btn w-100" value="Confrim Payment" >
                            </div>
                                </form>
                            </div>
                            </div>
                            <br /><hr />
                             <!-- Payment using mobile money -->
                             <div class="card">
                            <div class="card-header">
                                PAYMENT ON DELIVERY
                            </div>
                            <div class="card-body">
                    
                                <form action="delivery.php" method="post">
                                <div class="col-12 mb-3">
                                 <input type="checkbox"><label>Tick and Confirm Order<label>
                            <input type="hidden"   name="status" value="Payment on delivery">
                
                                    </div>
    
                                    <div class="cart-btn mt-100">
                                <input type="submit" name="submit"  class="btn amado-btn w-100" value="ConfirmOrder" >
                            </div>
                                </form>
                            </div>
                            </div>
                            <br /><hr />
                            <!-- Payment using paypal -->
                            <div class="card">
                            <div class="card-header">
                                PAYMENT USING PAYPAL
                            </div>
                            <div class="card-body">
                                <h5 class="card-title"> <label class="custom-control-label" for="paypal"> <img class="ml-15" src="img/core-img/paypal.png" alt=""></label></h5>
                                <p class="card-text"><?php echo $query1_row['location']; echo $query1_row['email'];?></p>
                                <p class="card-text"><?php echo $query1_row['contact'];?></p>
                                <div class="cart-btn mt-100">
                                <a href="#" class="btn amado-btn w-100">Confrim Payment</a>
                            </div>
                            </div>
                            </div>

                            <!-- end of payment methods -->
                           
                        </div>
                    </div>
                    <br /><hr />
                    <div class="col-12 col-lg-4">
                        <div class="checkout_details_area mt-70 clearfix">
                        <h5>Cart Total</h5>
                            <ul class="summary-table">
                                <li><span>subtotal:</span> <span><?php echo $mtotal['total'];?></span></li>
                                <li><span>delivery:</span> <span>Free</span></li>
                                <li><span>total:</span> <span>$<?php echo $mtotal['total'];?></span></li>
                            </ul>

                            <div class="payment-method">
                                <!-- Cash on delivery -->
                                <div class="custom-control custom-checkbox mr-sm-2">
                                    <input type="checkbox" class="custom-control-input" id="cod" checked>
                                    <label class="custom-control-label" for="cod">Cash on Delivery</label>
                                </div>
                                
                            </div>

                            <div class="cart-btn mt-100">
                                <a href="#" class="btn amado-btn w-100">Checkout</a>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
                   
            </div>
        </div>
    </div>
    <!-- ##### Main Content Wrapper End ##### -->

    
               

    <!-- ##### jQuery (Necessary for All JavaScript Plugins) ##### -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Plugins js -->
    <script src="js/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>

</body>

</html>