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
  <title>Hisense E6 Double Vision - TechBay SG</title>
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
    <a href="../tvs.php">TVs</a> >
    <span>Hisense E6 Double Vision</span>
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
        <!-- Product Image -->
        <div class="product-image">
          <img src="../images/tvhisensee6.png" alt="Hisense E6">
        </div>

        <!-- Product Info -->
        <div class="product-info-detail">
          <h2>Hisense E6 Double Vision UHD Smart TV</h2>
          <p><strong>Brand:</strong> Hisense</p>

          <!-- Rating -->
          <div class="rating">⭐⭐⭐⭐☆ (28)</div>

          <p class="price">€1300</p>

          <!-- Buttons -->
          <div class="product-actions">
            <form method="post" action="../add_to_cart.php">
              <input type="hidden" name="product" value="Hisense E6 Double Vision">
              <input type="hidden" name="price" value="1300">
              <input type="hidden" name="image" value="images/tvhisensee6.png">
              <button type="submit" class="add-cart-productzone">🛒 Add to Cart</button>
            </form>
          </div>
        </div>
      </div>

      <!-- Tabs -->
      <div class="product-tabs">
        <h3>Description</h3>
        <p>The Hisense E6 delivers crisp 4K images with Dolby Vision, Dolby Atmos sound, and Smart OS support.</p>

        <h3>Specifications</h3>
        <ul>
          <li>Size: 55-inch</li>
          <li>Resolution: 4K UHD</li>
          <li>HDR: Dolby Vision</li>
          <li>Smart TV with VIDAA OS</li>
        </ul>

        <h3>Customer Reviews</h3>
        <p>⭐ ⭐ ⭐ ⭐ ⭐ “Excellent value for money.” - Mark</p>
        <p>⭐ ⭐ ⭐ ⭐ ☆ “Colors are great, remote could be better.” - Sofia</p>
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
