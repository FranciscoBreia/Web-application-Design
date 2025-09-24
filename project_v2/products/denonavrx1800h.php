<?php
session_start();
$cartCount = isset($_SESSION['cart']) ? array_sum(array_column($_SESSION['cart'], 'qty')) : 0;
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Denon AVR-X1800H - TechBay SG</title>
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
    <span>Denon AVR-X1800H</span>
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
          <img src="../images/Denonavrx1800h.jpg" alt="Denon AVR-X1800H">
        </div>

        <!-- Right: Product Info -->
        <div class="product-info-detail">
          <h2>Denon AVR-X1800H</h2>
          <p><strong>Channels:</strong> 7.2</p>
          <p><strong>Brand:</strong> Denon</p>

          <!-- Rating -->
          <div class="rating">
            ⭐⭐⭐⭐☆ (31)
          </div>

          <p class="price">€1100</p>

          <!-- Buttons -->
          <div class="product-actions">
            <form method="post" action="../add_to_cart.php">
              <input type="hidden" name="product" value="Denon AVR-X1800H">
              <input type="hidden" name="price" value="1100">
              <input type="hidden" name="image" value="images/Denonavrx1800h.jpg">
              <button type="submit" class="add-cart">🛒 Add to Cart</button>
            </form>
          </div>
        </div>
      </div>

      <!-- Tabs: Description, Specs, Reviews -->
      <div class="product-tabs">
        <h3>Description</h3>
        <p>The Denon AVR-X1800H is a powerful 7.2 channel AV receiver delivering high-fidelity audio with Dolby Atmos, DTS:X, and advanced 8K video support. Perfect for home theaters.</p>

        <h3>Specifications</h3>
        <ul>
          <li>Channels: 7.2</li>
          <li>Power: 80W per channel</li>
          <li>Video: 8K/60Hz and 4K/120Hz passthrough</li>
          <li>Audio: Dolby Atmos, DTS:X</li>
          <li>Connectivity: HDMI, Bluetooth, Wi-Fi, AirPlay 2</li>
        </ul>

        <h3>Customer Reviews</h3>
        <p>⭐ ⭐ ⭐ ⭐ ⭐ “Amazing sound clarity and easy setup.” - John</p>
        <p>⭐ ⭐ ⭐ ⭐ ☆ “Excellent receiver, but slightly bulky.” - Sarah</p>
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
