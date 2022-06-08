<?php
session_start();

if ($_SESSION['sing']) {
    header('Location: profile.php');
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Авторизация и регистрация</title>
    <link rel="stylesheet" href="assets/css/Sin/singin.css">
</head>
<body>

<!-- Форма авторизации -->

    <form action="vendor/signin.php" method="post">
    <div class="fot__">
     <img class="fotos" src="assets/images/img_avatar2.png">
 </div>   
<input type="text" name="username" placeholder="Ім'я">
<input type="password" name="password" placeholder="Пароль">
<button class="button_" name="submit"><b>Залогуватись</b></button>
<a class="text">Потрібно зареєструватись?</a>
<div class="knopka">
    <a href="register.php" class="knop_1">Створити обліковий запис</a>
</div>
        <?php
            if ($_SESSION['message']) {
                echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
            }
            unset($_SESSION['message']);
        ?>
    </form>
</body>
</html>