<!DOCTYPE html>
<html lang="en">
    <?php
        $persones = ['Joan'=>176,'Ignasi'=>178,'Pep'=>180,'Conchi'=>'163','Joana'=>'155'];
    ?>
<head>
    <meta charset="UTF-8">
    <title>Alçades persones</title>
</head>
<body>
    <table>
        <thead> <tr> <th>Nom</th> <th>Alçada</th> </tr> </thead>
        <tbody>
            <?php foreach ($persones as $nom => $alçada) { ?>
                <tr><td><?=$nom?></td><td><?=$alçada?></td></tr>
            <?php } ?>
            <tr><td>Alçada Mitjana</td><td><?= array_sum($persones)/count($persones) ?></td> </tr>
        </tbody>
    </table>

</body>
</html>
