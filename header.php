<!-- Database Connection -->
<?php include 'db/database.php'?>

<!DOCTYPE html>
<html>
<head>
  <title>Sim Racing Homepage</title>
  <link rel="stylesheet" type ="text/css" href="style.css">
</head>
<body>
  <!-- Navigation bar -->
  <div class="navbar">
    <a href="header.php?page=slider">Home</a>
    <a href="header.php?page=fn_paddles">Fanatec</a>
    <a href="header.php?page=lg_shifter">Logitech</a>
    <div class = "tm_dropdown">
      <button class ="tm_button_dropdown">Thrustmaster</button>
      <div class ="tm_dropdown_content">
        <a href="header.php?page=tm_shifter">Thrustmaster shifter</a>
        <a href="#">Thrustmaster Quick Release</a>
      </div>
    </div>
    <a href="header.php?page=login">Account</a>
    <a href="#" class="cart-link">
      <svg class="cart-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
        <path d="M0 0h24v24H0z" fill="none"/>
        <path d="M18 18v-1H7v1H4v-2h14v-1a1 1 0 0 0 0-2H4V9h16l1-4h-4V2h-2v2H9L8 2H6L5 6H1v2h2v10a3 3 0 0 0 3 3h10a3 3 0 0 0 3-3zm-2-9V7H8v2H6V7H4l2-4h2v1h8V3h2l2 4h-2v2h-2z"/>
      </svg>
    </a>
  </div>
  <!-- Web pages sorting navigation -->
  <?php

    $allowed = array('slider', 'fn_paddles', 'tm_shifter', 'lg_shifter','register', 'login','register');
    $page = ( isset($_GET['page']) ) ? $_GET['page'] : 'slider';
    if ( in_array($page, $allowed) ){
        include("$page.php");
    } 
    else {
        include("404.php");
    }
    ?>
  
  <footer class="footer">
    <p>&copy; 2023 Sim Racing Homepage. All rights reserved.</p>
  </footer>

  <script src="script.js"></script>
</body>
</html>