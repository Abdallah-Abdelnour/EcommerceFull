<?php
require("./includes/common.php");
if (isset($_SESSION['email'])) {
    header('location: products.php');
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Signup | Life Style Store</title>
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

        <!--  -->
        <link href="css/indx2.css" rel="stylesheet">
        <!--  -->
        <style>
            #form-details .people .imagee{
                margin: 170px 10px 0px 55px !important;
            }
        </style>
    </head>
    <body>
        <?php 
            $uri = $_SERVER['SCRIPT_NAME'];
            $uri = str_replace("/eCommerce3/", "", $uri);
            $_GET['url']=$uri;
            include './includes/header.php'; 
        ?>
        <section id="page-header" class="about-header">
            <h2>#let's_talk</h2>
            <p>LEAVE A MESSAGE,We love to hear from you!</p>
        </section>


        <!-- <div class="container-fluid decor_bg" id="content">
            <div class="col-lg-4 col-md-6">
                <img src="img/signup1.jpg">
            </div>
            <div class="row">
                <div class="container">
                    <div class="col-lg-4 col-lg-offset-3 col-md-6">
                        <h2>SIGN UP</h2>
                        <form  action="signup_script.php" method="POST">
                            <div class="form-group">
                                <input class="form-control" placeholder="Name" autofocus="on" name="name"  required = "true" pattern="^[A-Za-z\s]{1,}[\.]{0,1}[A-Za-z\s]{0,}$">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control"  placeholder=" Enter a valid Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"  name="e-mail" required = "true"><?php if(isset($_GET['m1'])) echo $_GET['m1']; ?>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Password" title="Password must be 8 characters including 1 uppercase letter, 1 lowercase letter and numeric characters"pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" name="password" required = "true">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control"  placeholder="Contact (ex. 8444844863)" maxlength="10" size="10" name="contact" required = "true"><?php if(isset($_GET['m2'])) echo $_GET['m2']; ?>
                            </div>
                            <div class="form-group">
                                <input  type="text" class="form-control"  placeholder="City" name="city" required = "true">
                            </div>
                            <div class="form-group">
                                <input  type="text" class="form-control"  placeholder="Address" name="address" required = "true">
                            </div>
                            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div> -->

        <section id="form-details">
            <form action="signup_script.php" method="POST">
                <span>LEAVE A MESSAGE</span>
                <h2>SIGN UP</h2>
                <input type="text" placeholder="Your Name"  autofocus="on" name="name"  required = "true" pattern="^[A-Za-z\s]{1,}[\.]{0,1}[A-Za-z\s]{0,}$">
                <input type="email" placeholder="Enter a valid Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"  name="e-mail" required = "true"><?php if(isset($_GET['m1'])) echo $_GET['m1']; ?>
                <input type="password" placeholder="Password"  title="Password must be 8 characters including 1 uppercase letter, 1 lowercase letter and numeric characters"pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" name="password" required = "true">
                <input type="text" placeholder="Contact (ex. 8444844863)" maxlength="10" size="10" name="contact" required = "true"><?php if(isset($_GET['m2'])) echo $_GET['m2']; ?>

                <input type="text" placeholder="City" name="city" required = "true">
                <input type="text" placeholder="Address" name="address" required = "true">
                <button class="normal" type="submit" name="submit">Submit</button>
            </form>
            <div class="people">
                <img class="imagee" src="img/signup1.jpg">
                <!-- <div>
                    <img src="img/1.png" alt="">
                    <p><span>John Doe</span> Senior Marketing Manager <br>
                        Phone: + 000 123 000 77 88 <br>
                        Email: contact@exmple.com
                    </p>
                </div>
                <div>
                    <img src="img/2.png" alt="">
                    <p><span>William smith</span> Senior Marketing Manager <br>
                        Phone: + 000 123 000 77 88 <br>
                        Email: contact@exmple.com
                    </p>
                </div>
                <div>
                    <img src="img/3.png" alt="">
                    <p><span>Emma Stone</span> Senior Marketing Manager <br>
                        Phone: + 000 123 000 77 88 <br>
                        Email: contact@exmple.com
                    </p>
                </div> -->
            </div>
        </section>



        <?php include "includes/footer.php"; ?>
    </body>
</html>