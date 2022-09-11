<!DOCTYPE html>
<html lang="en">
<?php
    extract($_GET);
?>
<head>
    <meta charset="UTF-8">
    <title>Mostar formulari compra</title>
</head>
<body>
<?php
        if (isset($quantitat) && is_numeric($quantitat) && $quantitat > 0) { ?>
            <form method="post" action="244b.php">
                <?php for($i=0; $i<$quantitat; $i++){ ?>
                        <div class="form-group row">
                            <label for="nom<?= $i ?>" class="col-4 col-form-label">Nom Producte</label>
                            <div class="col-8">
                                <div class="input-group">
                                    <input id="nom<?= $i ?>" name="nom<?= $i ?>" placeholder="Nom del producte" type="text" required="required" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="preu<?= $i ?>" class="col-4 col-form-label">Preu</label>
                            <div class="col-8">
                                <div class="input-group">
                                    <input id="preu<?= $i ?>" name="preu<?= $i ?>" placeholder="Preu del producte" type="text" required="required" class="form-control">
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
            echo 'Dades incorrectes';
        }
   ?>
</body>
</html>