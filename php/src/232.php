<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Array números aleatòris</title>
</head>
<body>
    <?php
        for ($i=0; $i<33; $i++){
            $numeros[$i] = rand(0,100);
        }

    ?>
    <p>El màxim és: <?= max($numeros) ?></p>
    <p>El mínim és: <?= min($numeros) ?></p>
    <p>La mitjana és: <?= array_sum($numeros)/count($numeros) ?></p>
</body>
</html>