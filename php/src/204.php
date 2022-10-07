    <!DOCTYPE html>
<html lang="en">
<?php
    extract($_POST);
?>
<head>
    <meta charset="UTF-8">
    <title>Vore dades formulari</title>
</head>
<body>
<table>
    <tr>
        <td>nom</td>
        <td><?=$nom?></td>
    </tr>
    <tr>
        <td>cognoms</td>
        <td><?= $cognom1.' '.$cognom2 ?></td>
    </tr>
    <tr>
        <td>email</td>
        <td><?= $email ?></td>
    </tr>
    <tr>
        <td>any de naixement</td>
        <td><?= $any ?></td>
    </tr>
    <tr>
        <td>telèfon</td>
        <td><?= $telefon ?></td>
    </tr>
</table>
</body>
</html>