<!DOCTYPE html>
<html lang="en">
<?php
    $usuaris = include_once('246passwords.php');
?>
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
<?php if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $finded = array_key_exists($_POST['usuari'], $usuaris);
            if ($finded !== false) {
                if ($usuaris[$_POST['usuari']] == $_POST['password']) {
                    exit('Benvingut '.$_POST['usuari']);
                } else {
                    echo 'Password incorrecte';
                }
            } else {
                echo 'Usuari no existent';
            }
        }
?>
</body>
</html>