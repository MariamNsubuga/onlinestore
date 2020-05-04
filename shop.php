<?php
session_start();
if(!(isset($_SESSION['username'])&& $_SESSION['username']!="")){
    header('Location:login.php');
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    

    <!-- Title  -->
    <title>CWI| Home</title>

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
                    <li class="active"><a href="shop.php">Shop</a></li>
                    <li><a href="cart.php">Cart</a></li>
                    <li><a href="checkout.php">Checkout</a></li>
                    <li><a href="login.php">Login</a></li>
                    <li><a href="logout.php">Logout</a></li>
                </ul>
            </nav>
        </header>
        <!-- Header Area End -->

        <div class="shop_sidebar_area">

            <!-- ##### Single Widget ##### -->
            <div class="widget catagory mb-50">
                <!-- Widget Title -->
                <h6 class="widget-title mb-30">Catagories</h6>

                <!--  Catagories  -->
                <div class="catagories-menu">
                    <ul>
                        <li class="active"><a href="shop.php">Animals</a></li>
                        <li><a href="cards.php">Cards</a></li>
                        <li><a href="bags.php">Shopping bags</a></li>
                        <li><a href="flower.php">Flower vases </a></li>
                        <li><a href="earring.php">Earrings</a></li>
                        <li><a href="paper_beads.php">Paper bead Necklaces</a></li>
                        <li><a href="glass_beads.php">Glass bead necklaces </a></li>
                        <li><a href="wooden_necklase.php">Wooden necklaces</a></li>
                        <li><a href="mixture.php">Mixture of wood, paper and glass- </a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="amado_product_area section-padding-100">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-12">
                        <div class="product-topbar d-xl-flex align-items-end justify-content-between">
                            <!-- Total Products -->
                            <div class="total-products">
                                <p>Showing 1-8 0f 25</p>
                                <div class="view d-flex">
                                    <a href="#"><i class="fa fa-th-large" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-bars" aria-hidden="true"></i></a>
                                </div>
                            </div>
                            <!-- Sorting -->
                            <div class="product-sorting d-flex">
                                <div class="sort-by-date d-flex align-items-center mr-15">
                                    <p>Sort by</p>
                                    <form action="#" method="get">
                                        <select name="select" id="sortBydate">
                                            <option value="value">Date</option>
                                            <option value="value">Newest</option>
                                            <option value="value">Popular</option>
                                        </select>
                                    </form>
                                </div>
                                <div class="view-product d-flex align-items-center">
                                    <p>View</p>
                                    <form action="#" method="get">
                                        <select name="select" id="viewProduct">
                                            <option value="value">12</option>
                                            <option value="value">24</option>
                                            <option value="value">48</option>
                                            <option value="value">96</option>
                                        </select>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                <!-- Selecting data from the -->

                    <?php
                    require "connect.php";

                        if (isset($_GET['page_no']) && $_GET['page_no']!="") {
                            $page_no = $_GET['page_no'];
                            } else {
                                $page_no = 1;
                                }

                    $total_records_per_page = 6;
                    $offset = ($page_no-1) * $total_records_per_page;
                    $previous_page = $page_no - 1;
                    $next_page = $page_no + 1;
                    $adjacents = "2";
                    $result_count = mysqli_query($con,"SELECT COUNT(*) As total_records FROM products");
                    $total_records = mysqli_fetch_array($result_count);
                    $total_records = $total_records['total_records'];
                    $total_no_of_pages = ceil($total_records / $total_records_per_page);
                    $second_last = $total_no_of_pages - 1; // total pages minus 1


                    $a=0;
                    $query=mysqli_query($con,"select * from product_images  where Category='Animal' limit  $offset, $total_records_per_page ");
                    echo "<table border='1'>";
                    if (mysqli_num_rows($query) > 0) {
                        while($row = mysqli_fetch_assoc($query)) {
                       
                        $get_name=mysqli_query($con,"select * from products where id=".$row['product_id']."  ");
                        $title= mysqli_fetch_array($get_name);
                           echo ' <!-- Single Product Area -->
                           <div class="col-12 col-sm-6 col-md-12 col-xl-6">
                               <div class="single-product-wrapper">
                                   <!-- Product Image -->
                                   <div class="product-img">
                                       <img src="images/'.$row['name'].'" alt="">
                                       <!-- Hover Thumb -->
                                       
                                   </div>
       
                                   <!-- Product Description -->
                                   <div class="product-description d-flex align-items-center justify-content-between">
                                       <!-- Product Meta Data -->
                                       <div class="product-meta-data">
                                           <div class="line"></div>
                                           <p class="product-price">UGX '.$title['price'].'</p>
                                           <form action="product-details.php" action="POST">
                                           <input type="hidden" value="'.$row['product_id'].'" name="product_id"/>
                                           <button type="submit" name="submit" value="submit" class="btn-floating btn waves-effect waves-light">
                                                                    <h6>'.$title['name'].'</h6></button>
                                                                
                                           </form>
                                           
                                       </div>
                                       <!-- Ratings & Cart -->
                                       <div class="ratings-cart text-right">
                                           <div class="ratings">
                                               <i class="fa fa-star" aria-hidden="true"></i>
                                               <i class="fa fa-star" aria-hidden="true"></i>
                                               <i class="fa fa-star" aria-hidden="true"></i>
                                               <i class="fa fa-star" aria-hidden="true"></i>
                                               <i class="fa fa-star" aria-hidden="true"></i>
                                           </div>
                                           <div class="cart">
                                           <form action="product-details.php" action="POST">
                                           <input type="hidden" value="'.$row['product_id'].'" name="product_id"/>
                                           <button type="submit" name="submit" value="submit" class="btn-floating btn waves-effect waves-light">
                                                                    <h6><a data-toggle="tooltip" data-placement="left" title="Add to Cart"><img src="img/core-img/cart.png" alt=""></a></button>
                                                                
                                           </form>
                                               
                                           </div>
                                       </div>
                                   </div>
                               </div>
                           </div>
       ';
                       
                        echo"";
                       if($a % 3 == 1){
                            echo "</tr>";
                       }
                       $a++;
                     } 
                    }
                    echo "</table>";
                    ?>

                   

                    

                    <!-- Single Product Area -->
                    <div class="col-12 col-sm-6 col-md-12 col-xl-6">
                        <div class="single-product-wrapper">
                           
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Single Product Area -->
                    <div class="col-12 col-sm-6 col-md-12 col-xl-6">
                        <div class="single-product-wrapper">
                           
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <!-- Pagination -->
                        <nav aria-label="navigation">
                        
                             <ul class="pagination justify-content-end">
<?php if($page_no > 1){
echo "<li class='page-item'><a href='?page_no=1' class='page-link'>First</a></li>";
} ?>
    
<li class="page-item" <?php if($page_no <= 1){ echo "class='disabled'"; } ?>>
<a class="page-link" <?php if($page_no > 1){
echo "href='?page_no=$previous_page'";
} ?>>Prev</a>
</li>
    
<li class="page-item" <?php if($page_no >= $total_no_of_pages){
echo "class='disabled'";
} ?>>
<a class="page-link" <?php if($page_no < $total_no_of_pages) {
echo "href='?page_no=$next_page'";
} ?>>Next</a>
</li>
 
<?php if($page_no < $total_no_of_pages){
echo "<li class='page-item'><a class='page-link' href='?page_no=$total_no_of_pages'>Last &rsaquo;&rsaquo;</a></li>";
} ?>
</ul>
                        </nav>
  
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Main Content Wrapper End ##### -->

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
                       
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
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
                                            <a class="nav-link" href="index.php">Home</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="shop.php">Shop</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="product-details.php">Product</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="cart.php">Cart</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="checkout.php">Checkout</a>
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