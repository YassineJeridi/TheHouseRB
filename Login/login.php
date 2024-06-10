
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
$email = $_POST["email"];
$password = $_POST["password"];

// SQL query to find the user
$req1 = "SELECT * FROM client WHERE email = '$email' AND password = '$password'";
$res1 = mysqli_query($conn,$req1);

if(mysqli_num_rows($res1) > 0 ) {
  
  echo "<script>alert('Login successful!');window.location.href='../index.html'</script>;";        
} 
else {
  $req2 = "SELECT * FROM client WHERE email = '$email' ";
  $res2 = mysqli_query($conn,$req2);

  if(mysqli_num_rows($res2) > 0 ) 
  {
    
    echo "<script>alert('password incorrect');window.location.href='login.html';</script> </script>";
  }
  else
  {
    echo "<script>alert('cet compte n existe pas');window.location.href='login.html';</script> </script>";
  }
}

// Close the connection
mysqli_close($conn);

?>