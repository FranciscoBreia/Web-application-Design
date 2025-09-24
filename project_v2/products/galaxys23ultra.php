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
  <title>Samsung Galaxy S23 Ultra - TechBay SG</title>
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
    <span>Samsung Galaxy S23 Ultra</span>
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
          <img src="../images/samsungs23.png" alt="Samsung Galaxy S23 Ultra">
        </div>

        <!-- Product Info -->
        <div class="product-info-detail">
          <h2>Samsung Galaxy S23 Ultra</h2>
          <p><strong>Color:</strong> Black | Green | Cream | Lavender</p>
          <p><strong>Brand:</strong> Samsung</p>

          <!-- Rating -->
          <div class="rating">⭐⭐⭐⭐⭐ (34)</div>

          <p class="price">€1300</p>

          <!-- Buttons -->
          <div class="product-actions">
            <form method="post" action="../cart.php">
              <input type="hidden" name="product" value="Samsung Galaxy S23 Ultra">
              <input type="hidden" name="price" value="1300">
              <button type="submit" class="add-cart-productzone">🛒 Add to Cart</button>
            </form>
          </div>
        </div>
      </div>

      <!-- Tabs -->
      <div class="product-tabs">
        <h3>Description</h3>
        <p>The Samsung Galaxy S23 Ultra features a 6.8-inch AMOLED 120Hz display, Snapdragon 8 Gen 2 processor, 200MP quad camera, and a massive 5000mAh battery.</p>

        <h3>Specifications</h3>
        <ul>
          <li>Display: 6.8-inch AMOLED, 120Hz</li>
          <li>Storage: 256GB</li>
          <li>Camera: 200MP + 12MP + 10MP + 10MP</li>
          <li>Battery: 5000mAh</li>
          <li>OS: Android 13</li>
        </ul>

        <h3>Customer Reviews</h3>
        <p>⭐ ⭐ ⭐ ⭐ ⭐ “Incredible camera and screen quality!” - Daniel</p>
        <p>⭐ ⭐ ⭐ ⭐ ☆ “Expensive but worth it for power users.” - Sofia</p>
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
