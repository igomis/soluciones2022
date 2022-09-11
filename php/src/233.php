<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Array sexes</title>
</head>
<body>
    <?php
        for ($i=0; $i<100; $i++){
            $numeros[$i] = rand(0,1)?'M':'F';
        }
        $agregats = array_count_values($numeros);
        foreach ($agregats as $sexe => $numero){
            echo "<p>$sexe: $numero</p>";
        }
    ?>
</body>
</html>