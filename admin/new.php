<?php
    require_once "db.php";
    $city = $_POST['city'];
    $quantity = $_POST['quantity'];
    $sql = "INSERT INTO `histogram`(city,quantity)VALUES('$city','$quantity')";
    mysqli_query($conn,$sql);
    header("Location:index.php");
?>