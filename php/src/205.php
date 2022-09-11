<!DOCTYPE html>
<html lang="en">
<?php extract($_POST) ?>
<head>
    <meta charset="UTF-8">
    <title>Sentencia</title>
</head>
<body>
    T'agrada <?= strtolower($verb) ?> el teu <?= strtolower($nom) ?> <?= strtolower($adjetiu) ?> <?= strtolower($adverbi) ?> ?
</body>
</html>