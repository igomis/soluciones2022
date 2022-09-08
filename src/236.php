<!DOCTYPE html>
<html lang="en">
    <?php
        $persones = [['nom'=>'Joan','altura'=>176,'email'=>'joan@gmail.com'],['nom'=>'Ignasi','altura' =>178,'email'=>'ignasi@gmail.com'],['nom'=>'Pep','altura' =>178,'email'=>'pepe@gmail.com'],['nom'=>'Conchi','altura' =>158,'email'=>'conchi@gmail.com'],['nom'=>'Joan','altura' =>153,'email'=>'joana@gmail.com']];
    ?>
<head>
    <meta charset="UTF-8">
    <title>Dades persones</title>
</head>
<body>
    <table>
        <thead> <tr> <th>Nom</th> <th>Alçada</th> <th>Email</th> </tr> </thead>
        <tbody>
            <?php foreach ($persones as $persona) { ?>
                  <tr><td><?=$persona['nom']?></td><td><?=$persona['altura']?></td><td><?=$persona['email']?></td></tr>
            <?php  } ?>
        </tbody>
    </table>

</body>
</html>
