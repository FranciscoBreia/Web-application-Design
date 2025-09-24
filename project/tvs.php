<?php
session_start();
$cart = $_SESSION['cart'] ?? [];
$cartCount = array_sum(array_column($cart, 'qty'));
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>TechBay SG - TVs</title>
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
    <a href="index.php">Home</a> > <span>TVs</span>
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
      <h2>TVs</h2>

      <div class="product-grid">
        
        <!-- LG OLED -->
        <div class="product-box">
          <div class="discount-badge">-10%</div>
          <a href="products/tvlg.php">
            <img src="images/tvoled.jpg" alt="TV LG OLED">
            <div class="product-info">
              <div class="price-section">
                <span class="old-price">€1450</span>
                <span class="new-price">€1300</span>
              </div>
              <h3 class="product-title">
                LG OLED evo 65'' 4K Ultra HD Smart TV
              </h3>
            </div>
          </a>
          <div class="product-actions">
            <form method="post" action="add_to_cart.php">
              <input type="hidden" name="product" value="LG OLED evo 65''">
              <input type="hidden" name="price" value="1300">
              <input type="hidden" name="image" value="images/tvoled.jpg">
              <button type="submit" class="add-cart">🛒 ADD TO CART</button>
            </form>
          </div>
        </div>

        <!-- Hisense E6 -->
        <div class="product-box">
          <div class="discount-badge">-12%</div>
          <a href="products/hisensee6.php">
            <img src="images/tvhisensee6.png" alt="Hisense E6 Double Vision">
            <div class="product-info">
              <div class="price-section">
                <span class="old-price">€850</span>
                <span class="new-price">€750</span>
              </div>
              <h3 class="product-title">
                Hisense E6 Double Vision UHD Smart TV
              </h3>
            </div>
          </a>
          <div class="product-actions">
            <form method="post" action="add_to_cart.php">
              <input type="hidden" name="product" value="Hisense E6 Double Vision">
              <input type="hidden" name="price" value="750">
              <input type="hidden" name="image" value="images/tvhisensee6.png">
              <button type="submit" class="add-cart">🛒 ADD TO CART</button>
            </form>
          </div>
        </div>

        <!-- Samsung QLED -->
        <div class="product-box">
          <div class="discount-badge">-15%</div>
          <a href="products/samsungqled.php">
            <img src="images/samsungqled.png" alt="Samsung QLED 4K UHD">
            <div class="product-info">
              <div class="price-section">
                <span class="old-price">€1400</span>
                <span class="new-price">€1190</span>
              </div>
              <h3 class="product-title">
                Samsung QLED 55'' 4K UHD Smart TV
              </h3>
            </div>
          </a>
          <div class="product-actions">
            <form method="post" action="add_to_cart.php">
              <input type="hidden" name="product" value="Samsung QLED 55'' UHD">
              <input type="hidden" name="price" value="1190">
              <input type="hidden" name="image" value="images/samsungqled.png">
              <button type="submit" class="add-cart">🛒 ADD TO CART</button>
            </form>
          </div>
        </div>

        <!-- Sony OLED -->
        <div class="product-box">
          <div class="discount-badge">-8%</div>
          <a href="products/sonyoled.php">
            <img src="images/sonytv.jpg" alt="Sony OLED TV">
            <div class="product-info">
              <div class="price-section">
                <span class="old-price">€1300</span>
                <span class="new-price">€1200</span>
              </div>
              <h3 class="product-title">
                Sony OLED 65'' 4K Ultra HD Smart TV
              </h3>
            </div>
          </a>
          <div class="product-actions">
            <form method="post" action="add_to_cart.php">
              <input type="hidden" name="product" value="Sony OLED 65''">
              <input type="hidden" name="price" value="1200">
              <input type="hidden" name="image" value="images/sonytv.jpg">
              <button type="submit" class="add-cart">🛒 ADD TO CART</button>
            </form>
          </div>
        </div>

        <!-- Philips Full HD -->
        <div class="product-box">
          <div class="discount-badge">-20%</div>
          <a href="products/phillipsfullhd.php">
            <img src="images/tvphillips.png" alt="Philips Full HD TV">
            <div class="product-info">
              <div class="price-section">
                <span class="old-price">€600</span>
                <span class="new-price">€480</span>
              </div>
              <h3 class="product-title">
                Philips 43'' Full HD Smart TV
              </h3>
            </div>
          </a>
          <div class="product-actions">
            <form method="post" action="add_to_cart.php">
              <input type="hidden" name="product" value="Philips 43'' Full HD">
              <input type="hidden" name="price" value="480">
              <input type="hidden" name="image" value="images/tvphillips.png">
              <button type="submit" class="add-cart">🛒 ADD TO CART</button>
            </form>
          </div>
        </div>

        <!-- TCL FHD Smart LED -->
        <div class="product-box">
          <div class="discount-badge">-18%</div>
          <a href="products/tclfhd.php">
            <img src="images/tvtcl.png" alt="TCL FHD Smart LED TV">
            <div class="product-info">
              <div class="price-section">
                <span class="old-price">€500</span>
                <span class="new-price">€410</span>
              </div>
              <h3 class="product-title">
                TCL 32'' FHD Smart LED TV
              </h3>
            </div>
          </a>
          <div class="product-actions">
            <form method="post" action="add_to_cart.php">
              <input type="hidden" name="product" value="TCL 32'' FHD Smart LED">
              <input type="hidden" name="price" value="410">
              <input type="hidden" name="image" value="images/tvtcl.png">
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
