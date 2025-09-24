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
  <title>JBL Bluetooth Speaker - TechBay SG</title>
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
    <a href="../audio.php">Audio</a> > 
    <span>JBL Bluetooth Speaker</span>
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
          <img src="../images/jblspeaker.jpg" alt="JBL Bluetooth Speaker">
        </div>

        <!-- Right: Product Info -->
        <div class="product-info-detail">
          <h2>JBL Bluetooth Speaker</h2>
          <p><strong>Type:</strong> Portable Wireless Speaker</p>
          <p><strong>Brand:</strong> JBL</p>

          <!-- Rating -->
          <div class="rating">
            ⭐⭐⭐⭐☆ (112 reviews)
          </div>

          <p class="price">€150</p>

          <!-- Buttons -->
          <div class="product-actions">
            <form method="post" action="../add_to_cart.php">
              <input type="hidden" name="product" value="JBL Bluetooth Speaker">
              <input type="hidden" name="price" value="150">
              <input type="hidden" name="image" value="images/jblspeaker.jpg">
              <button type="submit" class="add-cart-productzone">🛒 Add to Cart</button>
            </form>
          </div>
        </div>
      </div>

      <!-- Tabs: Description, Specs, Reviews -->
      <div class="product-tabs">
        <h3>Description</h3>
        <p>The JBL Bluetooth Speaker delivers powerful sound in a compact, portable design. It's waterproof, lightweight, and perfect for outdoor use, pool parties, or everyday listening.</p>

        <h3>Specifications</h3>
        <ul>
          <li>Battery Life: Up to 12 hours</li>
          <li>Waterproof Rating: IPX7</li>
          <li>Connectivity: Bluetooth 5.1, AUX</li>
          <li>Charging: USB-C Fast Charging</li>
          <li>Dimensions: 18 x 7 x 7 cm</li>
        </ul>

        <h3>Customer Reviews</h3>
        <p>⭐ ⭐ ⭐ ⭐ ⭐ “Amazing bass and clarity for such a small speaker.” - Kevin</p>
        <p>⭐ ⭐ ⭐ ⭐ ☆ “Great for outdoors, but wish the battery lasted a bit longer.” - Sophia</p>
        <p>⭐ ⭐ ⭐ ☆ ☆ “Good sound, but a bit pricey compared to others.” - Daniel</p>
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
