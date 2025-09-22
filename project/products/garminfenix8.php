<?php
session_start();
$cartCount = isset($_SESSION['cart']) ? array_sum(array_column($_SESSION['cart'], 'qty')) : 0;
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Garmin Fenix 8 - TechBay SG</title>
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
    <span>Garmin Fenix 8</span>
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
          <img src="../images/GarminFenix8.jpg" alt="Garmin Fenix 8 Amoled Sapphire Titan">
        </div>

        <!-- Right: Product Info -->
        <div class="product-info-detail">
          <h2>Garmin Fenix 8 Amoled Sapphire Titan</h2>
          <p><strong>Color:</strong> Black | Titanium</p>
          <p><strong>Brand:</strong> Garmin</p>

          <!-- Rating -->
          <div class="rating">
            ⭐⭐⭐⭐⭐ (37)
          </div>

          <p class="price">€2026</p>

          <!-- Buttons -->
          <div class="product-actions">
            <form method="post" action="../add_to_cart.php">
              <input type="hidden" name="product" value="Garmin Fenix 8">
              <input type="hidden" name="price" value="2026">
              <button type="submit" class="add-cart">🛒 Add to Cart</button>
            </form>
          </div>
        </div>
      </div>

      <!-- Tabs: Description, Specs, Reviews -->
      <div class="product-tabs">
        <h3>Description</h3>
        <p>The Garmin Fenix 8 is a premium multisport GPS smartwatch built for athletes and adventurers. Designed with a sapphire glass and titanium case, it combines durability, precision, and advanced health tracking.</p>

        <h3>Specifications</h3>
        <ul>
          <li>Display: 1.4-inch AMOLED, always-on</li>
          <li>Battery Life: Up to 20 days (smartwatch mode)</li>
          <li>Durability: Sapphire glass, titanium bezel, 10ATM water resistance</li>
          <li>Features: GPS, GLONASS, Galileo, heart rate, SpO2, sleep tracking</li>
          <li>Sports Modes: 50+ including running, cycling, swimming, climbing</li>
        </ul>

        <h3>Customer Reviews</h3>
        <p>⭐ ⭐ ⭐ ⭐ ⭐ “The most rugged and advanced smartwatch I’ve owned.” - Michael</p>
        <p>⭐ ⭐ ⭐ ⭐ ☆ “Pricey, but worth it for serious athletes.” - Laura</p>
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
