<?php
session_start();
include('includes/header.php');
include('includes/topbar.php');
include('includes/sidebar.php');
include('config/cbcon.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    body {
      background-color: #CCCCFF;
    }

    .container {
      display: flex;
      justify-content: center;
      margin-top: 90px;
      margin-right: 170px;
    }

    .card {
      /* background-color: lightblue; */
      margin-top: -3vh;
    }
    .form-control {
  height: 6vh; 
  width: 30vw; 
  min-width: 190px;
  /* max-width: 438px;  */
}
    .card-body {
      margin: 9vh 8vh;
    }
  </style>
</head>

<body>
  <form action="codex.php" method="post">
    <div class="container">
      <div class="card">
        <div class="card-body">
        <label for="add">College Name</label>
          <input id="add" type="text" name="collegename" class="form-control" ><br>
          <label for="add">Course Name</label>
          <input id="add" type="text" name="courseoffered" class="form-control" ><br>
          <label for="ad">Specialization</label>
<textarea id="ad" name="specoffered" class="form-control" style="resize: vertical; display: block;"></textarea><br>
          <label for="ad">Fee Structure</label>
          <input id="ad" type="text" name="feestr" class="form-control" ><br>
          <button type="submit" class="btn btn-primary " name="addcourse">Add Course</button>
        </div>
      </div>
    </div>
  </form>
</body>

</html>