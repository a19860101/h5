<?php
    require_once("db.php");
    $id = $_GET["id"];
    $sql = "DELETE FROM `histogram` WHERE id = ".$id;
    mysqli_query($conn,$sql);
    header("Location:index.php");
?>