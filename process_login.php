<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "users";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $username = $_POST["username"];
    $password = $_POST["password"];

   

    
    $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // User found, redirect to another page (replace 'dashboard.php' with your desired page)
        header("Location: dashboard.php");
        exit();
    } else {
        // User not found, handle the error or redirect to the login page with an error message
        echo "Invalid username or password";
    }
}

// Close the database connection
$conn->close();
?>
