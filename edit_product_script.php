<?php

require("includes/common.php");

  // Getting the values from the signup page using $_POST[] and cleaning the data submitted by the user.
  $id = $_POST['id'];
  $id = mysqli_real_escape_string($con, $id);

  $name = $_POST['name'];
  $name = mysqli_real_escape_string($con, $name);

  $price = $_POST['price'];
  $price = mysqli_real_escape_string($con, $price);

  $imageProdct = $_POST['imageProdct'];
  $imageProdct = mysqli_real_escape_string($con, $imageProdct);

  // echo("Id : ".$id."<br>");
  // echo("Name : ".$name."<br>");
  // echo("Price : ".$price."<br>");
  // echo("Image : ".$imageProdct."<br>");

//   $namee=$_POST['name'];
//   $pricee=$_POST['price'];

  $sql = "UPDATE items SET name='$name', price='$price', images='$imageProdct' WHERE id=$id";


  if (mysqli_query($con, $sql)) {
    echo "Record updated successfully";
   header('location: productsAdmin.php');
  } else {
    echo "Error updating record: " . mysqli_error($con);
  }
  
  mysqli_close($con);



  




?>