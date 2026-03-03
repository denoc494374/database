<?php
require 'config.php';


if (isset($_POST['add'])) {
    $name    = $_POST['name'] ?? '';
    $email   = $_POST['email'] ?? '';
    $product = $_POST['product'] ?? '';
    $amount  = $_POST['amount'] ?? '';

    $sql  = "INSERT INTO users (name, email, product, amount) VALUES (?, ?, ?, ?)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$name, $email, $product, $amount]);


    header('Location: landing.php');
    exit;
} 