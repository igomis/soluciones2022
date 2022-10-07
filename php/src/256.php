<!DOCTYPE html>
<html lang="en">
<?php
    include_once('functions.php');
?>
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
<p>
<?php if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $parells = parells(explode(' ',$_POST['numeros']));
    echo "Els ".count($parells)." numeros parells són ";
    foreach ($parells as $parell){
        echo $parell." ";
    }
}
?>
</p>
</body>
</html>