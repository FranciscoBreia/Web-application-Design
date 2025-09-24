<?php
session_start();
$cartCount = isset($_SESSION['cart']) ? array_sum(array_column($_SESSION['cart'], 'qty')) : 0;
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Sony OLED TV - TechBay SG</title>
  <link rel="stylesheet" href="../mainpage.css">
</head>
<body>

  <!-- HEADER -->
  <div class="header">
    <a href="../index.php" class="logo">TechBay SG</a>
    <div class="header-right">
      <a href="../signup.php">Sign Up</a>
      <a href="../cart.php">🛒 Cart (<?php echo $cartCount; ?>)</a>
    </div>
  </div>

  <!-- BREADCRUMB -->
  <div class="breadcrumb">
    <a href="../index.php">Home</a> >
    <a href="../tvs.php">TVs</a> >
    <span>Sony OLED TV</span>
  </div>

  <!-- CONTAINER -->
  <div class="container">
    <nav class="sidebar">
      <h3>Categories</h3>
      <a href="../smartphones.php">Smartphones</a>
      <a href="../tvs.php">TVs</a>
      <a href="../audio.php">Audio</a>
      <a href="../wearables.php">Wearables</a>
    </nav>

    <div class="maincontent product-detail">
      <div class="product-detail-box">
        <div class="product-image">
          <img src="../images/sonytv.jpg" alt="Sony OLED TV">
        </div>
        <div class="product-info-detail">
          <h2>Sony OLED 65" 4K Ultra HD Smart TV</h2>
          <p><strong>Brand:</strong> Sony</p>
          <div class="rating">⭐⭐⭐⭐☆ (41)</div>
          <p class="price">€1,200</p>

          <!-- ADD TO CART FORM -->
          <div class="product-actions">
            <form method="post" action="../add_to_cart.php">
              <input type="hidden" name="product" value="Sony OLED TV">
              <input type="hidden" name="price" value="1200">
              <input type="hidden" name="image" value="images/sonytv.jpg">
              <button type="submit" class="add-cart-productzone">🛒 Add to Cart</button>
            </form>
          </div>
        </div>
      </div>

      <div class="product-tabs">
        <h3>Description</h3>
        <p>Sony's OLED display offers deep blacks, vivid colors, and acoustic surface audio for an immersive viewing experience.</p>

        <h3>Specifications</h3>
        <ul>
          <li>Size: 65-inch</li>
          <li>Resolution: 4K Ultra HD</li>
          <li>Panel: OLED</li>
          <li>Android TV + Google Assistant</li>
        </ul>

        <h3>Customer Reviews</h3>
        <p>⭐ ⭐ ⭐ ⭐ ⭐ “The sound system is amazing!” - Lucia</p>
        <p>⭐ ⭐ ⭐ ⭐ ☆ “Great image, but price is high.” - Tom</p>
      </div>
    </div>
  </div>

  <!-- FOOTER -->
  <div class="footer">
    <p>© 2025 TechBay SG. All rights reserved.</p>
    <p>
      <a href="../index.php">Home</a> |
      <a href="../about.php">About</a> |
      <a href="../contact.php">Contact</a> |
      <a href="../faq.php">FAQ</a>
    </p>
  </div>
</body>
</html>
