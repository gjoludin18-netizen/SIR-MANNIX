<?php // menu.php ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Menu - Cup of Comfort</title>
  <style>
    body{font-family:'Segoe UI', Roboto, Arial;background:#fbf8f6;color:#3a2b23}
    .container{max-width:900px;margin:40px auto;padding:18px}
    h1{margin-bottom:20px;}
    .menu-section{margin-bottom:34px;}
    .menu-list{list-style:none;padding:0;}
    .menu-item{
      background:#fff;
      margin-bottom:16px;
      padding:16px 22px;
      border-radius:10px;
      box-shadow:0 2px 10px rgba(0,0,0,0.06);
      display:flex;
      justify-content:space-between;
      align-items:center;
    }
    .item-name{font-size:18px;font-weight:600;}
    .item-desc{font-size:14px;color:#7a6143;margin-top:4px;}
    .item-price{font-size:16px;color:#8B5E3C;font-weight:700;}
  </style>
</head>
<body>
  <?php include 'nav.php'; ?>
  <main class="container">
    <h1>Menu</h1>
    <div class="menu-section">
      <h2>Coffee</h2>
      <ul class="menu-list">
        <li class="menu-item">
          <div>
            <span class="item-name">Americano</span>
            <div class="item-desc">Smooth black coffee - rich & robust</div>
          </div>
          <span class="item-price">₱80</span>
        </li>
        <li class="menu-item">
          <div>
            <span class="item-name">Latte</span>
            <div class="item-desc">Espresso with steamed milk, silky & comforting</div>
          </div>
          <span class="item-price">₱110</span>
        </li>
        <li class="menu-item">
          <div>
            <span class="item-name">Cappuccino</span>
            <div class="item-desc">Espresso, steamed milk, topped with foam</div>
          </div>
          <span class="item-price">₱110</span>
        </li>
        <li class="menu-item">
          <div>
            <span class="item-name">Mocha</span>
            <div class="item-desc">Espresso blended with chocolate & milk</div>
          </div>
          <span class="item-price">₱120</span>
        </li>
      </ul>
    </div>

    <div class="menu-section">
      <h2>Pastries & Cakes</h2>
      <ul class="menu-list">
        <li class="menu-item">
          <div>
            <span class="item-name">Cake Slice</span>
            <div class="item-desc">Ask for today’s flavors: chocolate, carrot, more</div>
          </div>
          <span class="item-price">₱70</span>
        </li>
        <li class="menu-item">
          <div>
            <span class="item-name">Croissant</span>
            <div class="item-desc">Flaky, buttery, freshly baked daily</div>
          </div>
          <span class="item-price">₱60</span>
        </li>
        <li class="menu-item">
          <div>
            <span class="item-name">Banana Bread</span>
            <div class="item-desc">Moist & sweet, with real banana chunks</div>
          </div>
          <span class="item-price">₱65</span>
        </li>
      </ul>
    </div>
  </main>
</body>
</html>