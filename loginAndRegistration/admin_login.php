<?php

include_once '../phpDependencies/config.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTS-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-sclae=1.0">
  <link rel="stylesheet" href="css/login_styles.css">
  <link rel="stylesheet" href="../home/css/style.css">
  <link rel="stylesheet" href="../loginAndRegistration/css/admin_login_style.css">
  <!--font-->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
  <!--font for logo-->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <!--icons-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
  <title>Jobless - Home</title>

<body>
  <!--navbar starts-->
  <nav class="big-navbar">
    <!-- navbar-1 starts although its name is navbar-->
    <nav class="admin-panel">
        <div class="admin-panel-header">
            <h1>Admin Panel</h1>
        </div>
    </nav>
    <!-- navbar-1 ends -->

    <!--navbar2 starts-->
    <nav class="navbar2">
      <h2 class="navbar-logo"> <a href="../home/index.php">Jobless.com</a></h2>
    </nav>
    <!-- navbar-2 ends -->
  </nav>
  <!-- navbar ends -->

  <div class="form-container">
    <form class="form" action="" method="post">
      <div class="login-title">
        <h3>Admin Login</h3>
      </div>
      <span id="error_msg" class="error-msg"></span>

      <div class="input-fields">
        <input class="admin-id" type="text" name="id" id="id" placeholder="Enter Admin ID" required>
        <br>
        <input class="password" type="password" name="password" id="password" placeholder="Enter password" required>
      </div>
      <br>
      <input type="submit" name="submit" id="submit" value="Login">

    </form>
  </div>
</body>

</html>
