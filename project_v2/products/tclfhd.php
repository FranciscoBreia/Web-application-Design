<?php
session_start();
$cartCount = isset($_SESSION['cart']) ? array_sum(array_column($_SESSION['cart'], 'qty')) : 0;
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>TCL FHD Smart LED - TechBay SG</title>
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
    <span>TCL FHD Smart LED</span>
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

    <!-- MAIN CONTENT -->
    <div class="maincontent product-detail">
      <div class="product-detail-box">
        <div class="product-image">
          <img src="../images/tvtcl.png" alt="TCL FHD Smart LED">
        </div>
        <div class="product-info-detail">
          <h2>TCL 32" FHD Smart LED TV</h2>
          <p><strong>Brand:</strong> TCL</p>
          <div class="rating">⭐⭐⭐⭐☆ (22)</div>
          <p class="price">€1,200</p>

          <!-- ADD TO CART -->
          <div class="product-actions">
            <form method="post" action="../add_to_cart.php">
              <input type="hidden" name="product" value="TCL FHD Smart LED">
              <input type="hidden" name="price" value="1200">
              <button type="submit" class="add-cart-productzone">🛒 Add to Cart</button>
            </form>
          </div>
        </div>
      </div>

      <!-- PRODUCT TABS -->
      <div class="product-tabs">
        <h3>Description</h3>
        <p>Compact TCL Smart LED TV with Full HD resolution and popular streaming apps included.</p>

        <h3>Specifications</h3>
        <ul>
          <li>Size: 32-inch</li>
          <li>Resolution: Full HD</li>
          <li>Panel: LED</li>
          <li>Smart TV apps: Netflix, YouTube, Prime</li>
        </ul>

        <h3>Customer Reviews</h3>
        <p>⭐ ⭐ ⭐ ⭐ ☆ “Perfect for small living rooms.” - Jade</p>
        <p>⭐ ⭐ ⭐ ⭐ ⭐ “Great features for such a low price.” - Ravi</p>
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
