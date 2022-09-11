<!DOCTYPE html>
<html lang="en">
    <?php
        extract($_GET);
        $bitllets = [500,200,100,50,20,10,5,2,1];
        $descomposio = [];
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
                $descomposio[$bitllet] = $quants;
            }
            echo "<ul>";
            foreach ($descomposio as $bitllet => $quants){
                if ($quants > 0){
                    $format = ($bitllet<5)?'moneda':'bitllet';
                    $format .= ($quants > 1)?'s':'';
                    echo "<li>$quants $format de $bitllet</li>";
                }
            }
            echo "</ul>";
        } else {
    ?>
        Posa la quantitat a la variable quantitat pel QueryString
    <?php
        }
    ?>
</body>
</html>
