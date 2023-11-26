<?php
include("config.php");
$id=$_GET['id'];
$sql="SELECT * FROM `student_record` where id=".$id;
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_array($result);
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
  *{
    text-align: left;
    text-decoration: solid;
  }
  h2{
    text-align: center;
  }
  input[type=text] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
}
input[type=number] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
}
input[type=textarea] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
}
.button {
  background-color: green; /* Green */
  border: black;
  width: 100%;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 15px;
}
</style>
<body>
<h2>Please Fill the Data Form for Employee</h2>

    <div class="container">
        <form action="Update_storedata.php" method="post">
              <div>
                
                <input type="hidden" id="id" name="id"   value="<?php echo $row['id'];?>" required>
            </div>
            <div>
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" pattern="[A-Za-z\s]+" value="<?php echo $row['Name'];?>" required>
            </div>
            <div>
                <label for="email">Email:</label>
                <input type="text" id="email" name="email" pattern="[a-z0-9._%+\-]+@[a-z0-9.\-]+\.[a-z]{2,}$"value="<?php echo $row['Email'];?>"required>
            </div>

            <div>
                <label for="phno">Phone No:</label>
                <input type="number" id="phno" name="phno" pattern="[0-9]{10}"title="Please enter a valid 10-digit phone number"value="<?php echo $row['Phone_no'];?>"required>
            </div><br>
            <div>
                <label for="gender">Gender:</label>
                <?php if($row['Gender']=="Male"){?>
                <input type="radio" id="male" name="gender" value="Male" checked >Male
                <input type="radio" id="female" name="gender" value="Female" >Female
                <input type="radio" id="others" name="gender" value="Others" >Others

                <?php } else if($row['Gender']=="Female"){?>
                    <input type="radio" id="male" name="gender" value="Male">Male
                    <input type="radio" id="female" name="gender" value="Female" checked>Female
                <input type="radio" id="others" name="gender" value="Others" >Others
                <?php } else if($row['Gender']=="Others"){?>
                    <input type="radio" id="male" name="gender" value="Male">Male
                    <input type="radio" id="female" name="gender" value="Female" checked>Female
                <input type="radio" id="others" name="gender" value="Others" checked>Others
                <?php }else{ ?>
                    <input type="radio" id="male" name="gender" value="Male">Male
                    <input type="radio" id="female" name="gender" value="Female" >Female
                <input type="radio" id="others" name="gender" value="Others" >Others
                <?php } ?>
            </div><br>
            <div>
                <label for="education">Education:</label>
                <?php   
                     $edu=explode('-',$row['Education']);
                     if($edu[0]=="UG"){
                ?>
                <input type="checkbox" id="ug" name="education2" value="UG" checked>UG
                <?php   
                     }else{
                ?>
                                <input type="checkbox" id="ug" name="education2" value="UG" >UG

                <?php   
                     }
                ?>
                <?php   
                     if($edu[1]=="PG"){
                ?>
                <input type="checkbox" id="pg" name="education3" value="PG" checked>PG
                <?php   
                     }else{
                ?>
                <input type="checkbox" id="pg" name="education3" value="PG" >PG

                <?php   
                     }
                ?>
            </div><br>
            <div>
                 <label for="district">Districts:</label>
                 <select id="district" name="district">
                 <?php if($row['District']=="Chennai"){?>
                 <option>Chennai</option>
                 <option>Trichy</option>
                 <option>Madurai</option>
                 <option>Coimbatore</option>
                 <?php } else if($row['District']=="Trichy"){?>
                <option>Trichy</option>
                <option>Chennai</option>
                 <option>Madurai</option>
                 <option>Coimbatore</option>
                 <?php } else if($row['District']=="Madurai"){?>
                <option>Madurai</option>
                <option>Trichy</option>
                <option>Chennai</option>
                 <option>Coimbatore</option>
                 <?php } else if($row['District']=="Coimbatore"){?>
                <option>Coimbatore</option>
                <option>Madurai</option>
                <option>Trichy</option>
                <option>Chennai</option>
                <?php } ?>


                 </select>
            </div><br>
            <div>
                <label for="address">Address:</label><br>
                <textarea rows="2" cols="50"id="address" name="address"><?php echo $row['Address'];?></textarea>
            </div>

            <button type="submit" class="button">Update</button>
        </form>
    </div>
    
</body>

</html>