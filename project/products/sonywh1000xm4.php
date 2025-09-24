<?php
session_start();
$cartCount = isset($_SESSION['cart']) ? array_sum(array_column($_SESSION['cart'], 'qty')) : 0;
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Sony WH-1000XM4 - TechBay SG</title>
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
    <span>Sony WH-1000XM4</span>
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
          <img src="../images/SonyWh.jpg" alt="Sony WH-1000XM4">
        </div>

        <!-- Right: Product Info -->
        <div class="product-info-detail">
          <h2>Sony WH-1000XM4 Wireless Headphones</h2>
          <p><strong>Color:</strong> Black | Silver</p>
          <p><strong>Brand:</strong> Sony</p>

          <!-- Rating -->
          <div class="rating">
            ⭐⭐⭐⭐☆ (35)
          </div>

          <p class="price">€160</p>

          <!-- Buttons -->
          <div class="product-actions">
            <form method="post" action="../add_to_cart.php">
              <input type="hidden" name="product" value="Sony WH-1000XM4">
              <input type="hidden" name="price" value="160">
              <button type="submit" class="add-cart">🛒 Add to Cart</button>
            </form>
          </div>
        </div>
      </div>

      <!-- Tabs: Description, Specs, Reviews -->
      <div class="product-tabs">
        <h3>Description</h3>
        <p>The Sony WH-1000XM4 wireless headphones offer excellent noise cancelling, up to 30 hours of battery life, and superior sound quality.</p>

        <h3>Specifications</h3>
        <ul>
          <li>Driver: 40mm HD Hybrid Driver</li>
          <li>Battery Life: Up to 30 hours</li>
          <li>Charging: USB-C Fast Charging (10 min = 5 hrs playback)</li>
          <li>Noise Cancelling: Industry-leading ANC</li>
          <li>Connectivity: Bluetooth 5.0, Multipoint</li>
        </ul>

        <h3>Customer Reviews</h3>
        <p>⭐ ⭐ ⭐ ⭐ ⭐ “Fantastic sound quality and comfort.” - Kevin</p>
        <p>⭐ ⭐ ⭐ ⭐ ☆ “ANC is superb, battery life is great.” - Sofia</p>
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
