<?php

require "connectivity.php";

// $dataread = "SELECT * FROM `courses`";
// $courselist = mysqli_query($connection,$dataread);
// $coursedeatil = mysqli_fetch_assoc($courselist);
// print_r($courselist);

$fetchcourse = "SELECT * FROM `courses`";
$coursedata_object = mysqli_query($connection,$fetchcourse);
//  print_r($coursedata_object);
//  echo "<br>";
//  $courselist = mysqli_fetch_assoc($coursedata_object); 
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
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="studentlist.php">STUDENT LIST</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="studentadd">student add</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li>
      </ul>
    </div>
  </div>
</nav>


<div class="container">


<table class="table mt-5">
  <thead>







    <tr>
      
      <th scope="col">courseid</th>
      <th scope="col">coursename</th>
      <th scope="col">coursefee</th>
      <th scope="col">Action</th>

    </tr>
  </thead>
  <tbody>
    <?php

while ( $courselist = mysqli_fetch_assoc($coursedata_object)) {

// print_r($courselist["courseid"]);
// echo "<br>";
// print_r($courselist["coursename"]);
// echo "<br>";
// print_r($courselist["coursefee"]);
// echo "<br>";
// echo "<br>";





?>


    <tr class="table_dark">
      <th scope="row"><?php print_r($courselist["courseid"])?></th>
      <td><?php print_r($courselist["coursename"])?></td>
      <td><?php print_r($courselist["coursefee"])?></td>
      <td><a href="update.php?updateuserid=<?php print_r($courselist["courseid"])?>" class="btn btn-primary">update</button></td>
   <td><a href="deleteaction.php?userid=<?php print_r($courselist["courseid"])?>" class="btn btn-danger">Delete</button></td>

      <?php } ?>
    </tr>
  
  </tbody>
</table>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>