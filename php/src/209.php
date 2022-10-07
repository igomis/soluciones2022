<!DOCTYPE html>
<html lang="en">
    <?php
        extract($_GET);
    ?>
<head>
    <meta charset="UTF-8">
    <title>Nombre</title>
</head>
<body>
    <?php

        if (isset($numero1,$numero2,$numero3)){
            echo "El nombre més gran entre $numero1, $numero2 i $numero3 és el ";
            if ($numero2 > $numero3){
                if ($numero1 > $numero2){
                    echo $numero1;
                }
                else {
                    echo $numero2;
                }
            } else {
                if ($numero1 > $numero3){
                    echo $numero1;
                }
                else {
                    echo $numero3;
                }
            }
        } else {
    ?>
        Posa els números a comprobar a les variables numero1,numero2 i numero3 pel QueryString
    <?php
        }
    ?>
</body>
</html>
