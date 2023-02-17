<?php 
$servername = "localhost";
$username = "username";
$password = "bv_PnIi6I^Ph";
$dbname = "USERS";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


$sql = "SELECT * FROM `USERS` WHERE username = "admin" AND password = "abc123"";

if ($conn->query($sql) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}

$conn->close();


?>