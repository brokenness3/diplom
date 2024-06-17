<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Главная страница</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <header>
        <h1>Добро пожаловать в наш магазин</h1>
    </header>
    
    <main>
        <h2>Добро пожаловать!</h2>
        <?php if (isset($_SESSION['user_id'])): ?>
            <p>Вы вошли в систему. <a href="php/logout.php">Выйти</a></p>
        <?php else: ?>
            <p><a href="register.html">Регистрация</a> | <a href="login.html">Авторизация</a></p>
        <?php endif; ?>
    </main>
</body>
</html>
