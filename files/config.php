
<?php
$servername = "45.130.228.205";
$username = "u858211835_myclub";
$password = "Bigv94124";
$db = "u858211835_myclub";

// Create connection
$link = new mysqli($servername, $username, $password ,$db);

// Check connection
if ($link->connect_error) {
  die("Connection failed: " . $link->connect_error);
}
$test = "fsfsdf";
?>

