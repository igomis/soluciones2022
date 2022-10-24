<?php
if ($_SERVER['REQUEST_METHOD']=='POST'){
    try {
        if ($_FILES['img']['type']!= 'image/png') throw new Exception("fichero no es una imagen");
        if (is_uploaded_file($_FILES['img']['tmp_name'])) {
            // subido con éxito
            $nombre = $_FILES['img']['name'];
            move_uploaded_file($_FILES['img']['tmp_name'], "./uploads/{$nombre}");
            $witdh = $_POST['llargaria'];
            $heigth = $_POST['amplaria'];
            echo "<img src='/uploads/$nombre' width='$witdh' height='$heigth'>";
        }
    } catch (Exception $e){
        echo $e->getMessage();
    }

}
