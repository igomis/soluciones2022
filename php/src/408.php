<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $_SESSION['color'] = $_POST['color'];
    $color = $_POST['color'];
} else {
    if ($_GET['buidar'] == 'sessio'){
       unset($_SESSION['color']);
    }
    if (isset($_SESSION['color'])){
        $color = $_SESSION['color'];
    } else {
        $color = "#FFF";
    }
}

?>
<html>
<body bgcolor="<?= $color ?>"></body>
</html>
<form method="post" action="408.php">
    <input name="color" type="color" value="<?= $color ?>"/>
    <input type="submit" name='submit' value="seleccionar">
</form><br/>
<a href="408.php?buidar=sessio">Enllaç</a>
