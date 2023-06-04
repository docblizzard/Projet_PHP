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
        <img src="images/fn_paddle.jpeg" alt="fn_paddle">
      </div>
      <div class="image-slider">
        <div class="thumbnail">
          <img src="images/fn_paddle2.jpeg" alt="Thumbnail 1" onclick="changeImage('images/fn_paddle2.jpeg')">
        </div>
        <div class="thumbnail">
          <img src="images/fn_paddle3.jpeg" alt="Thumbnail 2" onclick="changeImage('images/fn_paddle3.jpeg')">
        </div>
        <div class="thumbnail">
          <img src="images/fn_paddle.jpeg" alt="Thumbnail 3" onclick="changeImage('images/fn_paddle.jpeg')">
        </div>
      </div>
    </div>
    <div class="product-details">
      <h1>Product Name</h1>
      <p>Product Description Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
      <div class="options">
        <label for="size">Size:</label>
        <select id="size">
          <option value="small">Small</option>
          <option value="medium">Medium</option>
          <option value="large">Large</option>
        </select>
        <label for="color">Color:</label>
        <select id="color">
          <option value="red">Red</option>
          <option value="blue">Blue</option>
          <option value="green">Green</option>
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