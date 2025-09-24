<?php
session_start();
$cartCount = isset($_SESSION['cart']) ? array_sum(array_column($_SESSION['cart'], 'qty')) : 0;
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Google Pixel 8A - TechBay SG</title>
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
    <a href="../smartphones.php">Smartphones</a> > 
    <span>Google Pixel 8A</span>
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
          <img src="../images/googlepixel8a.png" alt="Google Pixel 8A">
        </div>

        <!-- Right: Product Info -->
        <div class="product-info-detail">
          <h2>Google Pixel 8A</h2>
          <p><strong>Color:</strong> Black | Blue | Green</p>
          <p><strong>Brand:</strong> Google</p>

          <!-- Rating -->
          <div class="rating">
            ⭐⭐⭐⭐☆ (22)
          </div>

          <p class="price">€1300</p>

          <!-- Buttons -->
          <div class="product-actions">
            <form method="post" action="../add_to_cart.php">
              <input type="hidden" name="product" value="Google Pixel 8A">
              <input type="hidden" name="price" value="1300">
              <input type="hidden" name="image" value="images/googlepixel8a.png">
              <button type="submit" class="add-cart-productzone">🛒 Add to Cart</button>
            </form>
          </div>
        </div>
      </div>

      <!-- Tabs -->
      <div class="product-tabs">
        <h3>Description</h3>
        <p>The Google Pixel 8A offers a smooth Android experience with the latest AI-powered features, excellent camera performance, and long-lasting battery.</p>

        <h3>Specifications</h3>
        <ul>
          <li>Display: 6.1-inch OLED, 120Hz</li>
          <li>Storage: 128GB</li>
          <li>Camera: 64MP + 12MP</li>
          <li>Battery: 4500mAh, fast charging</li>
          <li>OS: Android 14</li>
        </ul>

        <h3>Customer Reviews</h3>
        <p>⭐ ⭐ ⭐ ⭐ ⭐ “Best Android experience, period.” - Kevin</p>
        <p>⭐ ⭐ ⭐ ⭐ ☆ “Battery life is decent but could improve.” - Emma</p>
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
