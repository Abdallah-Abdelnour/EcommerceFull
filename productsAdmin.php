<?php
        $_SESSION['user_role']="admin";
        $_SESSION['email']="abdel@gmail.com";
        require("includes/common.php");
        $sql = "select * from items";
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
            .new-pro{
                display: block;
                margin: 70px auto 0px;
                width: 200px;                
            }
            .new-pro a{
                padding: 10px;
                background-color: #088178;
                color:#eee;
                font-size:17px;
            }
            .form-detailsss{
                margin: -20px 20px !important;
            }
            table{
                width:100%;
                text-align:center;
            }
            table td{
                padding:5px 10px;
            }
            table a{
                width:100%;
                border:none; 
                padding:5px;
                border-radius:5px;
                color:#eee;
            }
            .edit{
                width:100%;
                display:block;
                background-color: #088178;
            }
            .delete{
                width:100%;
                display:block;
                background-color: red;
            }
            .aa{
                width: 150px;
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
        <div class="new-pro">
            <a href="addNewProduct.php">Add New Product :</a>
        </div>
        <section class="form-detailsss" id="form-details">
            <table border="">
                <thead>
                    <tr>
                        <td>id</td>
                        <td>Name</td>
                        <td>Price</td>
                        <td>Image</td>
                        <td>Edit</td>
                        <td>delete</td>
                    </tr>
                </thead>
                <tbody>
        <?php

        $j=0;
        if ($result = mysqli_query($con, $sql)) {
            // Fetch one and one row
            while ($row = mysqli_fetch_row($result)) {
                $i=$row[0]-1;
                $j++;
        ?>
                    <tr>
                        <td><?php echo($row[0]); ?></td>
                        <td><?php echo($row[1]); ?></td>
                        <td><?php echo($row[2]); ?></td>
                        <td><?php echo($row[3]); ?></td>
                        <td class="aa"><a href="editProduct.php?id=<?php echo($row[0]); ?>" class="edit">Edit</a></td>
                        <td class="aa"><a href="delate_product_script.php?id=<?php echo($row[0]); ?>" class="delete">Delete</a></td>
                    </tr>

        <?php
            }
            mysqli_free_result($result);
        }
        ?>

                </tbody>
            </table>
        </section>

    </body>

</html>