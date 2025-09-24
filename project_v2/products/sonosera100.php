<?php
session_start();
$cartCount = isset($_SESSION['cart']) ? array_sum(array_column($_SESSION['cart'], 'qty')) : 0;
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Sonos Era 100 - TechBay SG</title>
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
    <a href="../audio.php">Audio</a> > 
    <span>Sonos Era 100</span>
  </div>

  <!-- CONTAINER -->
  <div class="container">

    <!-- SIDEBAR -->
    <nav class="sidebar">
      <h3>Categories</h3>
      <a href="../smartphones.php">Smartphones</a>
      <a href="../tvs.php">TVs</a>
      <a href="../audio.php">Audio</a>
      <a href="../wearables.php">Wearables</a>
    </nav>

    <!-- MAIN CONTENT -->
    <div class="maincontent product-detail">

      <div class="product-detail-box">

        <!-- Left: Product Image -->
        <div class="product-image">
          <img src="../images/SonosEra100.jpg" alt="Sonos Era 100">
        </div>

        <!-- Right: Product Info -->
        <div class="product-info-detail">
          <h2>Sonos Era 100 Wireless Speaker</h2>
          <p><strong>Color:</strong> Black | White</p>
          <p><strong>Brand:</strong> Sonos</p>

          <!-- Rating -->
          <div class="rating">
            ⭐⭐⭐⭐☆ (54)
          </div>

          <p class="price">€516</p>

          <!-- Buttons -->
          <div class="product-actions">
            <form method="post" action="../add_to_cart.php">
              <input type="hidden" name="product" value="Sonos Era 100">
              <input type="hidden" name="price" value="516">
              <input type="hidden" name="image" value="images/SonosEra100.jpg">
              <button type="submit" class="add-cart">🛒 Add to Cart</button>
            </form>
          </div>
        </div>
      </div>

      <!-- Tabs: Description, Specs, Reviews -->
      <div class="product-tabs">
        <h3>Description</h3>
        <p>The Sonos Era 100 delivers rich, room-filling sound in a compact design. With built-in voice control, Wi-Fi, and Bluetooth, it's perfect for music streaming and smart home integration.</p>

        <h3>Specifications</h3>
        <ul>
          <li>Audio: Dual tweeters + mid-woofer</li>
          <li>Connectivity: Wi-Fi, Bluetooth, AirPlay 2</li>
          <li>Voice Control: Amazon Alexa, Sonos Voice</li>
          <li>Dimensions: 182.5 × 120 × 130.5 mm</li>
          <li>Weight: 2.02 kg</li>
        </ul>

        <h3>Customer Reviews</h3>
        <p>⭐ ⭐ ⭐ ⭐ ⭐ “Amazing sound quality for the size.” - Daniel</p>
        <p>⭐ ⭐ ⭐ ⭐ ☆ “Great smart speaker, wish it had more bass.” - Anna</p>
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

  <script src="../cart.js"></script>
</body>
</html>
