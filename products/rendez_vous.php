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

$name = $_POST["name"];
$tel = $_POST["tel"];
$date = $_POST["date"];
$taille = $_POST["taille"];
$numrobe = $_POST["numrobe"];


$req1 = "INSERT INTO `rendezvous` (`numrobe`, `nomclient`, `daterdv`, `telephone`, `taille`)
        VALUES ('$numrobe', '$name', '$date', $tel, $taille)";
$res1 = mysqli_query($conn,$req1);

if(mysqli_affected_rows($conn))
{
    echo "<script>alert('Rendez Vous Noté !'); window.location.href='collection.html'; </script>";
}
else
{
    echo "<script>alert('erreur d'enregistrer le Rendez Vous !');</script>"; 
}

mysqli_close($conn);

?>
