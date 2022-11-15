<?php
require_once '../vendor/autoload.php';

$httpClient = new \Goutte\Client();
$response = $httpClient->request('GET', 'http://www.seleccionbaloncesto.es');

// colocamos los precios en un array
$alturas = [];
//dd($response->filter('table#_ctl1_plantillaListView_contenedor'));
$response->filter('table#_ctl1_plantillaListView_contenedor tr td:nth-child(2)')->each(
// le pasamos $precios por referencia para poder editarla dentro del closure
    function ($node) use (&$alturas) {
        $alturas[] = (float)str_replace(",",".",$node->text());
    }
);
$edats = [];
$response->filter('table#_ctl1_plantillaListView_contenedor tr td:nth-child(3)')->each(
// le pasamos $precios por referencia para poder editarla dentro del closure
    function ($node) use (&$edats) {
        $edats[] = (int)$node->text();
    }
);

echo "L'alçada mitja és: ".array_sum($alturas)/count($alturas)."<br/>";
echo "L'edat mitja és: ".array_sum($edats)/count($edats);


