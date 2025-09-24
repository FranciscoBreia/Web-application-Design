<?php
session_start();
$cartCount = isset($_SESSION['cart']) ? array_sum(array_column($_SESSION['cart'], 'qty')) : 0;
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Jabra Evolve2 65 - TechBay SG</title>
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
    <span>Jabra Evolve2 65</span>
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
          <img src="../images/JabaraEvolve265 Ms.jpg" alt="Jabra Evolve2 65">
        </div>

        <!-- Right: Product Info -->
        <div class="product-info-detail">
          <h2>Jabra Evolve2 65 UC Wireless Headset</h2>
          <p><strong>Color:</strong> Black</p>
          <p><strong>Brand:</strong> Jabra</p>

          <!-- Rating -->
          <div class="rating">
            ⭐⭐⭐⭐☆ (36)
          </div>

          <p class="price">€200</p>

          <!-- Buttons -->
          <div class="product-actions">
            <form method="post" action="../add_to_cart.php">
              <input type="hidden" name="product" value="Jabra Evolve2 65">
              <input type="hidden" name="price" value="200">
              <button type="submit" class="add-cart">🛒 Add to Cart</button>
            </form>
          </div>
        </div>
      </div>

      <!-- Tabs: Description, Specs, Reviews -->
      <div class="product-tabs">
        <h3>Description</h3>
        <p>The Jabra Evolve2 65 is a professional wireless headset designed for productivity, comfort, and great audio quality. Ideal for calls, video meetings, and music throughout the day.</p>

        <h3>Specifications</h3>
        <ul>
          <li>Wireless Range: Up to 30m (100ft)</li>
          <li>Battery Life: Up to 37 hours</li>
          <li>Connectivity: Bluetooth + USB-C dongle</li>
          <li>Microphone: 3-microphone call technology</li>
          <li>Compatibility: Microsoft Teams & UC platforms</li>
        </ul>

        <h3>Customer Reviews</h3>
        <p>⭐ ⭐ ⭐ ⭐ ⭐ “Perfect headset for remote work, very comfortable.” - Clara</p>
        <p>⭐ ⭐ ⭐ ⭐ ☆ “Excellent call quality, but cushions get warm.” - David</p>
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
