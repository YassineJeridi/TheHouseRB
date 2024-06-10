<!DOCTYPE html>
<html>
<head>
  <title>Available Robes</title>
  <link rel="stylesheet" href="liste.css">  
</head>
<body>
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

// Query to select all clients
$req = "SELECT * FROM client";

$result = mysqli_query($conn, $req);

// Check if there are any results
if (mysqli_num_rows($result) > 0) {
    echo "<h1>Client Information</h1>";
    echo "<table border='1'>";
    echo "<tr><th>Client Number</th><th>First Name</th><th>Last Name</th><th>Email</th><th>Phone</th><th>Password</th></tr>";

    // Loop through each row and display information
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row["numclt"] . "</td>";
        echo "<td>" . $row["nom"] . "</td>";
        echo "<td>" . $row["prenom"] . "</td>";
        echo "<td>" . $row["email"] . "</td>";
        echo "<td>" . $row["tlf"] . "</td>";
        echo "<td>" . "*******" . "</td>";
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "No available clients found.";
}


mysqli_close($conn);

?>

</body>
</html>
