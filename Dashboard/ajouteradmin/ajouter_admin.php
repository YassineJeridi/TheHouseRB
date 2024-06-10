
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


$login = $_POST["pseudo"];
$keypass = $_POST["cle"];

$req0 = "SELECT * FROM ADMIN  WHERE LOGIN = '$login'";
$res0 = mysqli_query($conn,$req0);

if(mysqli_num_rows($res0)>0)
{
  echo "<script>alert('ce pseudo deja existe !'); window.location.href='../ajouteradmin/ajouteradmin.html';</script>";
}
else {
  $req1 = "INSERT INTO ADMIN (login , keypass) values ('$login','$keypass')";
  $res1 = mysqli_query($conn,$req1);

  if(mysqli_affected_rows($conn))
  {
      echo "<script>alert('Admin Ajouté avec succès !'); window.location.href='../ajouteradmin/ajouteradmin.html';</script>";
  }
  else
  {
      echo "<script>alert('erreur d'ajout de l'admin !'); window.location.href='../ajouteradmin/ajouteradmin.html';</script>"; 
  }
}


mysqli_close($conn);

?>
