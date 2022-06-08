<?php
session_start();
unset($_SESSION['sing']);
header('Location: ../index.php');