<?php
$servername = "superiorrentaldatabase.c6pgrhgwqhys.eu-west-1.rds.amazonaws.com";
$username = "admin";
$password = "test12345";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>