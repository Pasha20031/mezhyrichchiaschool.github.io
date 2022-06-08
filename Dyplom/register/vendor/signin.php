<?php

    session_start();
    require_once 'connect.php';

    $username = $_POST['username'];
    $password = ($_POST['password']);

    $check_user = mysqli_query($connect, "SELECT * FROM `sing` WHERE `username` = '$username' AND `password` = '$password'");
    if (mysqli_num_rows($check_user) > 0) {

        $user = mysqli_fetch_assoc($check_user);
        header('Location: ../site/index1.php');

    } else {
        $_SESSION['message'] = 'Не вірний пароль або логін';
        header('Location: ../index.php');
    }
    ?>

<pre>
    <?php
    print_r($check_user);
    print_r($user);
    ?>
</pre>
