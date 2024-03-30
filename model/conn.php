<?php
$host = "localhost";
$username = "root";
$password = "root";
$databasename = "REGISTER";
$conn = new mysqli($host, $username, $password, $databasename);
if ($conn->connect_error) {
  die ("Could not connect:" . $conn->connect_error);
}

?>