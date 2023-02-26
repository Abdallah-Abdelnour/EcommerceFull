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
        <!--  -->
    </head>
<?php
require("includes/common.php");
if (isset($_SESSION['user_role'])) { 
    // echo($_SESSION['user_id']." => ");
    // echo($_SESSION['user_role']."<br>");
}else{//ta3 utilisateur 3adi mazal massajalch
    $_SESSION['user_id']=-1;
    $_SESSION['user_role']="aaa";
}

    //kifah nejib les user taw3na
    $sqlMode = "select * from users";
    if ($resultt = mysqli_query($con, $sqlMode)) {
        // Fetch one and one row
        while ($row = mysqli_fetch_row($resultt)) {//mochkil khefif hena rah
            if($_SESSION['user_id']==$row[0]){
                if(($row[7]==="user")||($row[7]==="aaa")){//hena lakan mosta3mil bla role aw role ta3ah howa user
                //    echo("cbn ".$row[7]."<br>");



?>

<?php
//establish the connection to database, and start the session
// require("includes/common.php");
"<div>";
$sql = "select * from items";

// if ($result = mysqli_query($con, $sql)) {
//   // Fetch one and one row
//   while ($row = mysqli_fetch_row($result)) {
//     echo("<pre>");
//     printf ("%s (%s)\n", $row[1],$row[2]) ;
//     echo("</pre>");
//   }
//   mysqli_free_result($result);

// }


?>



    <body>
        <?php
        $uri = $_SERVER['SCRIPT_NAME'];
        $uri = str_replace("/eCommerce3/", "", $uri);
        $_GET['url']=$uri;
        include 'includes/header.php';
        include 'check-if-added.php';
        ?>
        <div class="" id="content">
            <!-- Jumbotron Header -->
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
            <section id="page-header">
                <h2>Welcome to our #store</h2>
                <p>Save more width coupons & up to 70% off! </p>
            </section>
  
            
            <section id="product1" class="section-p1">
                <div class="pro-container">
                    <?php   
                        $j=0;
                        if ($result = mysqli_query($con, $sql)) {
                            // Fetch one and one row
                            while ($row = mysqli_fetch_row($result)) {
                                $i=$row[0]-1;
                                $j++;
                    ?>
                            <div class="pro" onclick="window.location.href='sproduct.html';">
                                <!-- <img src=<?php echo"$imagess[$i]"?> alt=""> -->
                                <img src=<?php echo"$row[3]"?> alt="">
                                <div class="des">
                                    <span><?php echo"$row[1]" ?></span>
                                    <h5>Price: Rs. <?php echo"$row[2]"?>.00</h5>
                                    <div class="star">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <?php if (!isset($_SESSION['email'])) { ?>
                                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                            } else {
                                                if (check_if_added_to_cart($j)) { //This is same as if(check_if_added_to_cart != 0)
                                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                                } else {
                                                    ?>
                                                    <a href="cart-add.php?id=<?php echo($j); ?>" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                                    <?php
                                                }
                                            }
                                        ?>
                                </div>
                            </div>
                    <?php 
                    }
                    mysqli_free_result($result);
                    }
                    ?>
                </div> 
            </section>
            <hr>
        </div>

        <?php include("includes/footer.php"); ?>

        <?php

        
}else{
    echo("page jedida ".$row[7]."<br>");
    include 'includes/header.php';
    include 'check-if-added.php';
 }
}

}
}

?>
    </body>

</html>