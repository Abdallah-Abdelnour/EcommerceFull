<!DOCTYPE html>
<html lang="en">
<head>
        <style type="text/css">
            h5{
                color: blue;
            }
            .p1{
                text-align: justify;
            }
        </style>
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>About us | Life Style Store</title>

        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

        <!--  -->
        <link href="css/indx2.css" rel="stylesheet">
        <!--  -->
    </head>
<body>
<?php
$uri = $_SERVER['SCRIPT_NAME'];
$uri = str_replace("/eCommerce3/", "", $uri);
$_GET['url']=$uri;
include 'includes/header.php';
?>
<!-- <div class="container" id="content">
    <img src="img/team1.jpg" style="float: left;">
    <div class="row">
        <div class="col-lg-4" align="justify">
            <h3><mark>WHO WE ARE</mark></h3><br>
            <p id="p1">Lifestyle store is a recognized leader in the ecommerce industry, with a steadfast commitment to success and a record of achievement that continues a tradition of delivering excellence.<br><br>The company was founded in 2015 by Vishwadutt M S to ease the process of ordering various items. From those early days with just one employee, Lifestyle Store now has more than 10000 employees, serving thousands of customers. <br><br>Lifestyle Store is guided by four principles: customer obsession rather than competitor focus, passion for invention, commitment to operational excellence, and long-term thinking.<br><br><h4><mark>Vision</mark></h4>To make the world a more stylish, colorful and happier place.<br><br><h4><mark>Mission</mark></h4>We strive to offer our customers the lowest possible prices, the best available selection, and the utmost convenience.
            </p>
        </div>
        <div class="col-lg-4" align="justify">
            <h3><mark>BUILDING THE FUTURE</mark></h3><br>
            <p id="p1">We strive to have a positive impact on customers, employees, small businesses, the economy, and communities.<br><br> We are smart, passionate builders with different backgrounds and goals, who share a common desire to always be learning and inventing on behalf of our customers.<br><br>We follow the following intensive growth strategies to match our competitors:<br>
                <ul>
                    <li>Market development:<br>Our Focus is on entry and growth in new markets.</li><br>
                    <li>Market Penetration:<br>We aim to generate more revenue from markets where the company currently operates.</li><br>
                    <li>Product Development:<br>Our goal is to develop and offer new products to gain higher revenues. </li><br>
                    <li>Diversification:<br>Our objective is to achieve growth based on new business.</li><br> 
                </ul>
            </p>
        </div>
    </div>
  </div>
</div> -->
<section id="page-header" class="about-header">
        <h2>#KnowUs</h2>
        <p>Lorem ipsum dolor sit amet, consectetur </p>
    </section>

    <section id="about-head" class="section-p1">
        <img src="img/a6.jpg" alt="">
        <div>
            <h2>Who We Are ?</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae dolorem alias consequatur, est exercitationem maiores amet quos, praesentium, quam nesciunt delectus ullam fuga qui eveniet quia eius suscipit illum laudantium,
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae dolorem alias consequatur, est exercitationem maiores amet quos, praesentium, quam nesciunt delectus ullam fuga qui eveniet quia eius suscipit illum laudantium!
            </p>
            <abbr title="">Create stunning images with as much or as little control as you like thanks to a choice of Basic and Creative modes.</abbr>
            <br><br>
            <marquee bgcolor="#ccc" loop="-1" scrollamount="5" width="100%">
                Create stunning images with as much or as little control as you like thanks to a choice of Basic and Creative modes.
            </marquee>
        </div>
    </section>

    <section id="about-app" class="section-p1">
        <h1>Download Our <a href="#">App</a></h1>
        <div class="video">
            <video autoplay muted loop src="img/1.mp4"></video>
        </div>
    </section>

    <section id="feature" class="section-p1">
        <div class="fe-box">
            <img src="/img/f1.png" alt="">
            <h6>Free Shipping</h6>
        </div>
        <div class="fe-box">
            <img src="/img/f2.png" alt="">
            <h6>Online Order</h6>
        </div>
        <div class="fe-box">
            <img src="/img/f3.png" alt="">
            <h6>Save Money</h6>
        </div>
        <div class="fe-box">
            <img src="/img/f4.png" alt="">
            <h6>Promotions</h6>
        </div>
        <div class="fe-box">
            <img src="/img/f5.png" alt="">
            <h6>Happy Sell</h6>
        </div>
        <div class="fe-box">
            <img src="/img/f6.png" alt="">
            <h6>F24/7 Support</h6>
        </div>
    </section>

    <section id="newsletter" class="section-p1 section-m1">
        <div class="newstext">
            <h4>Sing Up For Newsletter</h4>
            <p>Get E-mail upadtes about our latest shop and <span>special offers.</span></p>
        </div>
        <div class="form">
            <input type="text" placeholder="Your email address">
            <button class="normal">Sing Up</button>
        </div> 
    </section>
<?php
include 'includes/footer.php';
?>
</body>
</html>