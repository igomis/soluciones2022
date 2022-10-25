<?php
$accesosPagina = 0;
if (isset($_COOKIE['accesos'])) {
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        header("Location: 406.php");
        setcookie('accesos', 0);
    } else {
        $accesosPagina = $_COOKIE['accesos']; // recuperamos una cookie
        setcookie('accesos', ++$accesosPagina); // le asignamos un valor
    }
} else {
    setcookie('accesos', ++$accesosPagina); // le asignamos un valor
}
?>
<form method="post" action="406.php">
    <input type="button" value="<?= $accesosPagina?>"/>
    <input type="submit" name='submit' value="reiniciar">
</form>
