<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    setcookie('color', $_POST['color'],time()+(3600*24));
    $color = $_POST['color'];
} else {
    if (isset($_COOKIE['color'])){
        $color = $_COOKIE['color'];
    } else {
        $color = "#FFF";
    }
}

?>
<html>
<body bgcolor="<?= $color ?>"></body>
</html>
<form method="post" action="407.php">
    <input name="color" type="color" value="<?= $color ?>"/>
    <input type="submit" name='submit' value="seleccionar">
</form>
