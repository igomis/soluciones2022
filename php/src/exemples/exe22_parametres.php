<?php
function obtenerCapital($pais = "todos") {
    $capitales = array("Italia" => "Roma",
        "Francia" => "Paris",
        "Portugal" => "Lisboa");

    if ($pais == "todos") {
        return array_values($capitales);
    } else {
        return $capitales[$pais];
    }
}

function saluda($nombre, $prefijo = "Sr") {
    echo "Hola ".$prefijo." ".$nombre;
}

print_r(obtenerCapital());
echo "<br/>";
echo obtenerCapital("Francia");



saluda("Aitor", "Mr");
saluda("Aitor");
saluda("Marina", "Srta");

