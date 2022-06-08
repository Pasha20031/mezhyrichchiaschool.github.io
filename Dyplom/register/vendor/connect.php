<?php

    $connect = mysqli_connect('localhost', 'root', 'root', 'singup');

    if (!$connect) {
        die('Error connect to DataBase');
    }