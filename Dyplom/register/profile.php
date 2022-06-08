<?php
session_start();
if (!$_SESSION['sing']) {
    header('Location: /');
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Авторизация и регистрация</title>
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>

    <!-- Профиль -->

    <form>
        <a href="#"><?= $_SESSION['sing']['username'] ?></a>
        <a href="vendor/logout.php" class="logout">Выход</a>
    </form>

</body>
</html>