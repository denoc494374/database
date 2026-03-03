<?php

require 'config.php';

if (isset($_GET['delete'])) {
    $users_id = $_GET['delete'];

    $pdo->beginTransaction();
    try {
        $stmt = $pdo->prepare('DELETE FROM orders WHERE users_id = ?');
        $stmt->execute([$users_id]);

        $stmt = $pdo->prepare('DELETE FROM users WHERE users_id = ?');
        $stmt->execute([$users_id]);

        $pdo->commit();
    } catch (Exception $e) {
        $pdo->rollBack();

    }
}
?>