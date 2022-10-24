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
        extract($_POST);
    } finally {
?>
    <form method="post" action="404.php">
        <div class="form-group row">
            <label for="nom" class="col-4 col-form-label">Nom</label>
            <div class="col-8">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="fa fa-address-book"></i>
                        </div>
                    </div>
                    <input id="nom" name="nom" placeholder="Escriu el teu nom" type="text" value="<?= $nom??''?>" class="form-control">
                </div>
            </div>
        </div>
        <div class="form-group row">
            <label for="cognoms" class="col-4 col-form-label">Cognoms</label>
            <div class="col-8">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="fa fa-address-card-o"></i>
                        </div>
                    </div>
                    <input id="cognoms" name="cognoms" placeholder="Escriu els teus cognoms" value="<?= $cognoms??''?>" type="text" class="form-control">
                </div>
            </div>
        </div>
        <div class="form-group row">
            <label for="email" class="col-4 col-form-label">Email</label>
            <div class="col-8">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="fa fa-envelope-open-o"></i>
                        </div>
                    </div>
                    <input id="email" name="email" placeholder="Escriu el teu email" value="<?= $email??''?>" type="text" class="form-control">
                </div>
            </div>
        </div>
        <div class="form-group row">
            <label for="url" class="col-4 col-form-label">Url Personal</label>
            <div class="col-8">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="fa fa-envelope-open-o"></i>
                        </div>
                    </div>
                    <input id="url" name="url" placeholder="Escriu la teua url" value="<?= $url??''?>"type="text" class="form-control">
                </div>
            </div>
        </div>
        <div class="form-group row">
            <label for="url" class="col-4 col-form-label">Sexe</label>
            <div class="col-8">
                <div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="sexe" value="Home" <?=isset($sexe)&&$sexe=='Home'?'checked':'' ?> id="sexe1">
                        <label class="form-check-label" for="sexe1">
                            Home
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="sexe" value="Dona" <?=isset($sexe)&&$sexe=='Dona'?'checked':'' ?> id="sexe2">
                        <label class="form-check-label" for="sexe2">
                            Dona
                        </label>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group row">
            <label for="url" class="col-4 col-form-label">Aficions</label>
            <div class="col-8">
                <select class="form-select" name="aficions[]" multiple="true">
                    <option value="correr" <?= isset($aficions)&&in_array('correr',$aficions)?'selected':'' ?>>Correr</option>
                    <option value="mtb" <?= isset($aficions)&&in_array('mtb',$aficions)?'selected':'' ?>>MTB</option>
                    <option value="triatlon" <?= isset($aficions)&&in_array('triatlon',$aficions)?'selected':'' ?>>Triatlon</option>
                    <option value="sillonball" <?= isset($aficions)&&in_array('sillonball',$aficions)?'selected':'' ?>>Sofa</option>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="url" class="col-4 col-form-label">Menu</label>
            <div class="col-8">
                <div class="input-group">
                    <div class="form-check">
                        <input type="checkbox" name="menus[]" value="bajoques" <?=isset($menus)&&in_array('bajoques',$menus)?'checked':'' ?> id="menu1">
                        <label class="form-check-label" for="menu1">
                            Bajoques Farcides
                        </label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" name="menus[]" value="olleta"  <?=isset($menus)&&in_array('olleta',$menus)?'checked':'' ?> id="menu2">
                        <label class="form-check-label" for="menu2">
                            Olleta Alcoiana
                        </label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" name="menus[]" value="pericana"  <?=isset($menus)&&in_array('pericana',$menus)?'checked':'' ?> id="menu3">
                        <label class="form-check-label" for="menu3">
                            Pericana
                        </label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" name="menus[]" value="bollit"  <?=isset($menus)&&in_array('bollit',$menus)?'checked':'' ?> id="menu4">
                        <label class="form-check-label" for="menu4">
                            Bollit
                        </label>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group row">
            <div class="offset-4 col-8">
                <button name="submit" type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
    <p class="error"><?= isset($e)?$e->getMessage():'' ?></p>
<?php
}
?>
</body>
</html>