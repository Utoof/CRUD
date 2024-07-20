<?php
require "connectivity.php";

if (isset($_POST["loginbtn"])) {
$useremail = $_POST["useremail"];
$userpassword = $_POST["userpassword"];


$query = "SELECT * FROM `userregitration` WHERE useremail = '$useremail' and userpassword = '$userpassword'";

$dilevery = mysqli_query($connection,$query);
$fetch = mysqli_fetch_assoc($dilevery);

if ($fetch == true) {
    header('location:done.php');
}
else{
    echo "<script> alert('crediential is wrong')</script>";
}

}




?>