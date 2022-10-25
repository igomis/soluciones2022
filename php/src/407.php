<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    setcookie('color', $_POST['color']); // le asignamos un valor
}
if (isset($_COOKIE['color'])){
    $color = $_COOKIE['color'];
}

?>
<html>
<body bgcolor="<?= $color??'#000' ?>"></body>
</html>
<form method="post" action="407.php">
    <input type="color" value="#ff0000"/>
    <input type="submit" name='submit' value="seleccionar">
</form>
