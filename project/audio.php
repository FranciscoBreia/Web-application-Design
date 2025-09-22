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
  <title>TechBay SG - Audio</title>
  <link rel="stylesheet" href="mainpage.css">
</head>
<body>

  <!-- HEADER -->
  <div class="header">
    <a href="index.php" class="logo"> TechBay SG </a>
    <div class="header-right">
      <a href="signup.php">Sign Up</a>
      <a href="cart.php">🛒 Cart (<?= $cartCount ?>)</a>
    </div>
  </div>

  <!-- BREADCRUMB -->
  <div class="breadcrumb">
    <a href="index.php">Home</a> > <span>Audio</span>
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
      <h2>Audio</h2>

      <div class="product-grid">

        <!-- JBL Bluetooth Speaker -->
        <div class="product-box">
          <div class="discount-badge">-15%</div>
          <a href="products/jblspeaker.php">
            <img src="images/jblspeaker.jpg" alt="JBL Bluetooth Speaker">
            <div class="product-info">
              <div class="price-section">
                <span class="old-price">€180</span>
                <span class="new-price">€150</span>
              </div>
              <h3 class="product-title">JBL Bluetooth Speaker (Portable Wireless - Waterproof)</h3>
            </div>
          </a>
          <div class="product-actions">
            <form method="post" action="add_to_cart.php">
              <input type="hidden" name="product" value="JBL Bluetooth Speaker">
              <input type="hidden" name="price" value="150">
              <input type="hidden" name="image" value="images/jblspeaker.jpg">
              <button type="submit" class="add-cart">🛒 ADD TO CART</button>
            </form>
          </div>
        </div>

        <!-- Sony WH-1000XM4 -->
        <div class="product-box">
          <div class="discount-badge">-20%</div>
          <a href="products/sonywh1000xm4.php">
            <img src="images/SonyWh.jpg" alt="Sony WH-1000XM4">
            <div class="product-info">
              <div class="price-section">
                <span class="old-price">€200</span>
                <span class="new-price">€160</span>
              </div>
              <h3 class="product-title">Sony WH-1000XM4 ANC, 30h, Cable-free</h3>
            </div>
          </a>
          <div class="product-actions">
            <form method="post" action="add_to_cart.php">
              <input type="hidden" name="product" value="Sony WH-1000XM4">
              <input type="hidden" name="price" value="160">
              <input type="hidden" name="image" value="images/SonyWh.jpg">
              <button type="submit" class="add-cart">🛒 ADD TO CART</button>
            </form>
          </div>
        </div>

        <!-- Sony WH-1000XM5 -->
        <div class="product-box">
          <div class="discount-badge">-10%</div>
          <a href="products/sonywh1000xm5.php">
            <img src="images/SonyWh-1000XM5.jpg" alt="Sony WH-1000XM5">
            <div class="product-info">
              <div class="price-section">
                <span class="old-price">€300</span>
                <span class="new-price">€270</span>
              </div>
              <h3 class="product-title">Sony WH-1000XM5 ANC, 30h, Cable-free</h3>
            </div>
          </a>
          <div class="product-actions">
            <form method="post" action="add_to_cart.php">
              <input type="hidden" name="product" value="Sony WH-1000XM5">
              <input type="hidden" name="price" value="270">
              <input type="hidden" name="image" value="images/SonyWh-1000XM5.jpg">
              <button type="submit" class="add-cart">🛒 ADD TO CART</button>
            </form>
          </div>
        </div>

        <!-- Marshall Major IV -->
        <div class="product-box">
          <div class="discount-badge">-10%</div>
          <a href="products/marshallmajor4.php">
            <img src="images/marshall.webp" alt="Marshall Major IV">
            <div class="product-info">
              <div class="price-section">
                <span class="old-price">€310</span>
                <span class="new-price">€279</span>
              </div>
              <h3 class="product-title">Marshall Major IV Wireless Headphones</h3>
            </div>
          </a>
          <div class="product-actions">
            <form method="post" action="add_to_cart.php">
              <input type="hidden" name="product" value="Marshall Major IV">
              <input type="hidden" name="price" value="279">
              <input type="hidden" name="image" value="images/marshall.webp">
              <button type="submit" class="add-cart">🛒 ADD TO CART</button>
            </form>
          </div>
        </div>

        <!-- Jabra Evolve2 65 -->
        <div class="product-box">
          <a href="products/jabraevolve265.php">
            <img src="images/JabaraEvolve265 Ms.jpg" alt="Jabra Evolve2 65">
            <div class="product-info">
              <div class="price-section">
                <span class="new-price">€200</span>
              </div>
              <h3 class="product-title">Jabra Evolve2 65 UC, Wireless, USB-C</h3>
            </div>
          </a>
          <div class="product-actions">
            <form method="post" action="add_to_cart.php">
              <input type="hidden" name="product" value="Jabra Evolve2 65">
              <input type="hidden" name="price" value="200">
              <input type="hidden" name="image" value="images/JabaraEvolve265 Ms.jpg">
              <button type="submit" class="add-cart">🛒 ADD TO CART</button>
            </form>
          </div>
        </div>

        <!-- Denon AVR X1800H -->
        <div class="product-box">
          <a href="products/denonavrx1800h.php">
            <img src="images/Denonavrx1800h.jpg" alt="Denon AVR X1800H">
            <div class="product-info">
              <div class="price-section">
                <span class="new-price">€1100</span>
              </div>
              <h3 class="product-title">Denon AVR X1800H, 7.2 Channel, FM</h3>
            </div>
          </a>
          <div class="product-actions">
            <form method="post" action="add_to_cart.php">
              <input type="hidden" name="product" value="Denon AVR X1800H">
              <input type="hidden" name="price" value="1100">
              <input type="hidden" name="image" value="images/Denonavrx1800h.jpg">
              <button type="submit" class="add-cart">🛒 ADD TO CART</button>
            </form>
          </div>
        </div>

        <!-- Sonos Era 100 -->
        <div class="product-box">
          <a href="products/sonosera100.php">
            <img src="images/SonosEra100.jpg" alt="Sonos Era 100">
            <div class="product-info">
              <div class="price-section">
                <span class="new-price">€516</span>
              </div>
              <h3 class="product-title">Sonos Era 100, Airplay 2, Bluetooth, WLAN</h3>
            </div>
          </a>
          <div class="product-actions">
            <form method="post" action="add_to_cart.php">
              <input type="hidden" name="product" value="Sonos Era 100">
              <input type="hidden" name="price" value="516">
              <input type="hidden" name="image" value="images/SonosEra100.jpg">
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
