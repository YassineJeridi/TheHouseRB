
<?php

// Database connection details (replace with your actual details)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "thehouserb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if (mysqli_connect_error()) 
{
  die("Connection failed: " . mysqli_connect_error());
}



// Get form data
$login = $_POST["login"];
$keypass = $_POST["keypass"];

// Prepare and execute SQL query to check if login exists
$req = "SELECT * FROM admin WHERE login = '$login' AND keypass = '$keypass'";
$res = mysqli_query($conn,$req);

if (mysqli_num_rows($res) > 0) {
    // Credentials are correct
    echo "<script> window.location.href='../Dashboard/layout/dashboardindex.html'; alert('Login successful!'); </script>";
} else {
    // Credentials are incorrect
    echo "<script>alert('Login incorrect');</script>";
}

// Close the connection ; window.location.href='loginadmin.html'

mysqli_close($conn);

?>