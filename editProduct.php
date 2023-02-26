<?php
require("includes/common.php");
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $item_id = $_GET['id'];
    $user_id = $_SESSION['user_id'];
    //echo($item_id."<br>");
    //echo($user_id."<br>");

    $sql = "SELECT id, name, price, images FROM items WHERE id='$item_id'";
    $result = mysqli_query($con, $sql);
    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
            //hado yejo f makan value ta3 input *****************
        //   echo "id: " . $row["id"]. " - Name: " . $row["name"]. " - Price: " . $row["price"]. "<br>";
       
            
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
            <form action="edit_product_script.php" method="POST">
                <h2>Add New Product :</h2>
                <input value="<?php echo($row['id']); ?>" type="hidden" placeholder="Id of Product"  autofocus="on" name="id"  required = "true" pattern="^[A-Za-z\s]{1,}[\.]{0,1}[A-Za-z\s]{0,}$">
                <input value="<?php echo($row['name']); ?>" type="text" placeholder="Name of Product"  autofocus="on" name="name"  required = "true" pattern="^[A-Za-z\s]{1,}[\.]{0,1}[A-Za-z\s]{0,}$">
                <input value="<?php echo($row['price']); ?>" type="number" placeholder="Price of Product" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"  name="price" required = "true"><?php if(isset($_GET['m1'])) echo $_GET['m1']; ?>
                <input value="<?php echo($row['images']); ?>" type="text" placeholder="Image" name="imageProdct" required = "true">
                <button class="normal" type="submit" name="submit">Edit</button>
            </form>
            <div class="people">
                <img class="imagee" src="img/signup1.jpg">
            </div>
        </section>
<?php
 }
} else {
  echo "0 results";
}

}
?>
    </body>
</html>