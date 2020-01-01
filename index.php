<?php
$server = "localhost";
$user = "root";
$pass = "toor";

$conn = new mysqli($server, $user, $pass);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$conn->close();
?>