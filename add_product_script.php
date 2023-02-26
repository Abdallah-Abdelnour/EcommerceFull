<?php

require("includes/common.php");

  // Getting the values from the signup page using $_POST[] and cleaning the data submitted by the user.
  $name = $_POST['name'];
  $name = mysqli_real_escape_string($con, $name);

  $price = $_POST['price'];
  $price = mysqli_real_escape_string($con, $price);

  $imageProdct = $_POST['imageProdct'];
  $imageProdct = mysqli_real_escape_string($con, $imageProdct);

  $sql = "INSERT INTO items (name, price , images) VALUES ('$name', '$price', '$imageProdct')";

if (mysqli_query($con, $sql)) {
  echo "New record created successfully";
  header('location: productsAdmin.php');
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($con);
}

mysqli_close($con);
?>