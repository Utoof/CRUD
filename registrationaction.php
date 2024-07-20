<?php

require "connectivity.php";

if (isset($_POST["submitbtn"])) {
    
    $username = $_POST["username"];
    $useremail = $_POST["useremail"];
    $userpassword = $_POST["userpassword"];
    $confirmpassword = $_POST["reapetpassword"];



    if (strlen($username) > 3){


        if(strlen($useremail)>5){
    
    
            if(strlen($userpassword) > 4){
    
    
                if($userpassword === $confirmpassword){
    
    
$query = "INSERT INTO `userregitration`(`username`, `useremail`, `userpassword`, `confirmpassword`) VALUES ('$username','$useremail','$userpassword','$confirmpassword')";    

    print_r($query);
    $dlvryBoy =mysqli_query($connection,$query);
    
    
                    if($dlvryBoy==TRUE){
                        echo "<script> alert('data successfully register') </script>";
                        header('location:login.php');
                    }

    
               }else{
    
                    echo "<script> alert('kindly select your same password') </script>";
                }
    
    
            }else{
    
                echo "<script> alert('user password is to weak') </script>";
            }
            
            
        }else{
    
            echo "<script> alert('user email is not valid') </script>";
        }
    
     }else{
    
    echo "<script> alert('Username is to small') </script>";
    
    }
    
    
    
    
    }
    
    
    


?>