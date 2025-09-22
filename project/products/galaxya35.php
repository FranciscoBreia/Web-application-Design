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
  <title>Samsung Galaxy A35 - TechBay SG</title>
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
    <span>Samsung Galaxy A35</span>
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
          <img src="../images/samsunga35.png" alt="Samsung Galaxy A35">
        </div>

        <!-- Right: Product Info -->
        <div class="product-info-detail">
          <h2>Samsung Galaxy A35 5G</h2>
          <p><strong>Color:</strong> Black | Blue | Silver</p>
          <p><strong>Brand:</strong> Samsung</p>

          <!-- Rating -->
          <div class="rating">
            ⭐⭐⭐⭐☆ (18)
          </div>

          <p class="price">€1300</p>

          <!-- Buttons -->
          <div class="product-actions">
            <form method="post" action="../cart.php">
              <input type="hidden" name="product" value="Samsung Galaxy A35">
              <input type="hidden" name="price" value="1300">
              <button type="submit" class="add-cart-productzone">🛒 Add to Cart</button>
            </form>
          </div>
        </div>
      </div>

      <!-- Tabs: Description, Specs, Reviews -->
      <div class="product-tabs">
        <h3>Description</h3>
        <p>The Samsung Galaxy A35 5G combines performance with affordability, featuring a 6.6-inch Super AMOLED display, strong battery life, and reliable 5G connectivity.</p>

        <h3>Specifications</h3>
        <ul>
          <li>Display: 6.6-inch Super AMOLED, 120Hz</li>
          <li>Storage: 128GB</li>
          <li>Camera: 50MP + 8MP + 5MP + 13MP</li>
          <li>Battery: 5000mAh, 25W Fast Charging</li>
          <li>OS: Android 14 with One UI</li>
        </ul>

        <h3>Customer Reviews</h3>
        <p>⭐ ⭐ ⭐ ⭐ ⭐ “Great phone for the price, smooth performance.” - John</p>
        <p>⭐ ⭐ ⭐ ⭐ ☆ “Camera is good but not flagship-level.” - Sarah</p>
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
