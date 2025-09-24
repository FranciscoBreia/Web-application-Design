<?php
session_start();

// Load current cart count for header
$cart = $_SESSION['cart'] ?? [];
$cartCount = array_sum(array_column($cart, 'qty'));
?>
<!DOCTYPE html> 
<html>
<head>
  <meta charset="UTF-8">
  <title>Apple iPhone 15 Pro - TechBay SG</title>
  <link rel="stylesheet" href="../mainpage.css">
</head>
<body>

  <!-- HEADER -->
  <div class="header">
    <a href="../index.php" class="logo">TechBay SG</a>
    <div class="header-right">
      <a href="../signup.php">Sign Up</a>
      <a href="../cart.php">🛒 Cart (<?= $cartCount ?>)</a>
    </div>
  </div>

  <!-- BREADCRUMB -->
  <div class="breadcrumb">
    <a href="../index.php">Home</a> > 
    <a href="../smartphones.php">Smartphones</a> > 
    <span>Apple iPhone 15 Pro</span>
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
          <img src="../images/iphone15pro.jpg" alt="Apple iPhone 15 Pro">
        </div>

        <!-- Right: Product Info -->
        <div class="product-info-detail">
          <h2>Apple iPhone 15 Pro</h2>
          <p><strong>Color:</strong> White | Black | Blue | Pink</p>
          <p><strong>Brand:</strong> Apple</p>

          <!-- Rating -->
          <div class="rating">
            ⭐⭐⭐⭐☆ (20)
          </div>

          <p class="price">€1299</p>

          <!-- Buttons -->
          <div class="product-actions">
            <form method="post" action="../add_to_cart.php">
              <input type="hidden" name="product" value="Apple iPhone 15 Pro">
              <input type="hidden" name="price" value="1299">
              <input type="hidden" name="image" value="images/iphone15pro.jpg">
              <button type="submit" class="add-cart-productzone">🛒 Add to Cart</button>
            </form>
          </div>
        </div>
      </div>

      <!-- Tabs: Description, Specs, Reviews -->
      <div class="product-tabs">
        <h3>Description</h3>
        <p>The Apple iPhone 15 Pro features a 6.1-inch OLED display, A17 Bionic chip, 48MP triple camera system, and advanced battery life. Built with aerospace-grade titanium.</p>

        <h3>Specifications</h3>
        <ul>
          <li>Display: 6.1-inch OLED, 120Hz</li>
          <li>Storage: 256GB</li>
          <li>Camera: 48MP + 12MP + 12MP</li>
          <li>Battery: Up to 22 hours video playback</li>
          <li>OS: iOS 17</li>
        </ul>

        <h3>Customer Reviews</h3>
        <p>⭐ ⭐ ⭐ ⭐ ⭐ “Amazing phone! Super fast and premium.” - Alex</p>
        <p>⭐ ⭐ ⭐ ⭐ ☆ “Great performance but a bit pricey.” - Maria</p>
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
