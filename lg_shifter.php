<!DOCTYPE html>
<html>
<head>
  <title>Product Page</title>
  <link rel="stylesheet" type="text/css" href="product_style.css">
</head>
<body>
  <div class="product-container">
    <div class="product-images">
      <div class="main-image">
        <img src="images/lg_shifter.jpeg" alt="lg_paddle">
      </div>
      <div class="image-slider">
        <div class="thumbnail">
          <img src="images/lg_shifter.jpeg" alt="Thumbnail 1" onclick="changeImage('images/lg_shifter.jpeg')">
        </div>
        <div class="thumbnail">
          <img src="images/lg_shifter2.jpeg" alt="Thumbnail 2" onclick="changeImage('images/lg_shifter2.jpeg')">
        </div>
      </div>
    </div>
    <div class="product-details">
      <h1>Logitech Shifter for G27/G29/G920</h1>
      <p class="product-paragraph">
          This magnetic shifter mod is compatible with Logitech wheels such as G27/G29/G920/G923.<br>
          Everything that is included :<br>
          -M3 bolt with nut to secure the mod<br>
          -4 magnets of size 10x3mm<br>
          -The main 3d printed piece itself.<br>

          This mod will greatly improve the feeling of your shifting, the magnets will add a good resistance as well as a satisfying snapyness, compared to the old mushy stock ones.
          To install it, simply undo the nut so that you can stretch the collar ( The collar is made strongly so that it can be stretched easily ), and slip it on the base, and then tight everything down. There is nothing to disassemble !
          Every package is carefully wrapped in protective layers and sent the day the purchase is made ( depending on the time ), and with tracking available !
      </p>
      <div class="options">
        <label for="color">Color:</label>
        <select class= "custom-select" id="color">
          <option value="red">Black</option>
          <option value="blue">Grey</option>
        </select>
        <span class="select-arrow">&#9660;</span>
      </div>
      <p class="price">$99.99</p>
      <button class="add-to-cart-button">Add to Cart</button>
    </div>
  </div>

  <script>
    
    function changeImage(imageSrc) {
      var mainImage = document.querySelector('.main-image img');
      mainImage.src = imageSrc;
    }
  </script>

</body>
</html>