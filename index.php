<?php

//establish the connection to database, and start the session
require("includes/common.php");

// Redirects the user to products page if he/she is logged in.
if (isset($_SESSION['email'])) {
  header('location: products.php');
}

?>

<!--Specifies document type is html-->
<!DOCTYPE html>
<!--Specifies the language as English-->
<html lang="en">
    <head>
        <!--instructs browser on how to control the page's dimensions and scaling-->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--Title of index page-->
        <title>Welcome | Life Style Store</title>
        <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.css" rel="stylesheet">
        <!-- Custom CSS -->
        <link href="css/style.css" rel="stylesheet">
        <!-- jQuery -->
        <script src="js/jquery.js"></script>
        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">


        <!--  -->
        <link href="css/indx2.css" rel="stylesheet">
        <script src="js/index.js"></script>
        <!--  -->
<style>


</style>
    </head>
    <body style="padding-top: 50px;">
        <!-- Header -->
        <?php
        $uri = $_SERVER['SCRIPT_NAME'];
        $uri = str_replace("/eCommerce3/", "", $uri);
        $_GET['url']=$uri;
        include 'includes/header.php';
        ?>
        <!--Header end-->

        <div id="content">
            <!--Main banner image-->
            <!-- <div id = "banner_image">
                <div class="container"> 
                    <center>
                        <div id="banner_content">
                            <h1>We sell lifestyle.</h1>
                            <p>Flat 40% OFF on premium brands </p>
                            <br/>
                            <a  href="products.php" class="btn btn-danger btn-lg active">Shop Now</a>
                        </div>
                    </center>
                </div>
            </div> -->
            <section id="hero">
                <h4>Trade-in-offer</h4>
                <h2>Super value deals</h2>
                <h1>On all products</h1>
                <p>Save more width coupons & up to 70% off! </p>
                <button>Shop Now</button>
            </section>
            <section id="feature" class="section-p1">
                <div class="fe-box">
                    <img src="/img/features/f1.png" alt="">
                    <h6>Free Shipping</h6>
                </div>
                <div class="fe-box">
                    <img src="/img/features/f2.png" alt="">
                    <h6>Online Order</h6>
                </div>
                <div class="fe-box">
                    <img src="/img/features/f3.png" alt="">
                    <h6>Save Money</h6>
                </div>
                <div class="fe-box">
                    <img src="/img/features/f4.png" alt="">
                    <h6>Promotions</h6>
                </div>
                <div class="fe-box">
                    <img src="/img/features/f5.png" alt="">
                    <h6>Happy Sell</h6>
                </div>
                <div class="fe-box">
                    <img src="/img/features/f6.png" alt="">
                    <h6>F24/7 Support</h6>
                </div>
            </section>
            <!--Main banner image end-->

            <!--Item categories listing-->
            <div class="container">
                <h2>Category Of Products</h2>
                <p>Summer Collection New Morden Design</p>
                <div class="row text-center" id="item_list">
                    <div class="col-sm-4">
                        <!-- <a href="products.php#cameras" > -->
                        <a href="products.php#product1" >
                            <div class="thumbnail">
                                <img src="img/1.jpg" alt="">
                                <div class="caption">
                                    <h3>Cameras</h3>
                                    <p>Choose among the best available in the world.</p>
                                </div>
                            </div> 
                        </a>
                    </div>

                    <div class="col-sm-4">
                        <!-- <a href="products.php#watches" > -->
                        <a href="products.php#product1" >
                            <div class="thumbnail">
                                <img src="img/10.jpg" alt="">
                                <div class="caption">
                                    <h3>Watches</h3>
                                    <p>Original watches from the best brands.</p>
                                </div>
                            </div> 
                        </a>
                    </div>

                    <div class="col-sm-4">
                        <!-- <a href="products.php#shirts" > -->
                        <a href="products.php#product1" >
                            <div class="thumbnail">
                                <img src="img/13.jpg" alt="">
                                <div class="caption">
                                    <h3>Shirts</h3>
                                    <p>Our exquisite collection of shirts.</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            
            <!--Item categories listing end-->

            <!--  -->
            <section id="sm-banneer" class="section-p1">
                <div class="banner-box">
                    <h4>crazy deals</h4>
                    <h2>buy 1 get 1 free</h2>
                    <span>The best classic dress is on sale at cara</span>
                    <button class="white">Learn More</button>
                </div>
                <div class="banner-box banner-box2">
                    <h4>spring/summer</h4>
                    <h2>upcomming season</h2>
                    <span>The best classic dress is on sale at cara</span>
                    <button class="white">Collection</button>
                </div>
            </section>

            <section id="banner3">
                <div class="banner-box">
                    <h2>SEASONAL SALE</h2>
                    <h3>Winter Collection -50% OFF</h3>
                </div>
                <div class="banner-box banner-box2">
                    <h2>NEW FOOTWEAR COLLECTION</h2>
                    <h3>Spring / Summer 2022</h3>
                </div>
                <div class="banner-box banner-box3">
                    <h2>T-SHIRTS</h2>
                    <h3>New Trendy Prints</h3>
                </div>
            </section>

            <section id="newsletter" class="section-p1">
                <div class="newstext">
                    <h4>Sing Up For Newsletter</h4>
                    <p>Get E-mail upadtes about our latest shop and <span>special offers.</span></p>
                </div>
                <div class="form">
                    <input type="text" placeholder="Your email address">
                    <button class="normal">Sing Up</button>
                </div> 
            </section>
            <!--  -->
        </div>
        
        <!--Footer-->
        <?php
        include 'includes/footer.php';
        ?>
        <!--Footer end-->
   
    </body> 
</html>