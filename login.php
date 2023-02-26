<?php
require("includes/common.php");
// Redirects the user to products page if logged in.
if (isset($_SESSION['email'])) {
    header('location: products.php');
}
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Login | Life Style Store</title>

        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

        <!--  -->
        <link href="css/indx2.css" rel="stylesheet">
        <!--  -->
        <style>
            #form-details .people .imagee{
                margin: 45px 10px 0px 55px !important;
            }
        </style>
    </head>

    <body>
        <?php 
            $uri = $_SERVER['SCRIPT_NAME'];
            $uri = str_replace("/eCommerce3/", "", $uri);
            $_GET['url']=$uri;
            include 'includes/header.php'; 
        ?>

        <section id="page-header" class="about-header">
            <h2>#let's_talk</h2>
            <p>LEAVE A MESSAGE,We love to hear from you!</p>
        </section>

        <!-- <div id="content">
            <div class="container-fluid decor_bg" id="login-panel">
                <div class="col-lg-4 col-md-6">
                    <img src="img/yess.jpg">
                </div>
                <div class="row">
                    <div class="col-lg-4 col-lg-offset-3 col-md-4">
                        <div class="panel panel-primary" >
                            <div class="panel-heading">
                                <h4>LOGIN</h4>
                            </div>
                            <div class="panel-body">
                                <p class="text-warning"><i>Login to make a purchase</i><p>
                                <form action="login_submit.php" method="POST">
                                    <div class="form-group">
                                        <input type="email" class="form-control"  placeholder="Email" autofocus="on" name="e-mail" required = "true">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" placeholder="Password" name="password" required = "true">
                                    </div>
                                    
                                    <button type="submit" name="submit" class="btn btn-primary">Login</button><br><br>
                                    <?php if(isset($_GET['error'])) echo $_GET['error']; ?>
                                </form><br/>
                            </div>
                            <div class="panel-footer"><p>Don't have an account? <a href="signup.php">Register</a></p></div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        
        <section id="form-details">
            <form action="login_submit.php" method="POST">
                <span>LOGIN TO MAKE A PURCHASSE</span>
                <h2>LOGIN</h2>
                <input type="email" placeholder="Email" autofocus="on" name="e-mail" required = "true">
                <input type="password"  placeholder="Password" name="password" required = "true">
      
                <button class="normal" type="submit" name="submit">Login</button>
                <?php if(isset($_GET['error'])) echo $_GET['error']; ?>
                <div><p>Don't have an account? <a href="signup.php">Register</a></p></div>
            </form>

            <div class="people">
                <img class="imagee" src="img/signup1.jpg">
            </div>
        </section>

        <?php include 'includes/footer.php'; ?>
    </body>
</html>