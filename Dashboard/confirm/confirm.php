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

$numrobe = $_POST["numrobe"];
$numclt = $_POST["numclt"];
$datedeb = $_POST["datedeb"];
$datefin = $_POST["datefin"];


$req0 = "SELECT * FROM robe WHERE numrobe = '$numrobe'";
$res0 = mysqli_query($conn,$req0);

if(mysqli_num_rows($res0) < 1)
{
    echo "<script>alert('cette robe existe pas !'); window.location.href='../confirm/confirm.html';</script>";
}
else 
{   
    
    $req2 = "SELECT * FROM client WHERE numclt = '$numclt' ";
    $res2 = mysqli_query($conn,$req2);

    if(mysqli_num_rows($res2) < 1)
    {
        echo "<script>alert('ce client existe pas !'); window.location.href='../confirm/confirm.html';</script>";
    }

    else
    {

        $req1 = "SELECT * FROM robe WHERE numrobe = '$numrobe' AND status = 1";
        $res1 = mysqli_query($conn,$req1);
    
        if(mysqli_num_rows($res1) > 0)
        {
            echo "<script>alert('cette robe est deja reserver !'); window.location.href='../confirm/confirm.html';</script>";
        }

        else 
        {
            $req3 = "INSERT INTO reservation (numrobe,numclt,datedeb,datefin) VALUES ('$numrobe','$numclt','$datedeb','$datefin') ";
            $res3 = mysqli_query($conn,$req3);

            
            $req4 = "UPDATE ROBE SET status = 1 WHERE numrobe = '$numrobe' ";
            $res4 = mysqli_query($conn,$req4);


            if(mysqli_affected_rows($conn))
            {
                echo "<script>alert('Reservation Ajouté avec succès !');window.location.href='../confirm/confirm.html';</script>";
            }
            else
            {
                echo "<script>alert('erreur d'ajout de reservation !');window.location.href='../confirm/confirm.html';</script>"; 
            }



        }
    }
}

mysqli_close($conn);

?>

</body>
</html>
