<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Formulari Dades</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<?php
if ($_SERVER['REQUEST_METHOD']==='POST') {
    try{
     if (empty($_POST['nom'])) throw new Exception("Nom es requerit");
     if (empty($_POST['cognoms'])) throw new Exception("Cognoms es requerit");
     if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) throw new Exception("Email no vàlid");
     if (!isset($_POST['sexe'])) throw new Exception("Sexe no vàlid");
     if (!isset($_POST['aficions'])) throw new Exception("Marca al meyns una aficcio");
    if (!isset($_POST['menus'])) throw new Exception("Marca al meyns un menu");
?>
    <strong>Nom</strong> : <?= $_POST['nom'] ?><br/>
    <strong>Cognoms</strong> : <?= $_POST['cognoms'] ?><br/>
    <strong>Email</strong> : <?= $_POST['email'] ?><br/>
    <strong>Url</strong> : <?= $_POST['url'] ?><br/>
    <strong>Sexe</strong> : <?= $_POST['sexe'] ?><br/>
    <strong>Aficions</strong> : <?php
            foreach($_POST['aficions'] as $aficion) {
                echo $aficion.', ';
            }
        ?><br/>
    <strong>Menus</strong> : <?php
            foreach($_POST['menus'] as $menu) {
                echo $menu.', ';
            }
        ?><br/>
<?php
    } catch(\Exception $e){
        echo $e->getMessage();
    }
} else {
?>
    Este metode no està permés en esta pàgina
<?php
}
?>
</body>
</html>