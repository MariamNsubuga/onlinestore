<?php
session_start();

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
    <title>CWI | Product Details</title>

    <!-- Favicon  -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Core Style CSS -->
    <link rel="stylesheet" href="css/core-style.css">
    <link rel="stylesheet" href="style.css">

</head>
<?php require_once "connect.php";?>
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

        <!-- Header Area Start -->
        <header class="header-area clearfix">
            <!-- Close Icon -->
            <div class="nav-close">
                <i class="fa fa-close" aria-hidden="true"></i>
            </div>
            <!-- Logo -->
            <div class="logo">
               <a href="index.html"><img src="img/core-img/CWI1.png" alt=""></a>
            </div>
            <!-- Amado Nav -->
            <nav class="amado-nav">
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="shop.php">Shop</a></li>
                    <li class="active"><a href="product-details.php">Product</a></li>
                    <li><a href="cart.php">Cart</a></li>
                    <li><a href="checkout.php">Checkout</a></li>
                </ul>
            </nav>
            
        </header>
        <!-- Header Area End -->

        <!-- Product Details Area Start -->
        <div class="single-product-area section-padding-100 clearfix">
            <div class="container-fluid">

                <!-- <div class="row">
                    <div class="col-12">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mt-50">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item"><a href="#">Furniture</a></li>
                                <li class="breadcrumb-item"><a href="#">Chairs</a></li>
                                <li class="breadcrumb-item active" aria-current="page">white modern chair</li>
                            </ol>
                        </nav>
                    </div>
                </div> -->

                <div class="row">
                    <div class="col-12 col-lg-7">
                        <div class="single_product_thumb">
                            <div id="product_details_slider" class="carousel slide" data-ride="carousel">
                                <!-- <ol class="carousel-indicators">
                                   
                                    <li class="active" data-target="#product_details_slider" data-slide-to="0" style="background-image: url(img/product-img/pro-big-1.jpg);">
                                    </li>
                                    <li data-target="#product_details_slider" data-slide-to="1" style="background-image: url(img/product-img/pro-big-2.jpg);">
                                    </li>
                                    <li data-target="#product_details_slider" data-slide-to="2" style="background-image: url(img/product-img/pro-big-3.jpg);">
                                    </li>
                                    <li data-target="#product_details_slider" data-slide-to="3" style="background-image: url(img/product-img/pro-big-4.jpg);">
                                    </li>
                                </ol> -->
                                <div class="carousel-inner">
                               
                                <?php
                                    //    require "connect.php";           
                                        if(isset($_REQUEST['submit'])){
                                            $product_id = $_REQUEST['product_id'];
            
                                            $query=mysqli_query($con,"select * from product_images where product_id=".$product_id."") or die(mysqli_error());
                                            $row = mysqli_fetch_array($query);
                                            // select product details from the product table
                                            $query_pdt=mysqli_query($con,"select * from products where id=".$product_id."");
                                            $pdt_row=mysqli_fetch_array($query_pdt);
                                            echo '
                                                    <div class="carousel-item active">
                                                <a class="gallery_img" href="images/'.$row['name'].'">
                                                    <img class="d-block w-100" src="images/'.$row['name'].'" alt="First slide">
                                                </a>
                                            </div>
                                             
                                            ';
                                            
                                        }
                                        
                                    ?>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-5">
                    
                        <div class="single_product_desc">
                            <!-- Product Meta Data -->
                            
                            <div class="product-meta-data">
                                <div class="line"></div>
                                <p class="product-price">UGX <?php echo $pdt_row['price'];?></p>
                                <a href="product-details.php">
                                    <h6><?php echo $pdt_row['name'];?></h6>
                                </a>
                                <!-- Ratings & Review -->
                                <div class="ratings-review mb-15 d-flex align-items-center justify-content-between">
                                    <div class="ratings">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                    </div>
                                    <!-- <div class="review">
                                        <a href="#">Write A Review</a>
                                    </div> -->
                                </div>
                                <!-- Avaiable -->
                                <p class="avaibility"><i class="fa fa-circle"></i> In Stock</p>
                            </div>

                            <div class="short_overview my-5">
                                <p><?php echo $pdt_row['description'];?></p>
                            </div>

                            <!-- Add to Cart Form -->
                            <form class="cart clearfix" method="post">
                                <div class="cart-btn d-flex mb-50">
                                <input type="hidden" value="<?php echo $row['product_id'];?>" name="product_id"/>
                                <input type="hidden" value="<?php echo $pdt_row['name'];?>" name="title"/>
                                    <p>Qty</p>
                                    <div class="quantity">
                                        <span class="qty-minus" onclick="var effect = document.getElementById('qty'); var qty = effect.value; if( !isNaN( qty ) &amp;&amp; qty &gt; 1 ) effect.value--;return false;"><i class="fa fa-caret-down" aria-hidden="true"></i></span>
                                        <input type="number" class="qty-text" id="qty" step="1" min="1" max="300" name="quantity" value="1">
                                        <span class="qty-plus" onclick="var effect = document.getElementById('qty'); var qty = effect.value; if( !isNaN( qty )) effect.value++;return false;"><i class="fa fa-caret-up" aria-hidden="true"></i></span>
                                    </div>
                                </div>
                                <button type="submit" name="addtocart" value="5" class="btn amado-btn">Add to cart</button><br /> <br />
                                <button  class="btn amado-btn"><a href="index.html">Continue Shoppping</a></button><br /> <br />
  

