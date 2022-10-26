<?php
    session_start();
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        extract($_POST);
        if (($username === 'usuari') && ($password == 'usuari')) {
            $_SESSION['username'] = $username;
            $_SESSION['pelicules'] = ["Allò que el vent s'enduguè","Terminator 2","Matrix"];
            $_SESSION['series'] = ["The good wife","Breaking Bad","Walking Dead"];
            header('Location:412.php');
        } else {
            header('Location:410.html');
        }
    } else {
        header('Location:410.html');
    }
