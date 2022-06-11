<!DOCTYPE html>
<html lang="es">
<?php
// Inicialització de variables
    $nom = 'Ignasi';
    $cognom1 = 'Gomis';
    $cognom2 = 'Mullor';
    $email = 'igomis@cipfpbatoi.es';
    $any = '1968';
    $telefon = '123443219';
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dades Personals</title>
</head>
<body>
    <table>
        <tr>
            <td>Nom</td>
            <td><?=$nom?></td>
        </tr>
        <tr>
            <td>Cognoms</td>
            <td><?= $cognom1.' '.$cognom2 ?></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><?= $email ?></td>
        </tr>
        <tr>
            <td>Natalici</td>
            <td><?= $any ?></td>
        </tr>
        <tr>
            <td>Telèfon</td>
            <td><?= $telefon ?></td>
        </tr>
    </table>
</body>
</html>
