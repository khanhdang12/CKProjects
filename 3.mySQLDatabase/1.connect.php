<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "CK1";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// $conn = mysqli_connect('localhost', 'root', '', 'CK1');

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>