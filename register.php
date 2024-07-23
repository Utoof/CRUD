
<?php
require "connectivity.php";
if (isset($_POST["submitbtn"])) {

    $username = $_POST["username"];
    $useremail =  $_POST["useremail"];
    $userpassword = $_POST["userpassword"];
    $userrole = $_POST["userrole"];

    
    $query ="SELECT * FROM `user_registration` where username = $username,useremail = $useremail,userpassword = $userpassword,userrole=$userrole";
    
}




?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container">
<form method="POST" action="verfication.php">
  <div class="mb-3 mt-5">
    <label for="exampleInputEmail1" class="form-label">username</label>
    <input type="text" name="username" class="form-control" aria-describedby="emailHelp">
  </div>
  <div class="mb-3 mt-5">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" name="useremail" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3 mt-5">
    <label for="exampleInputEmail1" class="form-label">user password</label>
    <input type="userpassword" name="userpassword" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
  <label for="exampleInputEmail1" class="form-label">user role</label>

<select name="userrole"  class="form-control">role</select>


<option>
    
</option>
</div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" name="submitbtn" class="btn btn-primary">Submit</button>
</form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>