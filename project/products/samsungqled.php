<?php
session_start();
$cartCount = isset($_SESSION['cart']) ? array_sum(array_column($_SESSION['cart'], 'qty')) : 0;
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Samsung QLED 4K - TechBay SG</title>
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
    <span>Samsung QLED 4K</span>
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
          <img src="../images/samsungqled.png" alt="Samsung QLED">
        </div>
        <div class="product-info-detail">
          <h2>Samsung QLED 4K UHD Smart TV</h2>
          <p><strong>Brand:</strong> Samsung</p>
          <div class="rating">⭐⭐⭐⭐⭐ (50)</div>
          <p class="price">€1,300</p>

          <!-- ADD TO CART FORM -->
          <div class="product-actions">
            <form method="post" action="../add_to_cart.php">
              <input type="hidden" name="product" value="Samsung QLED 4K">
              <input type="hidden" name="price" value="1300">
              <button type="submit" class="add-cart-productzone">🛒 Add to Cart</button>
            </form>
          </div>
        </div>
      </div>

      <div class="product-tabs">
        <h3>Description</h3>
        <p>Samsung’s QLED technology brings quantum dot color, 4K clarity, and Smart Hub integration for endless content.</p>

        <h3>Specifications</h3>
        <ul>
          <li>Size: 65-inch</li>
          <li>Resolution: 4K UHD</li>
          <li>Panel: QLED</li>
          <li>Smart Hub + Voice Assistant</li>
        </ul>

        <h3>Customer Reviews</h3>
        <p>⭐ ⭐ ⭐ ⭐ ⭐ “Amazing brightness and color accuracy.” - Ahmed</p>
        <p>⭐ ⭐ ⭐ ⭐ ⭐ “Perfect for movies and gaming.” - Clara</p>
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
