<!DOCTYPE html>
<html lang="en">
<?php
    extract($_POST);
?>
<head>
    <meta charset="UTF-8">
    <title>Mostar formulari amb quantiat caixes</title>
</head>
<body>
<?php
    if (isset($quantitat)){ ?>
        <form method="post" action="224.php">
            <?php for($i=0; $i<$quantitat; $i++){ ?>
                    <div class="form-group row">
                        <label for="nom" class="col-4 col-form-label">Nom</label>
                        <div class="col-8">
                            <div class="input-group">
                                <input id="nom" name="quantitat<?= $i ?>" placeholder="Escriu un nombre" type="text" required="required" class="form-control">
                            </div>
                        </div>
                    </div>
            <?php } ?>
            <div class="form-group row">
                <div class="offset-4 col-8">
                    <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>

    <?php } else {
        $suma = 0;
        foreach ($_POST as $value) {
            if (is_numeric($value)) {
                $suma += $value;
            }
        }
        echo '<p>'.$suma.'</p>'; }
    ?>
</body>
</html>