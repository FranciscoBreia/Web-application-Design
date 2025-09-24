<?php
session_start();
$cartCount = isset($_SESSION['cart']) ? array_sum(array_column($_SESSION['cart'], 'qty')) : 0;
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Samsung Galaxy Watch 4 - TechBay SG</title>
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
    <a href="../wearables.php">Wearables</a> > 
    <span>Samsung Galaxy Watch 4</span>
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
          <img src="../images/galaxywatch.jpg" alt="Samsung Galaxy Watch 4">
        </div>

        <!-- Right: Product Info -->
        <div class="product-info-detail">
          <h2>Samsung Galaxy Watch 4</h2>
          <p><strong>Color:</strong> Black | Silver | Gold</p>
          <p><strong>Brand:</strong> Samsung</p>

          <!-- Rating -->
          <div class="rating">
            ⭐⭐⭐⭐☆ (35)
          </div>

          <p class="price">€350</p>

          <!-- Buttons -->
          <div class="product-actions">
            <form method="post" action="../add_to_cart.php">
              <input type="hidden" name="product" value="Samsung Galaxy Watch 4">
              <input type="hidden" name="price" value="350">
              <input type="hidden" name="image" value="images/galaxywatch.jpg">
              <button type="submit" class="add-cart">🛒 Add to Cart</button>
            </form>
          </div>
        </div>
      </div>

      <!-- Tabs: Description, Specs, Reviews -->
      <div class="product-tabs">
        <h3>Description</h3>
        <p>The Samsung Galaxy Watch 4 is a stylish smartwatch featuring a vibrant AMOLED display, advanced fitness tracking, heart rate monitoring, GPS, and up to 40 hours of battery life. Compatible with Android and iOS devices.</p>

        <h3>Specifications</h3>
        <ul>
          <li>Display: 1.4-inch AMOLED</li>
          <li>Connectivity: Bluetooth, Wi-Fi, NFC</li>
          <li>Battery: Up to 40 hours</li>
          <li>Health: Heart rate, SpO2, sleep tracking</li>
          <li>Compatibility: Android & iOS</li>
        </ul>

        <h3>Customer Reviews</h3>
        <p>⭐ ⭐ ⭐ ⭐ ⭐ “Amazing smartwatch, very accurate fitness tracking.” - Daniel</p>
        <p>⭐ ⭐ ⭐ ⭐ ☆ “Good design, but battery could be better.” - Laura</p>
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
