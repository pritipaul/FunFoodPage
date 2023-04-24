<?php

$server = "localhost";
$username = "root";
$password = "";

$con = mysqli_connect($server,$username,$password);

if (!$con) {
    echo("Error Connection" . mysqli_connect_error());
}
//echo ("Sucessfully Connect");



?>