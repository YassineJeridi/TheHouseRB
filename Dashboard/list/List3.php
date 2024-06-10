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

// Define the query to fetch available robes (status = 1)
$req = "SELECT * FROM contact ";

$result = mysqli_query($conn,$req);

// Check if there are any results
if (mysqli_num_rows($result) > 0) {
  echo "<h1> les message envoyer </h1>";
  echo "<table>";
  echo "<tr><th>Numero</th><th>Nom</th><th>email</th><th>message</th></tr>";

  // Loop through each robe and display information
  while($row = mysqli_fetch_array($result)) 
  {
    echo "<tr>";
    echo "<td>" . $row["nummessage"] . "</td>";
    echo "<td>" . $row["nom"] . "</td>";
    echo "<td>" . $row["email"] . "</td>";
    echo "<td>" . $row["message"] . "</td>";
    echo "</tr>";
  }

  echo "</table>";
} 
else {
  echo "No available messages found.";
}

mysqli_close($conn);

?>

</body>
</html>