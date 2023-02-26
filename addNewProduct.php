<?php
require("includes/common.php");

?>
<!--Specifies document type is html-->
<!DOCTYPE html>
<!--Specifies the language as English-->
<html lang="en">
    <head>
        <!--instructs browser on how to control the page's dimensions and scaling-->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--Title of products page-->
        <title>Products | Life Style Store</title>
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
        <style>
            #form-details .people .imagee{
                margin: 70px 10px 0px 55px !important;
            }
        </style>
        <!--  -->
    </head>

    <body>
        <?php
                $uri = $_SERVER['SCRIPT_NAME'];
                $uri = str_replace("/eCommerce3/", "", $uri);
                $_GET['url']=$uri;
        include 'includes/header.php';
        include 'check-if-added.php';
        ?>

        <section id="form-details">
            <form action="add_product_script.php" method="POST">
                <h2>Add New Product :</h2>
                <input type="text" placeholder="Name of Product"  autofocus="on" name="name"  required = "true" pattern="^[A-Za-z\s]{1,}[\.]{0,1}[A-Za-z\s]{0,}$">
                <input type="number" placeholder="Price of Product" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"  name="price" required = "true"><?php if(isset($_GET['m1'])) echo $_GET['m1']; ?>
                <input type="text" placeholder="Image" name="imageProdct" required = "true">
                <button class="normal" type="submit" name="submit">Add</button>
            </form>
            <div class="people">
                <img class="imagee" src="img/signup1.jpg">
            </div>
        </section>

    </body>
</html>