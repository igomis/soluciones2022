<!DOCTYPE html>
<html lang="en">
    <?php
        extract($_GET);
        $bitllets = [500,200,100,50,20,10,5,2,1];
    ?>
<head>
    <meta charset="UTF-8">
    <title>Descomposició en bitllets</title>
</head>
<body>
    <?php
        if (isset($quantitat)){
            foreach ($bitllets as $bitllet){
                $quants = intdiv($quantitat ,$bitllet);
                $quantitat -= $bitllet*$quants;
                $format = ($bitllet<5)?'moneda':'bitllet';
                $format .= ($quants > 1)?'s':'';
                echo ($quants)?"$quants $format de $bitllet<br/>":'';
            }
        } else {
    ?>
        Posa la quantitat a la variable quantitat pel QueryString
    <?php
        }
    ?>
</body>
</html>
