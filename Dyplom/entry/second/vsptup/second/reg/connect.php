<?php

    $connect = mysqli_connect('localhost', 'root', 'root', 'zayava');

    if (!$connect) {
        die('Error connect to DataBase');
    }