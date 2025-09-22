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
  <title>Apple iPhone 13 - TechBay SG</title>
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
    <span>Apple iPhone 13</span>
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
          <img src="../images/iphone13.webp" alt="Apple iPhone 13">
        </div>

        <!-- Right: Product Info -->
        <div class="product-info-detail">
          <h2>Apple iPhone 13</h2>
          <p><strong>Color:</strong> Black | White | Red | Blue</p>
          <p><strong>Brand:</strong> Apple</p>

          <!-- Rating -->
          <div class="rating">
            ⭐⭐⭐⭐☆ (15)
          </div>

          <p class="price">€800</p>

          <!-- Buttons -->
          <div class="product-actions">
            <form method="post" action="../cart.php">
              <input type="hidden" name="product" value="Apple iPhone 13">
              <input type="hidden" name="price" value="800">
              <button type="submit" class="add-cart-productzone">🛒 Add to Cart</button>
            </form>
          </div>
        </div>
      </div>

      <!-- Tabs: Description, Specs, Reviews -->
      <div class="product-tabs">
        <h3>Description</h3>
        <p>The Apple iPhone 13 comes with a 6.1-inch Super Retina XDR display, A15 Bionic chip, dual 12MP camera system, and all-day battery life. Perfect balance of power and style.</p>

        <h3>Specifications</h3>
        <ul>
          <li>Display: 6.1-inch Super Retina XDR OLED</li>
          <li>Storage: 128GB</li>
          <li>Camera: 12MP Wide + 12MP Ultra Wide</li>
          <li>Battery: Up to 19 hours video playback</li>
          <li>OS: iOS 15 (upgradable)</li>
        </ul>

        <h3>Customer Reviews</h3>
        <p>⭐ ⭐ ⭐ ⭐ ⭐ “Solid performance and great camera quality.” - Daniel</p>
        <p>⭐ ⭐ ⭐ ⭐ ☆ “Battery life could be better, but overall excellent.” - Sofia</p>
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
