<!DOCTYPE html>
<html lang="es">
<?php
    // Tres maneres diverses de mostrar codi per pantalla utilitzan php
    /*

        Tot dins d'un pàgina
            HTML
    */
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Echo y print</title>
</head>
<body>
<?php echo "<p>Este texte es mostra amb echo i codi php embegut.</p>" ?>
<p><?= "Este texte es mostra directament." ?></p>
<p><?php print("Este texte es mostra amb la funció print.") ?></p>
</body>
</html>