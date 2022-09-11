<!DOCTYPE html>
<html lang="es">
<?php
    // Inicialització de variables
    $x = 166;
    $y = 199;
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Càlculs</title>
</head>
<body>
<p>
    El resultat de les operacions és:<br/>
    <?php
        // Calculs utilitzan printf per a formatar l'eixida
        printf('Suma: %d + %d = %d<br/>',$x,$y,$x+$y);
        printf('Resta: %d - %d = %d<br/>',$x,$y,$x-$y);
        printf('Multiplicació: %d x %d = %d<br/>',$x,$y,$x*$y);
        printf('Dicisió: %d / %d = %f<br/>',$x,$y,$x/$y);
    ?>
</p>
</body>
</html>
