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
// Check connection
if (mysqli_connect_error()) 
{
  die("Connection failed: " . mysqli_connect_error());
}

// Define the query to fetch available robes (status = 1)
$number=$_POST["number"];
$name=$_POST["number"];



$sql = "SELECT status FROM robe WHERE where = 1 ";
$result = mysqli_query($conn,$req);

// Check if there are any results
if (mysqli_num_rows($result) > 0) {
  echo "<h1>Available Robes</h1>";
  echo "<table>";
  echo "<tr>
          <th>Number</th>
          <th>Name</th>
          <th>Size</th>
          <th>Color</th>
          <th>Category</th>
        </tr>";

  // Loop through each robe and display information
  while($row = mysqli_fetch_array($result)) 
  {
    echo "<tr>";
    echo "<td>" . $row["numrobe"] . "</td>";
    echo "<td>" . $row["nom"] . "</td>";
    echo "<td>" . $row["taille"] . "</td>";
    echo "<td>" . $row["couleur"] . "</td>";
    echo "<td>" . $row["categorie"] . "</td>";
    echo "</tr>";
  }

  echo "</table>";
} 
else {
  echo "No available robes found.";
}

mysqli_close($conn);

?>

</body>
</html>
