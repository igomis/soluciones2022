<!DOCTYPE html>
<html lang="en">
    <?php
        extract($_GET);
    ?>
<head>
    <meta charset="UTF-8">
    <title>Rellotge</title>
</head>
<body>
    <?php
        if (isset($hora) && isset($minut) && isset($segon)){
            $segon++;
            if ($segon >= 60 ){
                $segon = $segon -60;
                $minut++;
                if ($minut >= 60){
                    $minut = $minut -60;
                    $hora++;
                    if ($hora >= 24 ){
                        $hora = $hora - 24;
                    }
                }
            }
            printf("%d:%d:%d",$hora,$minut,$segon);
        } else {
    ?>
        Posa les variables hora, minut i segon pel QueryString
    <?php
        }
    ?>
</body>
</html>
