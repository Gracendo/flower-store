<?php
session_start();
require_once "../model/conn.php";
$username = $_POST['username'];
$password = $_POST['password'];
$sql = "SELECT * FROM user WHERE username = '$username'";
$result = $conn->query($sql);
if ($result->num_rows == 1) {
  $row = $result->fetch_assoc();
  $profilePicture = $row['profilePicture'];
  $userid=$row['id'];
  if (password_verify($password, $row['password'])) {
    unset($row['password']);
    $_SESSION["img"] = $profilePicture;
    $_SESSION["userid"]=$userid;
    header('Location:../view/home.php');
  } else {
    $_SESSION['error'] = "Incorect username or password";
    die();
  }
} else {
  $_SESSION['error'] = "Incorect username or password";
  die();
}

?>