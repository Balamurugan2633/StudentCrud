<?php
include_once("config.php");
$id=$_GET['id'];
$sql="DELETE FROM `student_record` WHERE id=".$id;
$result=mysqli_query($con,$sql);
if($result){
    echo '<script type="text/javascript"> 
    window.location="dashboard.php";
     </script>';
}else{
     echo "not delete";
}

?>