<?php
include("config.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<style>
.card {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  width: 30%;
  margin-top:15px;
}

.card:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

.container {
  padding: 10px 10px 10px 10px;
}
</style>
<body>
<center>
<h2>Welcome to the Dashboard</h2></center>

<div class="row">
<center>
<div class="card">
 <center> <img src="add-user.png" alt="Avatar" style="width:10%; margin-top:5px;"></center>
  <div class="container">
  <center> <a href="http://localhost/studentCrud/insertdata.php">Insert Data</a> </center>
  </div>
</div>
<div class="card">
<center><img src="report.png" alt="Avatar" style="width:10% ; margin-top:5px;"></center> 
  <div class="container">
  <center><a href="http://localhost/studentCrud/student_report.php">Report Data</a></center>
  </div>
</div>
</center>
</div>

</body>

</html>