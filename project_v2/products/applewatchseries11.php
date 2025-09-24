<?php
session_start();
$cartCount = isset($_SESSION['cart']) ? array_sum(array_column($_SESSION['cart'], 'qty')) : 0;
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Apple Watch Series 11 - TechBay SG</title>
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
    <span>Apple Watch Series 11</span>
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
          <img src="../images/applewatch.webp" alt="Apple Watch Series 11">
        </div>

        <!-- Product Info -->
        <div class="product-info-detail">
          <h2>Apple Watch Series 11 (GPS, 41mm Aluminium Case)</h2>
          <p><strong>Brand:</strong> Apple</p>
          <div class="rating">⭐⭐⭐⭐⭐ (102)</div>

          <p class="price">€400 <span class="old-price">€570</span></p>

          <!-- Buttons -->
          <div class="product-actions">
            <form method="post" action="../add_to_cart.php">
              <input type="hidden" name="product" value="Apple Watch Series 11">
              <input type="hidden" name="price" value="400">
              <input type="hidden" name="image" value="images/applewatch.webp">
              <button type="submit" class="add-cart-productzone">🛒 Add to Cart</button>
            </form>
          </div>
        </div>
      </div>

      <!-- Tabs -->
      <div class="product-tabs">
        <h3>Description</h3>
        <p>The Apple Watch Series 11 is your ultimate fitness companion with GPS tracking, health monitoring, and seamless integration with your iPhone. Designed with a lightweight aluminium case and Retina display, it combines style and performance in one sleek device.</p>

        <h3>Specifications</h3>
        <ul>
          <li>Case size: 41mm Aluminium</li>
          <li>Display: Always-On Retina</li>
          <li>GPS: Built-in</li>
          <li>Water resistance: Up to 50m</li>
          <li>Battery life: Up to 18 hours</li>
          <li>OS: watchOS 10</li>
        </ul>

        <h3>Customer Reviews</h3>
        <p>⭐⭐⭐⭐⭐ “Superb watch, tracks everything I need!” - Emma</p>
        <p>⭐⭐⭐⭐☆ “Battery could be longer but still the best smartwatch.” - Carlos</p>
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
