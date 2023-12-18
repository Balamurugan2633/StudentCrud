<?php
include_once("config.php");
$id=$_POST['id'];
$name = $_POST['name'];
$email = $_POST['email'];
$phno = $_POST['phno'];
$gender = $_POST['gender'];
$address = $_POST['address'];
$sql="UPDATE `student_record` SET`Name`='$name',`Email`='$email',`Phone_no`='$phno',`Gender`='$gender',`Address`='$address' WHERE id=".$id;
$result=mysqli_query($con,$sql);
if($result){
    echo '<script type="text/javascript"> 
window.location="Student_report.php";
 </script>';
}
else{
    echo"no";
}
?>