<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Array números aleatòris</title>
</head>
<body>
    <ul>
        <?php
            for ($i=0; $i<50; $i++){
                $numeros[$i] = rand(0,100);
            }
            foreach ($numeros as $numero){
                echo "<li>$numero</li>";
            }
        ?>
    </ul>
</body>
</html>