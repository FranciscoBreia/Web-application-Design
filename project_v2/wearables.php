<?php
session_start();
$cart = $_SESSION['cart'] ?? [];
$cartCount = array_sum(array_column($cart, 'qty'));
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>TechBay SG - Wearables</title>
  <link rel="stylesheet" href="mainpage.css">
</head>
<body>

  <!-- HEADER -->
  <div class="header">
    <a href="index.php" class="logo">TechBay SG</a>
    <div class="header-right">
      <a href="signup.php">Sign Up</a>
      <a href="cart.php">🛒 Cart (<?= $cartCount ?>)</a>
    </div>
  </div>

  <!-- BREADCRUMB -->
  <div class="breadcrumb">
    <a href="index.php">Home</a> > <span>Wearables</span>
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
      <h2>Wearables</h2>

      <div class="product-grid">

        <!-- Apple Watch Series 11 -->
        <div class="product-box">
          <div class="discount-badge">-10%</div>
          <a href="products/applewatchseries11.php">
            <img src="images/applewatch.webp" alt="Apple Watch Series 11">
            <div class="product-info">
              <div class="price-section">
                <span class="old-price">€869</span>
                <span class="new-price">€782</span>
              </div>
              <h3 class="product-title">Apple Watch Series 11 (GPS, 41mm Aluminium)</h3>
            </div>
          </a>
          <div class="product-actions">
            <form method="post" action="add_to_cart.php">
              <input type="hidden" name="product" value="Apple Watch Series 11">
              <input type="hidden" name="price" value="782">
              <input type="hidden" name="image" value="images/applewatch.webp">
              <button type="submit" class="add-cart">🛒 ADD TO CART</button>
            </form>
          </div>
        </div>

        <!-- Samsung Galaxy Watch 8 -->
        <div class="product-box">
          <div class="discount-badge">-9%</div>
          <a href="products/samsunggalaxywatch8.php">
            <img src="images/Samsunggalaxywatch8.jpg" alt="Samsung Galaxy Watch 8">
            <div class="product-info">
              <div class="price-section">
                <span class="old-price">€635</span>
                <span class="new-price">€577</span>
              </div>
              <h3 class="product-title">Samsung Galaxy Watch 8 (44mm, WLAN)</h3>
            </div>
          </a>
          <div class="product-actions">
            <form method="post" action="add_to_cart.php">
              <input type="hidden" name="product" value="Samsung Galaxy Watch 8">
              <input type="hidden" name="price" value="577">
              <input type="hidden" name="image" value="images/Samsunggalaxywatch8.jpg">
              <button type="submit" class="add-cart">🛒 ADD TO CART</button>
            </form>
          </div>
        </div>

        <!-- Samsung Galaxy Watch 7 -->
        <div class="product-box">
          <div class="discount-badge">-10%</div>
          <a href="products/samsunggalaxywatch7.php">
            <img src="images/Samunsunggalaxywatch7.jpg" alt="Samsung Galaxy Watch 7">
            <div class="product-info">
              <div class="price-section">
                <span class="old-price">€297</span>
                <span class="new-price">€267</span>
              </div>
              <h3 class="product-title">Samsung Galaxy Watch 7 (44mm, WLAN)</h3>
            </div>
          </a>
          <div class="product-actions">
            <form method="post" action="add_to_cart.php">
              <input type="hidden" name="product" value="Samsung Galaxy Watch 7">
              <input type="hidden" name="price" value="267">
              <input type="hidden" name="image" value="images/Samunsunggalaxywatch7.jpg">
              <button type="submit" class="add-cart">🛒 ADD TO CART</button>
            </form>
          </div>
        </div>

        <!-- Garmin Fenix 8 -->
        <div class="product-box">
          <a href="products/garminfenix8.php">
            <img src="images/GarminFenix8.jpg" alt="Garmin Fenix 8 Amoled Sapphire Titan">
            <div class="product-info">
              <div class="price-section">
                <span class="new-price">€2026</span>
              </div>
              <h3 class="product-title">Garmin Fenix 8 Amoled Sapphire Titan (47mm)</h3>
            </div>
          </a>
          <div class="product-actions">
            <form method="post" action="add_to_cart.php">
              <input type="hidden" name="product" value="Garmin Fenix 8">
              <input type="hidden" name="price" value="2026">
              <input type="hidden" name="image" value="images/GarminFenix8.jpg">
              <button type="submit" class="add-cart">🛒 ADD TO CART</button>
            </form>
          </div>
        </div>

        <!-- Samsung Galaxy Watch 4 -->
        <div class="product-box">
          <div class="discount-badge">-10%</div>
          <a href="products/galaxywatch.php">
            <img src="images/galaxywatch.jpg" alt="Samsung Galaxy Watch 4">
            <div class="product-info">
              <div class="price-section">
                <span class="old-price">€390</span>
                <span class="new-price">€350</span>
              </div>
              <h3 class="product-title">Samsung Galaxy Watch 4 (Bluetooth, 44mm)</h3>
            </div>
          </a>
          <div class="product-actions">
            <form method="post" action="add_to_cart.php">
              <input type="hidden" name="product" value="Samsung Galaxy Watch 4">
              <input type="hidden" name="price" value="350">
              <input type="hidden" name="image" value="images/galaxywatch.jpg">
              <button type="submit" class="add-cart">🛒 ADD TO CART</button>
            </form>
          </div>
        </div>

        <!-- Huawei GT5 Pro -->
        <div class="product-box">
          <a href="products/huaweigt5pro.php">
            <img src="images/huaweigte5.jpg" alt="Huawei GT5 Pro">
            <div class="product-info">
              <div class="price-section">
                <span class="new-price">€710</span>
              </div>
              <h3 class="product-title">Huawei GT5 Pro (46mm)</h3>
            </div>
          </a>
          <div class="product-actions">
            <form method="post" action="add_to_cart.php">
              <input type="hidden" name="product" value="Huawei GT5 Pro">
              <input type="hidden" name="price" value="710">
              <input type="hidden" name="image" value="images/huaweigte5.jpg">
              <button type="submit" class="add-cart">🛒 ADD TO CART</button>
            </form>
          </div>
        </div>

        <!-- Withings ScanWatch 2 -->
        <div class="product-box">
          <a href="products/withingsscanwatch2.php">
            <img src="images/withingsScanWatch2.jpg" alt="Withings ScanWatch 2">
            <div class="product-info">
              <div class="price-section">
                <span class="new-price">€680</span>
              </div>
              <h3 class="product-title">Withings ScanWatch 2 (38mm)</h3>
            </div>
          </a>
          <div class="product-actions">
            <form method="post" action="add_to_cart.php">
              <input type="hidden" name="product" value="Withings ScanWatch 2">
              <input type="hidden" name="price" value="680">
              <input type="hidden" name="image" value="images/withingsScanWatch2.jpg">
              <button type="submit" class="add-cart">🛒 ADD TO CART</button>
            </form>
          </div>
        </div>

      </div>
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
