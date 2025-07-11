<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "mini_project"; // replace with your DB

$conn = new mysqli($servername, $username, $password, $database);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>
