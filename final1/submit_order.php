<?php
require 'db.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: order.php');
    exit;
}

$customer_name = trim($_POST['customer_name'] ?? '');
$phone = trim($_POST['phone'] ?? '');
$item = trim($_POST['item'] ?? '');
$quantity = (int)($_POST['quantity'] ?? 1);
$notes = trim($_POST['notes'] ?? '');

if ($customer_name === '' || $phone === '' || $item === '') {
    die('Please fill required fields.');
}

// basic prepared statement
$stmt = $conn->prepare("INSERT INTO orders (customer_name, phone, item, quantity, notes, created_at) VALUES (?,?,?,?,?,NOW())");
$stmt->bind_param('sssis', $customer_name, $phone, $item, $quantity, $notes);
if ($stmt->execute()) {
    $stmt->close();
    header('Location: view_orders.php?msg=created');
    exit;
} else {
    echo 'Error: ' . htmlspecialchars($conn->error);
}
