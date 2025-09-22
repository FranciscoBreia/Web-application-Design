<?php
session_start();
$cartCount = isset($_SESSION['cart']) ? array_sum(array_column($_SESSION['cart'], 'qty')) : 0;
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Marshall Major IV - TechBay SG</title>
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
    <span>Marshall Major IV</span>
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
          <img src="../images/marshall.webp" alt="Marshall Major IV">
        </div>

        <!-- Right: Product Info -->
        <div class="product-info-detail">
          <h2>Marshall Major IV Wireless Headphones</h2>
          <p><strong>Color:</strong> Black</p>
          <p><strong>Brand:</strong> Marshall</p>

          <!-- Rating -->
          <div class="rating">
            ⭐⭐⭐⭐⭐ (54)
          </div>

          <p class="price">€279</p>

          <!-- Buttons -->
          <div class="product-actions">
            <form method="post" action="../add_to_cart.php">
              <input type="hidden" name="product" value="Marshall Major IV">
              <input type="hidden" name="price" value="279">
              <button type="submit" class="add-cart">🛒 Add to Cart</button>
            </form>
          </div>
        </div>
      </div>

      <!-- Tabs: Description, Specs, Reviews -->
      <div class="product-tabs">
        <h3>Description</h3>
        <p>The Marshall Major IV delivers the signature Marshall sound in a portable design, offering up to 80 hours of wireless playtime and wireless charging support.</p>

        <h3>Specifications</h3>
        <ul>
          <li>Driver: 40mm dynamic drivers</li>
          <li>Battery Life: Up to 80 hours</li>
          <li>Charging: USB-C + Wireless Charging</li>
          <li>Connectivity: Bluetooth 5.0, 3.5mm wired option</li>
          <li>Foldable Design: Yes, with ergonomic ear cushions</li>
        </ul>

        <h3>Customer Reviews</h3>
        <p>⭐ ⭐ ⭐ ⭐ ⭐ “Unbelievable battery life, I only charge once a week.” - Sofia</p>
        <p>⭐ ⭐ ⭐ ⭐ ☆ “Classic Marshall look and great comfort.” - Mark</p>
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
