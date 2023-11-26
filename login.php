<?php
include_once("config.php");
$username=$_POST['username'];
$password=$_POST['password'];
$sql="SELECT * FROM `student_details` WHERE Name='$username' AND Password='$password'";
$result=mysqli_query($con,$sql);
if(mysqli_num_rows($result)>0)
echo '<script type="text/javascript"> 
window.location="dashboard.php";
 </script>';
else
echo"Username or Password Incorrected";

?>