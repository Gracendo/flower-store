<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="../assets/css/register.css" rel="stylesheet">
  <title>authentication</title>
</head>

<body>



  <div class="container">
    <div class="sub_container_1">
      <img src="/assets/images/hero2.jpg" alt="picture" class="img" />
    </div>
    <div class="sub_container_2">
      <center>
        <h2> LOGIN </h2>
      </center>
      <form method="POST" action="../controller/verifyauth.php">
        <label for="username">Name</label><br>
        <input id="username" name="username" type="text" required class="entry" /><br>
        <br> <label for="email">Email</label><br>
        <input id="email" name="email" type="text" required class="entry" /><br>
        <br>
        <label for="Password">Password</label>
        <input id="password" name="password" type="password" class="entry" />
        <br>
        <center> <input type="submit" value="JOIN NOW!" name="signup" id="log" /></center>
        <br>
        No account yet?<a href="register.php"> create an account </a>
        <?php if (isset ($_SESSION['error'])) {
          $error = $_SESSION['error']; ?>
          <p>
            <?php echo $error;
        } ?>
        </p>
      </form>
    </div>
  </div>

</body>

</html>