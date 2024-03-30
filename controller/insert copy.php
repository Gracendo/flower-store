<?php
session_start();
if (isset($_POST['signup'])) {
  require_once "../model/conn.php";
  $username = trim($_POST["username"]);
  $email = $_POST["email"];
  $password = $_POST["password"];
  $realpassword = password_hash($password, PASSWORD_DEFAULT);
  $img = $_FILES['profilePicture']['name'];

  if (move_uploaded_file($_FILES['profilePicture']['tmp_name'], '../assets/images/' . $img)) {
    $location = '../assets/images/' . $img;
    $sql = "INSERT INTO user(username,email,password,profilePicture
    )VALUES('$username','$email','$realpassword','$location')";
    $result = mysqli_query($conn, $sql);
    if (!$result) {
      die("could not insert into the database . this might be due to:" . mysqli_error($conn)
      );
    }
    $_SESSION['img'] = $location;
    $_SESSION['username'] = $username;
    header("Location:../view/home.php");
  } else {
    echo "could not upload file";
  }

}
?>