<?php
$servername = "localhost";
$username = "twc_admin";
$password = "5FMGjqiHmwpFCvUs";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>