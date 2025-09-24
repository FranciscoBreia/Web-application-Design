<?php
session_start();
$cartCount = isset($_SESSION['cart']) ? array_sum(array_column($_SESSION['cart'], 'qty')) : 0;
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Huawei GT5 Pro - TechBay SG</title>
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
    <span>Huawei GT5 Pro</span>
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
          <img src="../images/huaweigte5.jpg" alt="Huawei GT5 Pro">
        </div>

        <!-- Right: Product Info -->
        <div class="product-info-detail">
          <h2>Huawei GT5 Pro Smartwatch</h2>
          <p><strong>Color:</strong> Black | Silver</p>
          <p><strong>Brand:</strong> Huawei</p>

          <!-- Rating -->
          <div class="rating">
            ⭐⭐⭐⭐☆ (41)
          </div>

          <p class="price">€710</p>

          <!-- Buttons -->
          <div class="product-actions">
            <form method="post" action="../add_to_cart.php">
              <input type="hidden" name="product" value="Huawei GT5 Pro">
              <input type="hidden" name="price" value="710">
              <input type="hidden" name="image" value="images/huaweigte5.jpg">
              <button type="submit" class="add-cart">🛒 Add to Cart</button>
            </form>
          </div>
        </div>
      </div>

      <!-- Tabs: Description, Specs, Reviews -->
      <div class="product-tabs">
        <h3>Description</h3>
        <p>The Huawei GT5 Pro is a premium smartwatch designed with advanced fitness tracking, durable materials, and elegant design. Ideal for sports, health monitoring, and daily productivity.</p>

        <h3>Specifications</h3>
        <ul>
          <li>Display: 1.5-inch AMOLED, 466 × 466 pixels</li>
          <li>Battery Life: Up to 14 days</li>
          <li>Health Features: Heart rate, SpO2, sleep monitoring</li>
          <li>Durability: 5ATM water resistance</li>
          <li>Connectivity: Bluetooth, GPS, NFC</li>
        </ul>

        <h3>Customer Reviews</h3>
        <p>⭐ ⭐ ⭐ ⭐ ⭐ “Beautiful smartwatch with incredible battery life.” - Sofia</p>
        <p>⭐ ⭐ ⭐ ⭐ ☆ “Great features, but the app could be better.” - Marco</p>
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
