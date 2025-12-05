<?php
require 'db.php';
$res = $conn->query("SELECT id, customer_name, phone, item, quantity, notes, created_at FROM orders ORDER BY created_at DESC");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Order View - Cup of Comfort</title>
  <style>
    body{font-family:'Segoe UI', Roboto, Arial;background:#fbf8f6;color:#3a2b23;margin:0}
    .container{max-width:1100px;margin:30px auto;padding:18px}
    table{width:100%;border-collapse:collapse;background:#fff;border-radius:8px;overflow:hidden}
    th,td{padding:12px;border-bottom:1px solid #f0ebe7;text-align:left}
    th{background:#f7f2ef}
  </style>
</head>
<body>
  <?php include 'nav.php'; ?>
  <main class="container">
    <h1>Orders</h1>
    <?php if (isset($_GET['msg']) && $_GET['msg']==='created'): ?>
      <p style="color:green">Order submitted successfully.</p>
    <?php endif; ?>
    <table>
      <thead><tr><th>#</th><th>Name</th><th>Phone</th><th>Item</th><th>Qty</th><th>Notes</th><th>Time</th></tr></thead>
      <tbody>
      <?php while($row = $res->fetch_assoc()): ?>
        <tr>
          <td><?php echo htmlspecialchars($row['id']); ?></td>
          <td><?php echo htmlspecialchars($row['customer_name']); ?></td>
          <td><?php echo htmlspecialchars($row['phone']); ?></td>
          <td><?php echo htmlspecialchars($row['item']); ?></td>
          <td><?php echo htmlspecialchars($row['quantity']); ?></td>
          <td><?php echo htmlspecialchars($row['notes']); ?></td>
          <td><?php echo htmlspecialchars($row['created_at']); ?></td>
        </tr>
      <?php endwhile; ?>
      </tbody>
    </table>
  </main>
</body>
</html>
