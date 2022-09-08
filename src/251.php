<!DOCTYPE html>
<html lang="en">
<?php
    $usuaris = include_once('functions.php');
?>
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
<?php if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $vocals = vocals($_POST['frase']);
    $total = array_sum($vocals);
    foreach ($vocals as $vocal => $times){
        if ($times){
            echo "<p>Hi ha $times $vocal</p>";
        }
    }

    echo "<p>Hi ha $total vocals";
}
?>
<form method="post" action="251.php">
    <div class="form-group row">
        <label for="frase" class="col-4 col-form-label">Introdueix frase</label>
        <div class="col-8">
            <div class="input-group">
                <input id="frase" name="frase" placeholder="Frase" type="text" required="required" class="form-control">
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