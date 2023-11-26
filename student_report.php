
<?php
include_once("config.php");
$sql="SELECT * FROM `student_record`";
$result=mysqli_query($con,$sql);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        h2{
            text-align: center;
            color: green;
        }
        table {
              font-family: arial, sans-serif;
              border-collapse: collapse;
              width: 100%;
              }

        td, th {
              border: 1px solid #dddddd;
              text-align: left;
              padding: 8px;
              }

        tr:nth-child(even) {
              background-color: #dddddd;
              }
    </style>
</head>
<body>
    <h2>Student Report page</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>NAME</th>
            <th>Email</th>
            <th>Gender</th>
            <th>Mobile No</th>
            <th>Graduation</th>
            <th>Districts</th>
            <th>Address</th>
            <th>Action</th>
        </tr>
        <?php while($row=mysqli_fetch_array($result)){ ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['Name']; ?></td>
            <td><?php echo $row['Email']; ?></td>
            <td><?php echo $row['Gender']; ?></td>
            <td><?php echo $row['Phone_no'];?></td>
            <td><?php echo $row['Education']; ?></td>
            <td><?php echo $row['District']; ?></td>
            <td><?php echo $row['Address']; ?></td>
            <td><button style="background-color:red;"onclick="removeFromCart(<?php echo $row['id']; ?>)">Remove</button>
            <button style="background-color:blue;"onclick="edit(<?php echo $row['id']; ?>)">Edit</button></td>
        </tr>
        <?php }?>
    </table>
</body>
</html>
<script>
    function removeFromCart(id){
        var id=id;
        window.location="deletedata.php?id="+id;   
    }
    function edit(id){
        var id=id;
        window.location="edit.php?id="+id;   
    }
</script>
