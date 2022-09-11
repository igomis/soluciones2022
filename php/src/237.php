<!DOCTYPE html>
<html lang="en">
<?php
    extract($_POST);
?>
<head>
    <meta charset="UTF-8">
    <title>Mostar formulari amb quantiat persones</title>
</head>
<body>
<?php
    if (isset($quantitat)){ ?>
        <form method="post" action="237.php">
            <?php for($i=0; $i<$quantitat; $i++){ ?>
                    <div class="form-group row">
                        <label for="nom<?= $i ?>" class="col-4 col-form-label">Nom</label>
                        <div class="col-8">
                            <div class="input-group">
                                <input id="nom<?= $i ?>" name="nom<?= $i ?>" placeholder="Escriu un nombre" type="text" required="required" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="altura<?= $i ?>" class="col-4 col-form-label">Alçada</label>
                        <div class="col-8">
                            <div class="input-group">
                                <input id="altura<?= $i ?>" name="altura<?= $i ?>" placeholder="Escriu l'alçada" type="text" required="required" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="email<?= $i ?>" class="col-4 col-form-label">Email</label>
                        <div class="col-8">
                            <div class="input-group">
                                <input id=email<?= $i ?>" name="email<?= $i ?>" placeholder="Escriu l'email" type="text" required="required" class="form-control">
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
            echo '<table><thead><tr><th>Nom</th><th>Alçada</th><th>Email</th></tr></thead><tbody>';
            foreach ($_POST as $key => $value){
                if (strpos($key, 'altura') !== false){
                    $altura[] = $value;
                }
            }
            $max = max($altura);
            $min = min($altura);

            foreach ($_POST as $key => $value) {
                if (strpos($key, 'nom') !== false) {
                    echo '<tr><td>'.$value.'</td>';
                } elseif (strpos($key, 'altura') !== false) {
                    if ($value == $max) {
                        echo '<td style="background-color: aqua">'.$value.'</td>';
                    } elseif ($value == $min) {
                        echo '<td style="background-color: coral">'.$value.'</td>';
                    } else {
                        echo '<td>'.$value.'</td>';
                    }

                } elseif (strpos($key, 'email') !== false) {
                    echo '<td>'.$value.'</td></tr>';
                }
            }
            echo '</tbody></table>';
    }
    ?>
</body>
</html>