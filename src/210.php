<!DOCTYPE html>
<html lang="en">
    <?php
        extract($_GET);
    ?>
<head>
    <meta charset="UTF-8">
    <title>Edat</title>
</head>
<body>
    <?php

        if (isset($edat)){
            echo "Ets un ";
            switch (true){
                case ($edat < 3):
                    echo 'bebe';break;
                case ($edat < 13):
                    echo 'xiquet';break;
                case ($edat < 18):
                    echo 'adolescent';break;
                case ($edat < 67):
                    echo 'adult';break;
                default:
                    echo 'jubilat';
            };
            echo "<br>Ets un ".match(true){
                $edat < 3 => 'bebe',
                $edat < 13 => 'xiquet',
                $edat < 18 => 'adolescent',
                $edat < 67 => 'adult',
                default => 'jubilat',
            };
        } else {
    ?>
        Posa la teu edat actual a la variable edat pel QueryString
    <?php
        }
    ?>
</body>
</html>
