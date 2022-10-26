<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    try {
        if (empty($_POST['nom'])) {
            throw new Exception("Nom es requerit");
        }
        if (empty($_POST['cognoms'])) {
            throw new Exception("Cognoms es requerit");
        }
        if (! filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            throw new Exception("Email no vàlid");
        }
        if (! isset($_POST['sexe'])) {
            throw new Exception("Sexe no vàlid");
        }
        $_SESSION = $_POST;
?>
<html>
<head></head>
    <body>
        <form method="post" action="409b.php">
            <div class="form-group row">
                <label for="url" class="col-4 col-form-label">Aficions</label>
                <div class="col-8">
                    <select class="form-select" name="aficions[]" multiple="true">
                        <option value="correr">Correr</option>
                        <option value="mtb">MTB</option>
                        <option value="triatlon">Triatlon</option>
                        <option value="sillonball">Sofa</option>
                    </select>
                </div>
            </div>

            <div class="form-group row">
                <label for="url" class="col-4 col-form-label">Menu</label>
                <div class="col-8">
                    <div class="input-group">
                        <div class="form-check">
                            <input type="checkbox" name="menus[]" value="bajoques" id="menu1">
                            <label class="form-check-label" for="menu1">
                                Bajoques Farcides
                            </label>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" name="menus[]" value="olleta" id="menu2">
                            <label class="form-check-label" for="menu2">
                                Olleta Alcoiana
                            </label>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" name="menus[]" value="pericana" id="menu3">
                            <label class="form-check-label" for="menu3">
                                Pericana
                            </label>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" name="menus[]" value="bollit" id="menu4">
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
    </body>
</html>
<?php
    } catch (Exception $e){
        echo $e->getMessage();
        echo ('<br/><a href="409.html">Volver</a>');
    }
}
?>

