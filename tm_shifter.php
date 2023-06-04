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
        <img src="images/tm_shifter.jpeg" alt="tm_shifter">
      </div>
      <div class="image-slider">
        <div class="thumbnail">
          <img src="images/tm_shifter.jpeg" alt="Thumbnail 1" onclick="changeImage('images/tm_shifter.jpeg')">
        </div>
        <div class="thumbnail">
          <img src="images/tm_shifter2.jpeg" alt="Thumbnail 2" onclick="changeImage('images/tm_shifter2.jpeg')">
        </div>
        <div class="thumbnail">
          <img src="images/tm_shifter3.jpeg" alt="Thumbnail 3" onclick="changeImage('images/tm_shifter3.jpeg')">
        </div>
        <div class="thumbnail">
        <img src="images/tm_shifter4.jpeg" alt="Thumbnail 4" onclick="changeImage('images/tm_shifter4.jpeg')">
        </div>
        <div class="thumbnail">
          <img src="images/tm_shifter5.jpeg" alt="Thumbnail 5" onclick="changeImage('images/tm_shifter5.jpeg')">
        </div>
      </div>
    </div>
    <div class="product-details">
      <h1>Thrustmaster magnetic shifter compatible with most TM wheels</h1>
      <p class="product-paragraph">
      A Magnetic shifter mod made for most Thrustmaster wheels in the market! Make sure to choose the correct style for your specific wheels, below are the different options:<br><br>

      - Most TM wheels: T300RS / GTE / TM leather/ Open Wheel TM and more ..<br>
      - P310/ R383/ Ferrari 488: Choose this option if your wheel is one of them as the model of the mod is slightly different.<br>
      - T-GT / T-GT 2: A brand new version was made to fit the T-GT and T-GT2 wheels! ( The cost is slightly more as it requires 4 more magnets, as the paddle is not magnetic.)<br><br>

      ( If you have doubts make sure to send me a message to ask, some wheels are simply not compatible, such as the older tx version of the thrustmaster wheel ).<br>

      This mod will greatly improve the feeling of your shifting, compared to the stock mushy shifters, the magnets brings a new sensation, with the added resistance, shifting will feel more crisp and snappy, it will also help with misshift.
      </p>
      <div class="options">
        <label for="color">Color:</label>
        <select id="color">
          <option value="red">Black</option>
          <option value="blue">Grey</option>
        </select>
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