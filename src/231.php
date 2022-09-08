<!DOCTYPE html>
<html lang="en">
<?php
    extract($_POST);
?>
<head>
    <meta charset="UTF-8">
    <title>Mostar resposta a la pregunta</title>
</head>
<body>
<?php
    $respostes = [
        '1' => 'Sí',
        '2' => 'No',
        '3' => 'Tal vegada',
        '4' => 'Molt probablement',
        '5' => 'Molt improbablement',
    ];
    $resposta = $respostes[rand(1,count($respostes))];
    if (isset($pregunta)){ ?>
        <p>La resposta a '<?=$pregunta?>' és: <?= $resposta ?></p>
    <?php } else { ?>
        <p>No has escrit cap pregunta</p>
    <?php } ?>
</body>
</html>