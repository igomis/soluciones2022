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
<ul>
<?php
    for ($i=2; $i<52; $i=$i+2){
        printf('<li>%d</li>',$i);
    }
?>
</ul>
</body>
</html>