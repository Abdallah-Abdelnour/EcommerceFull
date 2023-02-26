<?php
require("includes/common.php");
if (!isset($_SESSION['email'])) {
    header('location: index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Cart | Life Style Store</title>
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

        <!--  -->
        <link href="css/indx2.css" rel="stylesheet">
        <style>
            #form-detailss{
                margin: 30px;
                padding: 80px;
                border: 1px solid #e1e1e1;
            }
            .hhh img{
                margin: 100px 10px;
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
        ?>
        <section id="form-detailss">
            <div class="col-lg-4 col-md-6 ">
                <img src="img/confirmorder.png" style="float: left;">
            </div>
            <div class="row decor_bg">
                <div class="col-md-6">
                        <table class="table table-striped">
        
                            <!--show table only if there are items added in the cart-->
                            <?php
                            $sum = 0;$id='';
                            $user_id = $_SESSION['user_id'];
                            $query = "SELECT items.price AS Price, items.id As id, items.name AS Name FROM user_item JOIN items ON user_item.item_id = items.id WHERE user_item.user_id='$user_id' and `status`=1";
                            $result = mysqli_query($con, $query)or die($mysqli_error($con));
                            if (mysqli_num_rows($result) >= 1) {
                                ?>
                                <thead>
                                    <tr>
                                        <th>Item Number</th>
                                        <th>Item Name</th>
                                        <th>Price</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    while ($row = mysqli_fetch_array($result)) {
                                        $sum+= $row["Price"];
                                        $id .= $row["id"] . ", ";
                                        echo "<tr><td>" . "#" . $row["id"] . "</td><td>" . $row["Name"] . "</td><td>Rs " . $row["Price"] . "</td><td><a href='cart-remove.php?id={$row['id']}' class='remove_item_link'> Remove</a></td></tr>";
                                    }
                                    $id = rtrim($id, ", ");
                                    echo "<tr><td></td><td>Total</td><td>Rs " . $sum . "</td><td><a href='success.php?itemsid=" . $id . "' class='btn btn-primary'>Confirm Order</a></td></tr>";
                                    ?>
                                </tbody>
                                <?php
                            } else {

                                echo "Heyy!! Your Cart is Empty. Please add items to the cart first!";
                            }
                            ?>
                            
                            <?php
                            ?>
                        </table>
                </div>
            </div>
        </section>
        <?php include("includes/footer.php"); ?>
    </body>
</html>