<?php
require 'config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = trim($_POST['username']);
    $password = password_hash(trim($_POST['password']), PASSWORD_DEFAULT);
    $email = trim($_POST['email']);

    $stmt = $pdo->prepare('INSERT INTO users (username, password, email) VALUES (?, ?, ?)');
    if ($stmt->execute([$username, $password, $email])) {
        echo 'Регистрация прошла успешно!';
    } else {
        echo 'Ошибка регистрации.';
    }
}
?>
