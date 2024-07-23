<?php
require "connectivity.php";

$updateid = $_GET["userid"];


if (isset($_POST["updatebtn"])) {
    $updatename = $_POST["coursename"];
    $updatefee = $_POST["coursefee"];

    $updatequery = "UPDATE `courses` SET `coursename`='$updatename',`coursefee`='$updatefee'";
    mysqli_query($connection,$updatequery);

}



?>