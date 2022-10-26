<?php
    session_start();
    if (!isset($_SESSION['username'])){
        header("Location:410.html");
    }
?>
<html>
    <head>
        <title>Llista de sèries</title>
    </head>
    <body>
        <h2>Llista de sèries</h2>
        <ul>
            <?php foreach ($_SESSION['series'] as $serie) { ?>
                <li><?= $serie ?></li>
           <?php } ?>
        </ul>
        <?php include_once('menu.html'); ?>
    </body>
</html>
