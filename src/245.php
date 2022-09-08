<!DOCTYPE html>
<html lang="en">
<?php
    $usuaris = include_once('245passwords.php');
?>
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
<?php if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $finded = array_key_exists($_POST['usuari'], $usuaris);
            if ($finded !== false) {
                if ($usuaris[$_POST['usuari']] == $_POST['password']) {
                    exit('Benvingut '.$_POST['usuari']);
                } else {
                    echo 'Password incorrecte';
                }
            } else {
                echo 'Usuari no existent';
            }
        }
?>
<form method="post" action="245.php">
    <div class="form-group row">
        <label for="usuari" class="col-4 col-form-label">Nom usuari</label>
        <div class="col-8">
            <div class="input-group">
                <input id="usuari" name="usuari" placeholder="Usuari" type="text" required="required" class="form-control">
            </div>
        </div>
    </div>
    <div class="form-group row">
        <label for="password" class="col-4 col-form-label">Password</label>
        <div class="col-8">
            <div class="input-group">
                <input id="password" name="password" placeholder="Password" type="password" required="required" class="form-control">
            </div>
        </div>
    </div>
    <div class="form-group row">
        <div class="offset-4 col-8">
            <button id="submit" name="submit" type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>
</body>
</html>