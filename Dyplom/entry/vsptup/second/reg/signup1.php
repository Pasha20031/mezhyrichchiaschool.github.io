<?php
 
    session_start();
    require_once 'connect.php';

    $father_name = $_POST['father_name'];
    $father_surname = $_POST['father_surname'];
    $father_lastname = $_POST['father_lastname'];
    $phone_father = $_POST['phone_father'];
    $mail_father = $_POST['mail_father'];
    $work_father = $_POST['work_father'];
    $mather_name = $_POST['mather_name'];
    $mather_surname = $_POST['mather_surname'];
    $mather_lastname = $_POST['mather_lastname'];
    $phone_mather = $_POST['phone_mather'];
    $mail_mather = $_POST['mail_mather'];
    $work_mather = $_POST['work_mather'];
    $obraly = $_POST['obraly'];
    $ochikuvannya = $_POST['ochikuvannya'];
    $pislya_zakinchennya = $_POST['pislya_zakinchennya'];
    $rol_u_navchanni = $_POST['rol_u_navchanni'];
    $name_child = $_POST['name_child'];
    $surname_child = $_POST['surname_child'];
    $lastname_child = $_POST['lastname_child'];
    $year_study = $_POST['year_study'];
    $class_study = $_POST['class_study'];
    $predmety = $_POST['predmety'];
    $gurtky = $_POST['gurtky'];
    $medicine = $_POST['medicine'];
    

    mysqli_query($connect, "INSERT INTO `sing` (`id`, `father_name`, `father_surname`, `father_lastname`, `phone_father`, `mail_father`, `work_father`, `mather_name`, `mather_surname`, `mather_lastname`, `phone_mather`, `mail_mather`, `work_mather`,`obraly` ,`ochikuvannya` ,`pislya_zakinchennya` ,`rol_u_navchanni` ,`name_child`,`surname_child`,`lastname_child`,`year_study`,`class_study`,`predmety`,`gurtky`,`medicine`)
     VALUES (NULL, '$father_name', '$father_surname', '$father_lastname', '$phone_father', '$mail_father', '$work_father', '$mather_name', '$mather_surname', '$mather_lastname', '$phone_mather', '$mail_mather', '$work_mather', '$obraly' , '$ochikuvannya' , '$pislya_zakinchennya' , '$rol_u_navchanni' , '$name_child', '$surname_child' , '$lastname_child' ,'$year_study','$class_study','$predmety','$gurtky','$medicine')");

?>
