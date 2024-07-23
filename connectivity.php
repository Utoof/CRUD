<?php

$servername = "localhost";
$username  = "root";
$password = "";
$dbname = "ff";





$connection = mysqli_connect($servername,$username,$password,$dbname);
print_r($connection);
?>