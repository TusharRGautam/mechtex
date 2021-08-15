<?php
$servername = "localhost:3306";
$username = "mechtexroot";
$password = "mechtex@2021";
$database = "mechtex";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$database);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
//echo "Connected successfully";
?>