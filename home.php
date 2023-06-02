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

 <!-- Slideshow product -->
  <div class="slideshow">
    <?php
      $images = array(
      array("images/fn_paddle.jpeg", "Fanatec Paddle"),
      array("images/lg_shifter.jpeg", "Logitech Shifter"),
      array("images/tm_ring.jpeg", "Thrustmaster Quick Release"),
      array("images/tm_shifter.jpeg", "Thrustmaster shifter")
      );
    
      foreach ($images as $image) {
        $src = $image[0];
        $alt = $image[1];
        echo '<div class="slide">';
        echo '<img src="' . $src . '" alt="' . $alt . '">';
        echo '</div>';
      }
    ?>
    <div id="previous" onclick="changeSlide(-1)"><</div>
    <div id="next" onclick="changeSlide(1)">></div>
  </div>
  
  <div class="navigation-button">
      <span class="dot active" onclick="changeSlide(0)"></span>
      <span class="dot" onclick="changeSlide(1)"></span>
      <span class="dot" onclick="changeSlide(2)"></span>
      <span class="dot" onclick="changeSlide(3)"></span>

  </div>

  <footer class="footer">
    <p>&copy; 2023 Sim Racing Homepage. All rights reserved.</p>
  </footer>

  <script src="script.js"></script>
</body>
</html>