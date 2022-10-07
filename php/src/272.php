<?php
    include_once('records.php');
    include_once('functions.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Estadistiques</title>
</head>
<body>
<p>Record més antic: <?= vell(array_column_ext($records,'data',-1)) ?></p>
<p>Persona amb més records: <?= laureado(array_column_ext($records,'atleta',-1)) ?></p>
<p>Club amb més títols: <?= laureado(array_column_ext($records,'club',-1)) ?></p>
<p>Ciutat més propicia: <?= laureado(array_column_ext($records,'lloc',-1)) ?></p>
<?php $jove = jove(array_column_ext($records,'natalici',-1),array_column_ext($records,'data',-1)); ?>
<p>Mes jove en aconsegir el record: <?= $records[$jove[0]]['atleta'] ?> - <?= $jove[1] ?> anys</p>
<?php
include_once ("270a.php");
?>
</body>
</html>
