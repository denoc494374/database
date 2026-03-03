<?php
require 'config.php';

if (isset($_GET['delete'])) {
    $users_id = $_GET['delete'];
    $sql = "DELETE FROM users WHERE users_id = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$users_id]);

    header('Location: landing.php');
    exit;
}
