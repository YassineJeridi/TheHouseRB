
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

// Get email and password from POST request
$nom = $_POST["nom"];
$prenom = $_POST["prenom"];
$email = $_POST["email"];
$password = $_POST["password"];
$tel = $_POST["tlf"];
$age = $_POST["age"];

// SQL query to find the user
$req1 = "SELECT * FROM client WHERE email = '$email'";
$res1 = mysqli_query($conn,$req1);

if(mysqli_num_rows($res1) > 0 ) {
  
  echo "<script>alert('vous avez deja un compte associer a ce mail veuillez se connecter');window.location.href='login.html'</script>;";        
} 
else {
  $req2="INSERT INTO `client` (`nom`, `prenom`, `email`, `tlf`, `password`, `age`)
  VALUES('$nom','$prenom','$email','$tel','$password','$age')";
  $res2 = mysqli_query($conn,$req2);

  if(mysqli_affected_rows($conn) > 0 ) 
  {
    
    echo "<script>alert('bienvenu a The House Rb Profite de ta visite');window.location.href='../index.html';</script> </script>";
  }
  else
  {
    echo "<script>alert('erreur d inscription');window.location.href='login.html';</script> </script>";
  }
}

// Close the connection
mysqli_close($conn);

?>