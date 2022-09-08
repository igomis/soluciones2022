<!DOCTYPE html>
<html lang="en">
<?php
    extract($_POST);
?>
<head>
    <meta charset="UTF-8">
    <title>Mostar taula amb files i columnes</title>
</head>
<body>
<?php
    if (is_numeric($files) && is_numeric($columnes)){ ?>
        <table>
            <thead>
                <tr>
                    <?php for ($i=1; $i<=$columnes; $i++){ ?>
                        <th><?= $i ?></th>
                    <?php } ?>
                </tr>
            </thead>
            <tbody>
                <?php
                for ($i=1; $i<=$files; $i++){
                    ?>
                    <tr>
                        <?php for ($j=1; $j<=$columnes; $j++){ ?>
                            <td><?= ($j===1 || $i===1)?chr(64+$i).$j:'' ?></td>
                        <?php } ?>
                    </tr>
                    <?php
                }
                ?>
            </tbody>
        </table>

    <?php } else {
        echo 'Introdueix valors numèrics'; }
    ?>
</body>
</html>