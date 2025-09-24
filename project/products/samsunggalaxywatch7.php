<?php
session_start();
$cartCount = isset($_SESSION['cart']) ? array_sum(array_column($_SESSION['cart'], 'qty')) : 0;
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Samsung Galaxy Watch 7 - TechBay SG</title>
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
    <span>Samsung Galaxy Watch 7</span>
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
          <img src="../images/Samunsunggalaxywatch7.jpg" alt="Samsung Galaxy Watch 7">
        </div>

        <!-- Right: Product Info -->
        <div class="product-info-detail">
          <h2>Samsung Galaxy Watch 7</h2>
          <p><strong>Size:</strong> 44mm</p>
          <p><strong>Brand:</strong> Samsung</p>

          <!-- Rating -->
          <div class="rating">
            ⭐⭐⭐⭐☆ (19)
          </div>

          <p class="price">€267</p>

          <!-- Buttons -->
          <div class="product-actions">
            <form method="post" action="../add_to_cart.php">
              <input type="hidden" name="product" value="Samsung Galaxy Watch 7">
              <input type="hidden" name="price" value="267">
              <button type="submit" class="add-cart">🛒 Add to Cart</button>
            </form>
          </div>
        </div>
      </div>

      <!-- Tabs: Description, Specs, Reviews -->
      <div class="product-tabs">
        <h3>Description</h3>
        <p>The Samsung Galaxy Watch 7 delivers essential fitness tracking, smooth performance, and a sleek design. With Samsung Health integration, it helps you stay connected and fit every day.</p>

        <h3>Specifications</h3>
        <ul>
          <li>Display: 1.4-inch AMOLED</li>
          <li>Connectivity: Bluetooth, Wi-Fi, GPS</li>
          <li>Features: Heart rate, SpO₂, Sleep monitoring</li>
          <li>Battery: Up to 36 hours</li>
          <li>Compatibility: Android</li>
        </ul>

        <h3>Customer Reviews</h3>
        <p>⭐ ⭐ ⭐ ⭐ ⭐ “Lightweight and very comfortable to wear.” - John</p>
        <p>⭐ ⭐ ⭐ ⭐ ☆ “Good value smartwatch, battery could be longer.” - Sofia</p>
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
