<!DOCTYPE html>
<html>
<head>
  <title>Sim Racing Homepage</title>
  <link rel="stylesheet" type ="text/css" href="style.css">
</head>
<body>

  <!-- Navigation bar -->
  <div class="navbar">
    <a href="#">Home</a>
    <a href="#">Fanatec</a>
    <a href="#">Logitech</a>
    <a href="#">Thrustmaster</a>
    <a href="#about">About</a>
  </div>

  <!-- Homepage content -->
  <div class="container">
  <?php
  $images = array(
    array("fn_paddle.jpeg", "Fanatec Paddle"),
    array("lg_shifter.jpeg", "Logitech Shifter"),
    array("tm_ring.jpeg", "Thrustmaster Quick Release"),
    array("tm_shifter.jpeg", "Thrustmaster shifter")

  ); // Array of image filenames and alt text

  foreach ($images as $image) {
    $src = $image[0];
    $alt = $image[1];
    echo '<div class="slide">';
    echo '<img src="' . $src . '" alt="' . $alt . '" width="400" height="200">';
    echo '</div>';
  }
  ?>
  </div>

  <footer class="footer">
    <p>&copy; 2023 Sim Racing Homepage. All rights reserved.</p>
  </footer>

</body>
</html>