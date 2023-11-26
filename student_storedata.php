<?php
include_once("config.php");
$name = $_POST['name'];
$email = $_POST['email'];
$phno = $_POST['phno'];
$gender = $_POST['gender'];
$district = $_POST['district'];
$address = $_POST['address'];

$education2 = '';
$education3 = '';

if (isset($_POST['education2'])) {
    $education2 = $_POST['education2'];
}
if (isset($_POST['education3'])) {
    $education3 = $_POST['education3'];
}

 $educationlist=$education2.'-'.$education3;

$sql="INSERT INTO `student_record`(`Name`, `Email`, `Phone_no`, `Gender`, `Education`, `District`, `Address`) VALUES 
('$name','$email','$phno','$gender','$educationlist','$district','$address')";
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