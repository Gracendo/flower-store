<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="../assets/css/register.css" rel="stylesheet" />
  <link rel="stylesheet" href="../fontawesome-free-6.5.1-web/css/all.min.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Castoro+Titling&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Castoro+Titling&family=Oranienbaum&display=swap"
    rel="stylesheet">
</head>

<body>
  <div class="container">
    <div class="sub_container_1">
      <img src="/assets/images/evie-s-vz3IQy0LOaA-unsplash.jpg" alt="picture" class="img" />
    </div>
    <div class="sub_container_2">
      <center>
        <h2> SIGN UP </h2>
      </center>
      <form method="POST" action="../controller/insert.php" enctype="multipart/form-data" class="form">
        <label for="username">Name</label><br>
        <input id="username" name="username" type="text" required class="entry" /><br>
        <br> <label for="email">Email</label><br>
        <input id="email" name="email" type="text" required class="entry" /><br>
        <br>
        <label for="Password">Password</label>
        <input id="password" name="password" type="password" class="entry" />
        <br>
        <br>
        <label for="profilePicture"> Profile Picture</label>
        <br>
        <input id="profilePicture" type="file" name="profilePicture" required />
        <center> <input type="submit" value="JOIN NOW!" name="signup" id="log" /></center>
        <br>
        <i> have an account already?<a href="authentication.php"><b>login</b> </a>
        </i>
      </form>
    </div>
  </div>

</body>

</html>