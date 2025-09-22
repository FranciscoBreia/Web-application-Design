<?php
session_start();

// Load current cart count for header
$cart = $_SESSION['cart'] ?? [];
$cartCount = array_sum(array_column($cart, 'qty'));
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Huawei Mate 50 Pro - TechBay SG</title>
  <link rel="stylesheet" href="../mainpage.css">
</head>
<body>

  <!-- HEADER -->
  <div class="header">
    <a href="../index.php" class="logo">TechBay SG</a>
    <div class="header-right">
      <a href="../signup.php">Sign Up</a>
      <a href="../cart.php">🛒 Cart (<?= $cartCount ?>)</a>
    </div>
  </div>

  <!-- BREADCRUMB -->
  <div class="breadcrumb">
    <a href="../index.php">Home</a> > 
    <a href="../smartphones.php">Smartphones</a> > 
    <span>Huawei Mate 50 Pro</span>
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
          <img src="../images/huaweimate50pro.png" alt="Huawei Mate 50 Pro">
        </div>

        <!-- Right: Product Info -->
        <div class="product-info-detail">
          <h2>Huawei Mate 50 Pro</h2>
          <p><strong>Color:</strong> Black | Silver | Orange</p>
          <p><strong>Brand:</strong> Huawei</p>

          <!-- Rating -->
          <div class="rating">
            ⭐⭐⭐⭐☆ (15)
          </div>

          <p class="price">€1300</p>

          <!-- Buttons -->
          <div class="product-actions">
            <form method="post" action="../cart.php">
              <input type="hidden" name="product" value="Huawei Mate 50 Pro">
              <input type="hidden" name="price" value="1300">
              <button type="submit" class="add-cart-productzone">🛒 Add to Cart</button>
            </form>
          </div>
        </div>
      </div>

      <!-- Tabs -->
      <div class="product-tabs">
        <h3>Description</h3>
        <p>The Huawei Mate 50 Pro stands out with its premium design, flagship-level cameras, and excellent performance, all while delivering a luxury feel.</p>

        <h3>Specifications</h3>
        <ul>
          <li>Display: 6.7-inch OLED, 120Hz</li>
          <li>Storage: 256GB</li>
          <li>Camera: 50MP + 13MP + 64MP</li>
          <li>Battery: 4700mAh, 66W SuperCharge</li>
          <li>OS: EMUI (no Google services)</li>
        </ul>

        <h3>Customer Reviews</h3>
        <p>⭐ ⭐ ⭐ ⭐ ⭐ “The camera quality is stunning.” - Daniel</p>
        <p>⭐ ⭐ ⭐ ⭐ ☆ “Excellent phone, but missing Google apps can be tricky.” - Anna</p>
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
