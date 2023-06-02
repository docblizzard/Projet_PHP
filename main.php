<!DOCTYPE html>
<html>
<head>
  <title>Sim Racing Homepage</title>
  <link rel="stylesheet" type ="text/css" href="style.css">
</head>
<body>

<!-- Slideshow product -->
<div class="slideshow">
    <img src="images/tm_shifter.jpeg" alt="Tm shifter">
    <div id="previous" onclick="changeSlide(-1)"><</div>
    <div id="next" onclick="changeSlide(1)">></div>
  </div>
  
  <div class="navigation-button">
      <span class="dot active" onclick="changeSlide(0)"></span>
      <span class="dot" onclick="changeSlide(1)"></span>
      <span class="dot" onclick="changeSlide(2)"></span>
      <span class="dot" onclick="changeSlide(3)"></span>

  </div>
  <script src="script.js"></script>
</body>
</html>