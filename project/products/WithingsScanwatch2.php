<?php
session_start();
$cartCount = isset($_SESSION['cart']) ? array_sum(array_column($_SESSION['cart'], 'qty')) : 0;
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Withings ScanWatch 2 - TechBay SG</title>
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
    <span>Withings ScanWatch 2</span>
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
          <img src="../images/withingsScanWatch2.jpg" alt="Withings ScanWatch 2">
        </div>

        <!-- Right: Product Info -->
        <div class="product-info-detail">
          <h2>Withings ScanWatch 2</h2>
          <p><strong>Color:</strong> Black | White | Rose Gold</p>
          <p><strong>Brand:</strong> Withings</p>

          <!-- Rating -->
          <div class="rating">
            ⭐⭐⭐⭐☆ (35)
          </div>

          <p class="price">€399</p>

          <!-- Buttons -->
          <div class="product-actions">
            <form method="post" action="../add_to_cart.php">
              <input type="hidden" name="product" value="Withings ScanWatch 2">
              <input type="hidden" name="price" value="399">
              <button type="submit" class="add-cart">🛒 Add to Cart</button>
            </form>
          </div>
        </div>
      </div>

      <!-- Tabs: Description, Specs, Reviews -->
      <div class="product-tabs">
        <h3>Description</h3>
        <p>The Withings ScanWatch 2 is a premium hybrid smartwatch combining medical-grade health monitoring with elegant design. Features include ECG, SpO2, advanced sleep tracking, and long battery life.</p>

        <h3>Specifications</h3>
        <ul>
          <li>Display: PMOLED + analog hands</li>
          <li>Battery: Up to 30 days</li>
          <li>Features: ECG, SpO2, HR monitoring, Sleep tracking</li>
          <li>Connectivity: Bluetooth, Health Mate App</li>
          <li>Water Resistance: 5 ATM</li>
        </ul>

        <h3>Customer Reviews</h3>
        <p>⭐ ⭐ ⭐ ⭐ ⭐ “Accurate health tracking and looks like a real watch.” - Anna</p>
        <p>⭐ ⭐ ⭐ ⭐ ☆ “Battery life is amazing, but screen is small.” - Lars</p>
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

  <script src="../main.js"></script>
</body>
</html>
