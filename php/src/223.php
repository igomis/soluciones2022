<!DOCTYPE html>
<html lang="en">
<?php
extract($_GET);
?>
<head>
    <meta charset="UTF-8">
    <title>Potencia</title>
</head>
<body>
<?php
if (isset($nombre)){
    ?>
    <table>
        <thead>
            <tr>
                <th>a</th>
                <th>*</th>
                <th>b</th>
                <th>=</th>
                <th>a*b</th>
            </tr>
        </thead>
        <tbody>
            <?php
            for ($i=1; $i<=10; $i++){
                ?>
                <tr>
                    <td><?= $nombre ?></td>
                    <td>*</td>
                    <td><?= $i ?></td>
                    <td>=</td>
                    <td><?= $i*$nombre ?></td>
                </tr>
                <?php
            }
            ?>
        </tbody>
    </table>
<?php
} else {
    ?>
    Posa el nombre pel QueryString:<br>
    <?php
}
?>
</body>
</html>

