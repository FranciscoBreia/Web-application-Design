<?php
session_start();
$cartCount = isset($_SESSION['cart']) ? array_sum(array_column($_SESSION['cart'], 'qty')) : 0;
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>LG OLED TV - TechBay SG</title>
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
    <span>LG OLED TV</span>
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
          <img src="../images/tvoled.jpg" alt="LG OLED TV">
        </div>
        <div class="product-info-detail">
          <h2>LG OLED evo 65" 4K Ultra HD Smart TV</h2>
          <p><strong>Brand:</strong> LG</p>
          <div class="rating">⭐⭐⭐⭐⭐ (35)</div>
          <p class="price">€1,300</p>

          <div class="product-actions">
            <form method="post" action="../add_to_cart.php">
              <input type="hidden" name="product" value="LG OLED evo 65''">
              <input type="hidden" name="price" value="1300">
              <input type="hidden" name="image" value="images/tvoled.jpg">
              <button type="submit" class="add-cart-productzone">🛒 Add to Cart</button>
            </form>
          </div>
        </div>
      </div>

      <div class="product-tabs">
        <h3>Description</h3>
        <p>The LG OLED evo offers stunning 4K visuals, infinite contrast, and Dolby Vision IQ for a cinema-like experience.</p>

        <h3>Specifications</h3>
        <ul>
          <li>Size: 65-inch</li>
          <li>Resolution: 4K Ultra HD</li>
          <li>Panel: OLED evo</li>
          <li>Smart TV with webOS</li>
        </ul>

        <h3>Customer Reviews</h3>
        <p>⭐⭐⭐⭐⭐ “Best TV I've ever owned!” - Daniel</p>
        <p>⭐⭐⭐⭐☆ “Picture quality is insane.” - Priya</p>
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
