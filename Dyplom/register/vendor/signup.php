<?php

    session_start();
    require_once 'connect.php';

    $username = $_POST['username'];
    $password = $_POST['password'];
    $password_confirm = $_POST['password_confirm'];

    if ($password === $password_confirm) {

        mysqli_query($connect, "INSERT INTO `sing` (`id`, `username`, `password`) VALUES (NULL, '$username', '$password')");

        $_SESSION['message'] = 'Реєстрація пройшла успішно!';
        header('Location: ../index.php');


    } else {
        $_SESSION['message'] = 'Паролі не співпадають';
        header('Location: ../register.php');
    }

?>
