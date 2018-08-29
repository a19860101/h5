<?php
    $user = "iprivavo_zac";
    $pw = "Lcc198601ol@";
    $host = "localhost";
    $db = "iprivavo_h5";

    $conn = mysqli_connect($host,$user,$pw,$db)or die("Databases error");
    mysqli_query($conn,"SET NAMES utf8");
?>