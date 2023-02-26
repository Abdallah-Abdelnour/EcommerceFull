<?php

require("includes/common.php");
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $item_id = $_GET['id'];
    $user_id = $_SESSION['user_id'];
    echo($item_id."<br>");
    echo($user_id."<br>");

    $sql = "DELETE FROM items WHERE id='$item_id'";
    if ($con->query($sql) === TRUE) {
        echo "Record deleted successfully";
        header('location: productsAdmin.php');
      } else {
        echo "Error deleting record: " . $con->error;
      }
      
    $con->close();

}

?>