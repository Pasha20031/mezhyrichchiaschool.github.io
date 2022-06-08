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
    <link rel="stylesheet" href="assets/css/Sin/signup.css">
</head>
<body>

    <!-- Форма регистрации -->

    <form action="vendor/signup.php" method="post" enctype="multipart/form-data">
    <div class="fot__">
     <img class="fotos" src="assets/images/img_avatar2.png">
 </div>   
<input type="text" name="username" placeholder="Ім'я">
<input type="password" name="password" placeholder="Пароль">
<input type="password" name="password_confirm" placeholder="Підтвердіть пароль">
<button class="button_" name="submit"><b>Створити обліковий запис</b></button>
<a class="text">Маєте обліковий запис?</a>
<div class="knopka">
    <a href="index.php" class="knop_1">Залогуватись</a>
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