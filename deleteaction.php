<?php
   

require "connectivity.php";


$deletehun = $_GET["userid"];
$deletebtn = "DELETE FROM `courses` WHERE courseid = $deletehun";
$deletework = mysqli_query($connection,$deletebtn);
header('location:studentlist.php');
require "connectivity.php";


?>