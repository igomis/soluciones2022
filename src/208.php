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
        if (isset($numero)){
            echo "El número $numero és ";
            echo ($numero>0)?'positiu':($numero < 0?'negatiu':'zero');
        } else {
    ?>
        Posa el numero a comprobar a la variable numero del QueryString
    <?php
        }
    ?>
</body>
</html>
