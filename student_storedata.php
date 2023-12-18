<?php
include_once("config.php");
$name = $_POST['name'];
$email = $_POST['email'];
$phno = $_POST['phno'];
$gender = $_POST['gender'];
$address = $_POST['address'];
$sql="INSERT INTO `student_record`(`Name`, `Email`, `Phone_no`, `Gender`, `Address`) VALUES 
('$name','$email','$phno','$gender','$address')";
$result=mysqli_query($con,$sql);
if($result){
    echo '<script type="text/javascript"> 
window.location="dashboard.php";
 </script>';
}
else{
    echo"no";
}
?>