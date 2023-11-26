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
input[type=tel] {
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
        <form action="student_storedata.php" method="post">
            
            <div>
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" pattern="[A-Za-z\s]+" required>
            </div>
            <div>
                <label for="email">Email:</label>
                <input type="text" id="email" name="email"pattern="[a-z0-9._%+\-]+@[a-z0-9.\-]+\.[a-z]{2,}$" required>
            </div>
            
            <div>
                <label for="phno">Phone No:</label>
                <input type="tel" id="phno" name="phno" pattern="[0-9]{10}" title="Please enter a valid 10-digit phone number"required>
            </div><br>
            <div>
                <label for="gender">Gender:</label>
                <input type="radio" id="male" name="gender" value="Male">Male
                <input type="radio" id="female" name="gender" value="Female">Female
                <input type="radio" id="others" name="gender" value="Others">Others
            </div><br>
            <div>
                <label for="education">Education:</label>
                <input type="checkbox" id="ug" name="education2" value="UG">UG
                <input type="checkbox" id="pg" name="education3" value="PG">PG
            </div><br>
            <div>
                 <label for="district">Districts:</label>
                 <select id="district" name="district">
                 <option>Chennai</option>
                 <option>Trichy</option>
                 <option>Madurai</option>
                 <option>Coimbatore</option>
                 </select>
            </div><br>
            <div>
                <label for="address">Address:</label><br>
                <textarea rows="2" cols="50"id="address" name="address"></textarea>
            </div>

            <button type="submit" class="button">Submit</button>
        </form>
    </div>
</body>

</html>