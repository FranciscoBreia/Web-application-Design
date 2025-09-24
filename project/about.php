<?php
session_start();
// Count items in cart
$cartCount = isset($_SESSION['cart']) ? array_sum(array_column($_SESSION['cart'], 'qty')) : 0;
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>About Us - TechBay SG</title>
  <link rel="stylesheet" href="mainpage.css">
</head>
<body>

  <!-- HEADER -->
  <div class="header">
    <a href="index.php" class="logo">TechBay SG</a>
    <div class="header-right">
      <a href="signup.php">Sign Up</a>
      <a href="cart.php">🛒 Cart (<?php echo $cartCount; ?>)</a>
    </div>
  </div>

  <!-- BREADCRUMB -->
  <div class="breadcrumb">
    <a href="index.php">Home</a> > <span>About Us</span>
  </div>

  <!-- CONTAINER -->
  <div class="container">

    <!-- SIDEBAR -->
    <nav class="sidebar">
      <h3>Categories</h3>
      <a href="smartphones.php">Smartphones</a>
      <a href="tvs.php">TVs</a>
      <a href="audio.php">Audio</a>
      <a href="wearables.php">Wearables</a>
    </nav>

    <!-- MAIN CONTENT -->
    <div class="maincontent">
      <h2>About Us</h2>
      <p>
        Welcome to <strong>TechBay SG</strong> - your trusted online store for the latest consumer electronics and IT products. 
        We specialize in bringing you high-quality smartphones, TVs, audio systems, and wearables at the best prices. 
      </p>

      <h3>Our Mission</h3>
      <p>
        Our mission is simple: to make technology more accessible and affordable while providing excellent customer service. 
        We carefully select each product to ensure it meets our standards of quality, performance, and value.
      </p>

      <h3>Why Choose Us?</h3>
      <ul>
        <li>Wide selection of top brands and the latest models</li>
        <li>Secure checkout and fast delivery</li>
        <li>Dedicated customer support team</li>
        <li>Regular promotions and hot deals</li>
      </ul>
    </div>
  </div>

  <!-- FOOTER -->
  <div class="footer">
    <p>© 2025 TechBay SG. All rights reserved.</p>
    <p>
      <a href="index.php">Home</a> |
      <a href="about.php">About</a> |
      <a href="contact.php">Contact</a> |
      <a href="faq.php">FAQ</a>
    </p>
  </div>

</body>
</html>
