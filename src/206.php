<!DOCTYPE html>
<html lang="en">
    <?php
        extract($_GET);
        $any_actual = date("Y");
    ?>
<head>
    <meta charset="UTF-8">
    <title>Sentencia</title>
</head>
<body>
    <?php
        if (isset($edat)){
    ?>
        La teu edat a l'any <?= $any_actual - 10 ?> era de <?= $edat - 10 ?><br/>
        La teu edat a l'any <?= $any_actual + 10 ?> serà de <?= $edat + 10 ?><br/>
        La teua jubil·lació serà l'any <?= $any_actual + 67 - $edat ?><br/>
    <?php
        } else {
    ?>
        Posa la teu edat actual a la variable edat pel QueryString
    <?php
        }
    ?>
</body>
</html>
