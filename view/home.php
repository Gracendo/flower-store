<?php
session_start();
if (!isset ($_SESSION['username'])) {
  header("location:authentication.php");
}
$username = $_SESSION['username'];
$img = $_SESSION['img'];
$id = $_SESSION['id'];
$result = $_SESSION['result'];
require "../controller/table.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="../assets/css/home.css" rel="stylesheet" />
  <link rel="stylesheet" href="../fontawesome-free-6.5.1-web/css/all.min.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Castoro+Titling&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Castoro+Titling&family=Oranienbaum&display=swap"
    rel="stylesheet">
  <title>Document</title>
</head>

<body>
  <div class="navigation">
    <div>
      <h3>FLORINDA</h3>
    </div>
    <div>
      <form method="GET" action="../controller/search.php">
        <div class="search-container">
          <input type="text" name="search" placeholder="Search ..." />
          <button type="submit"><i class="fas fa-search"></i></button>
        </div>
      </form>

    </div>
    <div class="subcontainer">

      <img src="<?php echo $img ?>" width="100px" />
      <p>
        <?php echo $username; ?>
      </p>
      <form method="POST" action="../controller/logout.php">
        <!-- <input id="log" type="submit" name="logout" value= /> -->
        <button id="log" name="logout" type="submit"><i class="fas fa-sign-out-alt"></i></button>
      </form>
    </div>

  </div>
  <br>
  <div class="body-container">
    <div class="dashbaord">
      <ul>
        <li>
          <a href="#">
            <i class="fas fa-home"></i>
            <span class="nav-item">Home</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="fas fa-user"></i>
            <span class="nav-item">My Account</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="fas fa-book"></i>
            <span class="nav-item">Order</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="fas fa-cog "></i>
            <span class="nav-item">Setting</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="fas fa-chart-bar"></i>
            <span class="nav-item">Analytics</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="fas fa-question-circle"></i>
            <span class="nav-item"></span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="fas fa-sign-out-alt"></i>
            <span class="nav-item">Log out</span>
          </a>
        </li>


      </ul>


    </div>
    <div>
      <?php

      $table = generateProductTable($result);
      echo $table;
      ?>
    </div>
  </div>
  <div>
    <form method="POST" action="../controller/create.php" enctype="multipart/form-data">
      <i class="fas fa-tag"></i>
      <input name="productname" type="text" required class="entry" placeholder="product name" /><br>
      <i class="fas fa-wallet"></i>
      <input name="productprice" type="number" min="0" required class="entry" placeholder="price" /><br>
      <i class="fas fa-image"></i>
      <input type="file" name="productpicture" required /><br>
      <i class="fas fa-folder"></i>
      <select name="category" required class="entry">
        <option value="rose">Rose</option>
        <option value="sunflower">Sun Flower</option>
        <option value="others">Others</option>
      </select><br>
      <i class="fas fa-book"></i>
      <textarea rows="20" cols="10" name="productdescription">This is the description of your product</textarea>
      <br>
      <br>
      <center> <input type="submit" value="ADD" name="create" id="log" /></center>


    </form>
  </div>
</body>

</html>
