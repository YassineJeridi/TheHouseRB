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

$nom = $_POST["name"];
$email = $_POST["email"];
$message = $_POST["message"];


$req1 = "INSERT INTO contact (nom,email,message) VALUES ('$nom','$email','$message')";
$res1 = mysqli_query($conn,$req1);


if(mysqli_affected_rows($conn))
{
    echo "<script>alert('Merci de nous contacter !');</script>";
}
else
{
    echo "<script>alert('erreur d'envoie de message !');</script>"; 
}

mysqli_close($conn);

?>
