<?php
require_once("db.php");
$quantity = $_POST["quantity"];
$id = $_POST["id"];

$sql = "UPDATE `histogram` SET quantity='$quantity' WHERE id=".$id;
mysqli_query($conn,$sql);
header("Location:index.php");
?>