<?php
include_once("config.php");
$id=$_POST['id'];
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



$sql="UPDATE `student_record` SET`Name`='$name',`Email`='$email',`Phone_no`='$phno',`Gender`='$gender',`Education`='$educationlist',`District`='$district',`Address`='$address' WHERE id=".$id;
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