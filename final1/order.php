<?php // order.php ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Place Order - Cup of Comfort</title>
  <style>
    body{font-family:'Segoe UI', Roboto, Arial;background:#fbf8f6;color:#3a2b23;margin:0}
    .wrap{max-width:960px;margin:36px auto;padding:18px}
    form{background:#fff;padding:18px;border-radius:10px;box-shadow:0 8px 24px rgba(0,0,0,0.06)}
    label{display:block;margin-top:12px}
    input,select,textarea{width:100%;padding:10px;margin-top:6px;border-radius:8px;border:1px solid #e6ded7}
    button{margin-top:14px;padding:12px 16px;background:#8B5E3C;color:#fff;border:0;border-radius:8px;font-weight:700}
  </style>
</head>
<body>
  <?php include 'nav.php'; ?>
  <main class="wrap">
    <h1>Place an Order</h1>
    <form method="post" action="submit_order.php">
      <label>Name <input type="text" name="customer_name" required></label>
      <label>Phone <input type="tel" name="phone" required></label>
      <label>Item
        <select name="item" required>
          <option value="Americano">Americano</option>
          <option value="Latte">Latte</option>
          <option value="Cappuccino">Cappuccino</option>
          <option value="Mocha">Mocha</option>
          <option value="Cake">Cake Slice</option>
        </select>
      </label>
      <label>Quantity <input type="number" name="quantity" min="1" value="1" required></label>
      <label>Notes <textarea name="notes" rows="3"></textarea></label>
      <button type="submit">Submit Order</button>
    </form>
  </main>
</body>
</html>
