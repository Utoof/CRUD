<?php
require "connectivity.php";
$updateid =$_GET["updateuserid"];
$updatehun = "SELECT * FROM `courses` WHERE courseid = $updateid";
$fetch = mysqli_query($connection,$updatehun);
$dataa = mysqli_fetch_assoc($fetch);

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
<?php
require "navbar.php";

?>
<div class="container">
<form method="POST" action="updateaction.php?userid=<?php echo $updateid?>"> 
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Course name</label>
    <input type="text" name="coursename" value=<?Php echo $dataa["coursename"]?> class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">course fee</label>
    <input type="number" name="coursefee"  value=<?Php echo $dataa["coursefee"]?> class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" name="updatebtn" class="btn btn-primary">update</button>

</form>
</div>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>