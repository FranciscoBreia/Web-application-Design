<?php
session_start();
$cartCount = isset($_SESSION['cart']) ? array_sum(array_column($_SESSION['cart'], 'qty')) : 0;
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Phillips Full HD - TechBay SG</title>
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
    <a href="../tvs.php">TVs</a> >
    <span>Phillips Full HD</span>
  </div>

  <!-- CONTAINER -->
  <div class="container">
    <nav class="sidebar">
      <h3>Categories</h3>
      <a href="../smartphones.php">Smartphones</a>
      <a href="../tvs.php">TVs</a>
      <a href="../audio.php">Audio</a>
      <a href="../wearables.php">Wearables</a>
    </nav>

    <div class="maincontent product-detail">
      <div class="product-detail-box">
        <div class="product-image">
          <img src="../images/tvphillips.png" alt="Phillips Full HD TV">
        </div>
        <div class="product-info-detail">
          <h2>Phillips 43" Full HD Smart TV</h2>
          <p><strong>Brand:</strong> Phillips</p>
          <div class="rating">⭐⭐⭐☆☆ (19)</div>
          <p class="price">€1200</p>

          <div class="product-actions">
            <form method="post" action="../add_to_cart.php">
              <input type="hidden" name="product" value="Phillips Full HD">
              <input type="hidden" name="price" value="1200">
              <input type="hidden" name="image" value="images/tvphillips.png">
              <button type="submit" class="add-cart-productzone">🛒 Add to Cart</button>
            </form>
          </div>
        </div>
      </div>

      <div class="product-tabs">
        <h3>Description</h3>
        <p>Affordable Full HD TV with Smart OS, great for smaller rooms or as a second screen.</p>

        <h3>Specifications</h3>
        <ul>
          <li>Size: 43-inch</li>
          <li>Resolution: Full HD</li>
          <li>HDR: Standard HDR</li>
          <li>Smart TV</li>
        </ul>

        <h3>Customer Reviews</h3>
        <p>⭐ ⭐ ⭐ ⭐ ☆ “Good for the price, perfect in the bedroom.” - Alex</p>
        <p>⭐ ⭐ ⭐ ☆ ☆ “Average sound quality.” - Beatriz</p>
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
