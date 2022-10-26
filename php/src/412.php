<?php
    session_start();
    if (!isset($_SESSION['username'])){
        header("Location:410.html");
    }
?>
<html>
    <head>
        <title>Llista de pel·licules</title>
    </head>
    <body>
        <h2>Llista de pel·licules</h2>
        <ul>
            <?php foreach ($_SESSION['pelicules'] as $pelicula) { ?>
                <li><?= $pelicula ?></li>
           <?php } ?>
        </ul>
        <?php include_once('menu.html'); ?>
    </body>
</html>
