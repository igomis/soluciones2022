<!DOCTYPE html>
<html lang="en">
<?php
extract($_GET);
?>
<head>
    <meta charset="UTF-8">
    <title>Arrel cuadrada</title>
</head>
<body>
<?php
if (isset($a) && isset($b) && isset($c)){
    $raiz = ($b*$b) - (4*$a*$c) ;
    $divisor = 2* $a;
    echo match (true){
        $divisor == 0 || $raiz < 0 => 'Sense solució',
        $raiz == 0 => 'La solució es: '.(-$b) / $divisor,
        default => 'Les solucions son: ' .((-$b + sqrt($raiz)) / $divisor) .' i '.((-$b - sqrt($raiz)) / $divisor)
    };
} else {
    ?>
    Posa les variables a, b i c pel QueryString
    <?php
}
?>
</body>
</html>

