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
$req1 = "SELECT COUNT(*) FROM robe WHERE status = 1";
$res1 = mysqli_query($conn,$req1);
$r1 = mysqli_fetch_row($res1);


// Define the query to fetch available robes (status = 1)
$req2 = "SELECT COUNT(*) FROM robe WHERE status = 0";
$res2 = mysqli_query($conn,$req2);
$r2 = mysqli_fetch_row($res2);



// Define the query to fetch available robes (status = 1)
$req3 = "SELECT COUNT(*) FROM robe ";
$res3 = mysqli_query($conn,$req3);
$r3 = mysqli_fetch_row($res3);

mysqli_close($conn); 

?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Robes</title>
    <link rel="stylesheet" href="menu.css">
</head>
<body>
    <main>
        <center>
        <section class="links">
            <a href="../list/List1.php" target="droite">List des robes réservées</a>
            <a href="../list/List2.php" target="droite">List des robes non réservées</a>
            <a href="../list/List4.php" target="droite">List des client</a>
            <a href="../list/List3.php" target="droite">List des message envoyer</a>
            <a href="../confirm/confirm.html" target="droite">Confirmer la réservation d'une robe</a>
            <a href="../ajouteradmin/ajouteradmin.html" target="droite">Ajouter un nouvel admin</a>

        </section>
    
        <section class="stats">
            <div class="stat">
                <h2>Nombre de robes réservées : <span id="reservedCount"><?php echo($r1[0])?></span></h2>
            </div>
            <div class="stat">
                <h2>Nombre de robes non réservées : <span id="unreservedCount"><?php echo($r2[0])?></span></h2>
            </div>
            <div class="stat">
                <h2>Nombre totale des robes : <span id="totalCount"><?php echo($r3[0])?></span></h2>
            </div>
        </section>
    </center>
    </main>
</html>
