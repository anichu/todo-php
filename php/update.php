<?php

// take all data
$id = $_POST['id'];
$name = $_POST['name'];
$price = $_POST['price'];
$description = $_POST['description'];
$quantity = $_POST['quantity'];
$exp_date = $_POST['expire_date'];

//creating connection
$conn = mysqli_connect("localhost", "root", "", "assignment2");
$sql = "UPDATE `product` SET `name`='$name',`description`='$description',`quantity`='$quantity',`price`='$price',`expire_date`='$exp_date' WHERE id = $id";


if(mysqli_query($conn, $sql)){
    header("Location:../index.php");
}else{
    die("Query failed");
}
?>