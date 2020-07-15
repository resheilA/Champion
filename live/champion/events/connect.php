<?php
$servername = "localhost";
$username = "pioncham_player";
$password = "iBcUqy9yJg)T";
$dbname = "pioncham_sports";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


?>