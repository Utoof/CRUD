<?php

require "connectivity.php";


if (isset($_POST["submitbtn"])) {

    $localcourse = $_POST["coursename"];
    $localfee = $_POST["coursefee"];


// $query = "INSERT INTO `courses`(`coursename`,`coursefee`) VALUES ('$localcourse','$localfee')";

// mysqli_query($connection,$query);



// }else if(isset($_POST["readbtn"])) {
//     $dataread = "SELECT * FROM `courses`";

//     mysqli_query($connection,$dataread);
// }

$check_data = "SELECT * FROM `courses` where coursename = '$localcourse'";

$check_status = mysqli_query($connection,$check_data);

 $numbercountavail = mysqli_num_rows($check_status);

echo $numbercountavail;



if ($numbercountavail == 0) {
     $query = "INSERT INTO `courses`(`coursename`,`coursefee`) VALUES ('$localcourse','$localfee')";

 mysqli_query($connection,$query);
 header('location:home.php');
}else{
    header('location:error.php');
}
}


?> 