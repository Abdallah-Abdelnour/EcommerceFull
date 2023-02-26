<?php
require_once("includes/common.php");
if (!isset($_SESSION['email'])) {
    header('location: index.php');
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Settings | Life Style Store</title>
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>

        
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

        <style>
            #form-details .aaa img{
                margin: 70px 10px 0px 55px !important;
            }
        </style>


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
        <section id="form-details">
                <div class="aaa col-lg-4 col-md-6">
                    <img src="img/settings.jpg">
                </div>
                <form action="settings_script.php" method="POST">
                    <span>LEAVE A MESSAGE</span>
                    <h2>Change Password</h2>
                    <input type="password" name="old-password"  placeholder="Old Password" required = "true">
                    <input type="password" name="password" placeholder="New Password" required = "true">
                    <input type="password" name="password1"  placeholder="Re-type New Password" required = "true">
                    <button type="submit" class="normal">Change</button>
                    <?php if(isset($_GET['error'])) echo $_GET['error']; ?>
                </form>
        </section>
        <?php include("includes/footer.php"); ?>
    </body>
</html>