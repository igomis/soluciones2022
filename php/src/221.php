<!DOCTYPE html>
<html lang="es">
<?php
    // Tres maneres diverses de mostrar codi per pantalla utilitzan php
    /*
        Tot dins d'un pàgina
            HTML
    */
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Echo y print</title>
</head>
<body>
<?php
    $suma = 0;
    for ($i=1; $i<11; $i++){
        $suma += $i;
        echo $i;
        echo ($i==10)?'=':'+';
    }
    echo $suma;
?>
</body>
</html>