<!-- paypal button buy now -->
                               <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="5FVSBLA5PZE4S">
 <table>
<tr><td><input type="hidden" name="on0" value="Cards">Cards</td></tr><tr><td><select name="os0">
    <option value="Small Card">Small Card $1.00 USD</option>
    <option value="Large Card">Large Card $1.50 USD</option>
</select> </td></tr>
<tr><td><input type="hidden" name="on1" value="Design">Design</td></tr><tr><td><input type="text" name="os1" maxlength="200"></td></tr>
</table> 
<input type="hidden" name="currency_code" value="USD">
<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form> 


<!-- paypal button add to cart -->


  <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="HE76H3J3LUHDU">
 <table>
<!-- <tr><td><input type="hidden" name="on0" value="Cards">Cards</td></tr><tr><td><select name="os0"> -->
  <tr><td>
    <input type="hidden" name="on0" value="<?php echo $pdt_row['name'];?>" name="name">
</td>
</tr><tr><td><select name="os0">  
     <option value="Small">Small <?php echo $pdt_row['price'];?></option> 
    <input type="hidden" name="amount"  value="<?php echo $pdt_row['price'];?>">
    </select> </td></tr>

</table> 
<input type="hidden" name="currency_code" value="USD">
<input type="hidden" name="item_name" value="<?php echo $pdt_row['name'];?>">
<input type="hidden" name="item_number" value="<?php echo $pdt_row['product_id']; ?>">
<input type="hidden" name="amount"  value="<?php echo $pdt_row['price'];?>">

<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_cart_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>  


 
                                        
                            </form>
                            <?php
                                
                                
                                if(isset($_REQUEST['addtocart'])){
                                    
                                    $product_id = $_REQUEST['product_id'];
                                    $product_name=$_REQUEST['title'];
                                    $qty=$_REQUEST['quantity'];
                                    $price_tt = $qty* $pdt_row['price'];
                                    #get user id
                                    $query1=mysqli_query($con,"select * from Users where email='".$_SESSION['username']."' ");
                                    $query1_row=mysqli_fetch_array($query1);
                                   $user_id=$query1_row['user_id'];
                                    #check if the product already exits for the user
                                    $check=mysqli_query($con,"select * from cart_items where user_id='".$user_id."' and product_id='".$product_id."'");
                                    if (mysqli_num_rows($check)>0) {
                                        echo "product already in shopping cart";
                                    }else{
                                        $sql="insert into cart_items(user_id,product_id,quantity,tt_price) values('$user_id','$product_id','$qty','$price_tt')";
                                   $dd_query=mysqli_query($con,$sql);
                                   mysqli_close($con);
                                    }
                                   

                                }
                            
                                
                                ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Product Details Area End -->
    </div>
    
    <!-- ##### Footer Area Start ##### -->
    <footer class="footer_area clearfix">
        <div class="container">
            <div class="row align-items-center">
                <!-- Single Widget Area -->
                <div class="col-12 col-lg-4">
                    <div class="single_widget_area">
                        <!-- Logo -->
                        <div class="footer-logo mr-50">
                            <a href="index.html"><img src="img/core-img/CWI1.png" alt=""></a>
                        </div>
                    </div>
                </div>
                <!-- Single Widget Area -->
                <div class="col-12 col-lg-8">
                    <div class="single_widget_area">
                        <!-- Footer Menu -->
                        <div class="footer_menu">
                            <nav class="navbar navbar-expand-lg justify-content-end">
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#footerNavContent" aria-controls="footerNavContent" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars"></i></button>
                                <div class="collapse navbar-collapse" id="footerNavContent">
                                    <ul class="navbar-nav ml-auto">
                                        <li class="nav-item active">
                                            <a class="nav-link" href="index.html">Home</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="shop.html">Shop</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="product-details.html">Product</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="cart.html">Cart</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="checkout.html">Checkout</a>
                                        </li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- -->
     <!-- Trigger/Open The Modal -->
<button id="myBtn">Open Modal</button>

<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <p>Some text in the Modal..</p>
  </div>

</div> 
    <!-- ##### Footer Area End ##### -->

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