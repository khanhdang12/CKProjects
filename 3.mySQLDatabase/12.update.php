<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "CK1";

// Create connection
// $conn = mysqli_connect($servername, $username, $password, $dbname);
$conn = mysqli_connect('localhost', 'root', '', $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "UPDATE MyGuests SET lastname='Doe' WHERE id=3";

if (mysqli_query($conn, $sql)) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . mysqli_error($conn);
}

mysqli_close($conn);
?>