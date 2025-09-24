<?php
session_start();
$cartCount = isset($_SESSION['cart']) ? array_sum(array_column($_SESSION['cart'], 'qty')) : 0;
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Samsung Galaxy Watch 8 - TechBay SG</title>
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
    <span>Samsung Galaxy Watch 8</span>
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
          <img src="../images/Samsunggalaxywatch8.jpg" alt="Samsung Galaxy Watch 8">
        </div>

        <!-- Right: Product Info -->
        <div class="product-info-detail">
          <h2>Samsung Galaxy Watch 8</h2>
          <p><strong>Size:</strong> 44mm</p>
          <p><strong>Brand:</strong> Samsung</p>

          <!-- Rating -->
          <div class="rating">
            ⭐⭐⭐⭐☆ (27)
          </div>

          <p class="price">€577</p>

          <!-- Buttons -->
          <div class="product-actions">
            <form method="post" action="../add_to_cart.php">
              <input type="hidden" name="product" value="Samsung Galaxy Watch 8">
              <input type="hidden" name="price" value="577">
              <button type="submit" class="add-cart">🛒 Add to Cart</button>
            </form>
          </div>
        </div>
      </div>

      <!-- Tabs: Description, Specs, Reviews -->
      <div class="product-tabs">
        <h3>Description</h3>
        <p>The Samsung Galaxy Watch 8 offers advanced health tracking, smooth performance, and a durable design. With AMOLED display and One UI Watch, it’s your perfect fitness and lifestyle companion.</p>

        <h3>Specifications</h3>
        <ul>
          <li>Display: 1.4-inch AMOLED</li>
          <li>Connectivity: Bluetooth, Wi-Fi, GPS</li>
          <li>Features: Heart rate, ECG, SpO₂, Sleep tracking</li>
          <li>Battery: Up to 40 hours</li>
          <li>Compatibility: Android</li>
        </ul>

        <h3>Customer Reviews</h3>
        <p>⭐ ⭐ ⭐ ⭐ ⭐ “Great smartwatch with excellent tracking features.” - Daniel</p>
        <p>⭐ ⭐ ⭐ ⭐ ☆ “Stylish and smooth, but battery could last longer.” - Sofia</p>
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
