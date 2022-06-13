<!DOCTYPE html>
<html lang="en">
<?php
extract($_GET);
?>
<head>
    <meta charset="UTF-8">
    <title>Potencia</title>
</head>
<body>
<?php
if (isset($base) && isset($exponent)){
    $potencia = 1;
    for ($i=0;$i<$exponent;$i++){
        $potencia *= $base;
    }
    echo $base.'^'.$exponent.' = '. $potencia;
} else {
    ?>
    Posa la base i l'exponent a les variables base i exponent pel QueryString
    <?php
}
?>
</body>
</html>

