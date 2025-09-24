<?php
session_start();
// Count items in cart
$cartCount = isset($_SESSION['cart']) ? array_sum(array_column($_SESSION['cart'], 'qty')) : 0;
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>TechBay SG - Big Promotions</title>
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
    <a href="index.php">Home</a> > <span>Big Promotions</span>
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
      <h2>🔥 Mega Deals - Biggest Promotions 🔥</h2>
      <div class="product-grid">

        <!-- iPhone 13 -->
        <div class="product-box">
          <div class="discount-badge">-20%</div>
          <a href="products/iphone13.php">
            <img src="images/iphone13.webp" alt="iPhone 13">
            <div class="product-info">
              <div class="price-section">
                <span class="old-price">€1,000</span>
                <span class="new-price">€800</span>
              </div>
              <h3 class="product-title">Apple iPhone 13 (128GB - 5G Smartphone)</h3>
            </div>
          </a>
          <div class="product-actions">
            <form method="post" action="add_to_cart.php">
              <input type="hidden" name="product" value="iPhone 13">
              <input type="hidden" name="price" value="800">
              <button type="submit" class="add-cart">🛒 ADD TO CART</button>
            </form>
          </div>
        </div>

        <!-- Marshall Major IV -->
        <div class="product-box">
          <div class="discount-badge">-25%</div>
          <a href="products/marshallmajor4.php">
            <img src="images/marshall.webp" alt="Marshall Major IV">
            <div class="product-info">
              <div class="price-section">
                <span class="old-price">€270</span>
                <span class="new-price">€200</span>
              </div>
              <h3 class="product-title">Marshall Major IV Wireless Headphones</h3>
            </div>
          </a>
          <div class="product-actions">
            <form method="post" action="add_to_cart.php">
              <input type="hidden" name="product" value="Marshall Major IV">
              <input type="hidden" name="price" value="200">
              <button type="submit" class="add-cart">🛒 ADD TO CART</button>
            </form>
          </div>
        </div>

        <!-- Apple Watch -->
        <div class="product-box">
          <div class="discount-badge">-30%</div>
          <a href="products/applewatchseries11.php">
            <img src="images/applewatch.webp" alt="Apple Watch Series 11">
            <div class="product-info">
              <div class="price-section">
                <span class="old-price">€570</span>
                <span class="new-price">€400</span>
              </div>
              <h3 class="product-title">Apple Watch Series 11 (GPS, 41mm Aluminium)</h3>
            </div>
          </a>
          <div class="product-actions">
            <form method="post" action="add_to_cart.php">
              <input type="hidden" name="product" value="Apple Watch Series 11">
              <input type="hidden" name="price" value="400">
              <button type="submit" class="add-cart">🛒 ADD TO CART</button>
            </form>
          </div>
        </div>

        <!-- JBL Speaker -->
        <div class="product-box">
          <div class="discount-badge">-15%</div>
          <a href="products/jblspeaker.php">
            <img src="images/jblspeaker.jpg" alt="JBL Bluetooth Speaker">
            <div class="product-info">
              <div class="price-section">
                <span class="old-price">€180</span>
                <span class="new-price">€150</span>
              </div>
              <h3 class="product-title">JBL Bluetooth Speaker (Portable Wireless)</h3>
            </div>
          </a>
          <div class="product-actions">
            <form method="post" action="add_to_cart.php">
              <input type="hidden" name="product" value="JBL Bluetooth Speaker">
              <input type="hidden" name="price" value="150">
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
              <h3 class="product-title">Sony WH-1000XM4 Wireless Headphones</h3>
            </div>
          </a>
          <div class="product-actions">
            <form method="post" action="add_to_cart.php">
              <input type="hidden" name="product" value="Sony WH-1000XM4">
              <input type="hidden" name="price" value="160">
              <button type="submit" class="add-cart">🛒 ADD TO CART</button>
            </form>
          </div>
        </div>

        <!-- LG OLED TV -->
        <div class="product-box">
          <div class="discount-badge">-17%</div>
          <a href="products/tvlg.php">
            <img src="images/tvoled.jpg" alt="LG OLED TV">
            <div class="product-info">
              <div class="price-section">
                <span class="old-price">€1,200</span>
                <span class="new-price">€1,000</span>
              </div>
              <h3 class="product-title">LG OLED TV (65'' 4K Ultra HD Smart TV)</h3>
            </div>
          </a>
          <div class="product-actions">
            <form method="post" action="add_to_cart.php">
              <input type="hidden" name="product" value="LG OLED TV">
              <input type="hidden" name="price" value="1000">
              <button type="submit" class="add-cart">🛒 ADD TO CART</button>
            </form>
          </div>
        </div>

        <!-- Denon AVR -->
        <div class="product-box">
          <div class="discount-badge">-10%</div>
          <a href="products/denonavrx1800h.php">
            <img src="images/Denonavrx1800h.jpg" alt="Denon AVR">
            <div class="product-info">
              <div class="price-section">
                <span class="old-price">€1,220</span>
                <span class="new-price">€1,100</span>
              </div>
              <h3 class="product-title">Denon AVR X1800H (7.2 Channel Receiver)</h3>
            </div>
          </a>
          <div class="product-actions">
            <form method="post" action="add_to_cart.php">
              <input type="hidden" name="product" value="Denon AVR X1800H">
              <input type="hidden" name="price" value="1100">
              <button type="submit" class="add-cart">🛒 ADD TO CART</button>
            </form>
          </div>
        </div>

        <!-- Sonos Era 100 -->
        <div class="product-box">
          <div class="discount-badge">-15%</div>
          <a href="products/sonosera100.php">
            <img src="images/SonosEra100.jpg" alt="Sonos Era 100">
            <div class="product-info">
              <div class="price-section">
                <span class="old-price">€600</span>
                <span class="new-price">€516</span>
              </div>
              <h3 class="product-title">Sonos Era 100 Smart Speaker</h3>
            </div>
          </a>
          <div class="product-actions">
            <form method="post" action="add_to_cart.php">
              <input type="hidden" name="product" value="Sonos Era 100">
              <input type="hidden" name="price" value="516">
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
