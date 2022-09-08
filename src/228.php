<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Mostar taula de multiplicar</title>
</head>
<body>
        <table>
            <thead>
                <tr> <th>x</th>
                    <?php for ($i=1; $i<=10; $i++){ ?>
                        <th><?= $i ?></th>
                    <?php } ?>
                </tr>
            </thead>
            <tbody>
                <?php
                for ($i=1; $i<=10; $i++){
                    ?>
                    <tr> <th><?= $i ?></th>
                        <?php for ($j=1; $j<=10; $j++){ ?>
                            <td><?= $i*$j ?></td>
                        <?php } ?>
                    </tr>
                    <?php
                }
                ?>
            </tbody>
        </table>
</body>
</html>