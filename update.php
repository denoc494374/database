<?php
require 'config.php';


if (isset($_POST['update'])) {
    $users_id = $_POST['users_id'] ?? null;
    $name     = $_POST['name'] ?? '';
    $email    = $_POST['email'] ?? '';
    $product  = $_POST['product'] ?? '';
    $amount   = $_POST['amount'] ?? '';

    if ($users_id) {
        $sql = "UPDATE users SET name = ?, email = ?, product = ?, amount = ? WHERE users_id = ?";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$name, $email, $product, $amount, $users_id]);
    }

    header('Location: landing.php');
    exit;
}