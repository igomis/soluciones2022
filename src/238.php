<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Matriu aleatoris</title>
</head>
<body>
    <?php
        $matriu = [];
        $maxim = 0;
        $minim = 999;
        $columna = 0;
        $fila = 0;
        for ($i=0; $i<6; $i++){
            for ($j=0; $j<9; $j++){
                do {
                    $aleatori = rand(100,999);
                } while (in_array($aleatori,$matriu));
                $matriu[$i][$j] = $aleatori;
                if ($aleatori > $maxim){
                    $maxim = $aleatori;
                    $columna = $j;
                }
                if ($aleatori < $minim){
                    $minim = $aleatori;
                    $fila = $i;
                }
            }
        }
        echo "<table><tbody>";
        foreach ($matriu as $fil => $vector){
            if ($fila == $fil){
                echo "<tr style='background-color: blue'>";
            } else {
                echo "<tr>";
            }
            foreach ($vector as $col => $valor){
               if ($columna == $col){
                    echo "<td style='background-color: green'>$valor</td>";
                } else {
                   echo "<td>$valor</td>";
               }
            }
            echo "</tr>";
        }

    ?>
</body>
</html>