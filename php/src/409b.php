<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
   try{
        if (!isset($_POST['aficions'])) {throw new Exception("Marca al meyns una aficcio");}
        if (!isset($_POST['menus'])) {throw new Exception("Marca al meyns un menu");}
        extract($_SESSION);
        extract($_POST);
    ?>
       <strong>Nom</strong> : <?= $nom ?><br/>
       <strong>Cognoms</strong> : <?= $cognoms ?><br/>
       <strong>Email</strong> : <?= $email ?><br/>
       <strong>Url</strong> : <?= $url ?><br/>
       <strong>Sexe</strong> : <?= $sexe ?><br/>
       <strong>Aficions</strong> : <?php
       foreach($aficions as $aficion) {
           echo $aficion.', ';
       }
       ?><br/>
       <strong>Menus</strong> : <?php
       foreach($menus as $menu) {
           echo $menu.', ';
       }
       ?><br/>
<?php
        } catch (Exception $e){
            echo $e->getMessage();
            echo ('<br/><a href="409.html">Volver</a>');
        }
    }
?>
