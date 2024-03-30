<?php
session_start();
$userid = $_SESSION["userid"];
// echo $_POST['category'];
// die();

if (isset ($_POST['create'])) {
  require_once "../model/conn.php";
  $productname = trim($_POST["productname"]);
  $productprice = $_POST["productprice"];
  $productdescription = $_POST["productdescription"];
  $product_img = $_FILES['productpicture']['name'];
  $productcategory = $_POST['category'];

  if (move_uploaded_file($_FILES['productpicture']['tmp_name'], '../assets/images/' . $product_img)) {
    $location = '../assets/images/' . $product_img;
    $sql = "INSERT INTO product(name,price,picture,description,category,user_id
    )VALUES('$productname','$productprice','$location','$productdescription','$productcategory','$userid')";

    $result = mysqli_query($conn, $sql);
    if (!$result) {
      die ("could not insert into the database . this might be due to:" . mysqli_error($conn)
      );
    }
    header("Location:../view/home.php");
  } else {
    echo "could not upload file";
  }

}
?>