<?php
    function esParell($numero):bool{
        return $numero % 2 == 0;
    }
    function arrayAleatori($tam,$min, $max):array{
        $array = [];
        for ($i=0; $i<$tam; $i++){
            $array[$i] = rand($min, $max);
        }
        return $array;
    }
    function countParells(array &$ar):int{
        $cont = 0;
        foreach ($ar as $valor){
            if (esParell($valor)){
                $cont++;
            }
        }
        return $cont;
    }
    function major(int ...$numeros):int{
        $major = $numeros[0];
        foreach ($numeros as $numero){
            if ($numero > $major){
                $major = $numero;
            }
        }
        return $major;
    }
    function concatenar(string ...$strings):string{
        $concatenar = '';
        foreach ($strings as $string){
            $concatenar .= $string.' ';
        }
        return substr($concatenar,0,strlen($concatenar)-1);
    }

    function digits(int $numero):int{
        $digits = 1;
        while (abs($numero) > 9){
            $numero = $numero / 10;
            $digits++;
        }
        return $digits;
    }
    function digitsN(int $numero,int $pos):int{
        if ($pos > digits($numero)) {
          return false;
        } else {
            return substr($numero,$pos-1,1);
        }
    }
    function llevaDarrere(int $numero, int $cant): int{
        $quedan = digits($numero)-$cant;
        if ($quedan <= 0) {
            return false;
        } else {
            return substr($numero,0,$quedan);
        }
    }
    function llevaDavant(int $numero, int $cant): int{
        $quedan = $cant-digits($numero);
        if ($quedan >= 0) {
            return false;
        } else {
            return substr($numero,$quedan);
        }
    }
    function peseta2euros(int $pesetes):float {
       return  $pesetes /  166 ;
    }

    function euro2pesetes(float $euros):int {
        return $euros *  166;
    }

    function frasesImparelles(string $original):string {
        $final = '';
        for($i=1;$i<=strlen($original);$i++) {
            if (!esParell($i)) {
                $final .= $original[$i-1];
            }
        }
        return $final;
    }
    function vocals(string $cadena):array {
        $vocals = ['a'=>0,'e'=>0,'i'=>0,'o'=>0,'u'=>0];
        $filtre = strtolower(eliminar_tildes($cadena));
        foreach ($vocals as $vocal => $times){
            $vocals[$vocal] = substr_count($filtre,$vocal);
        }
        return $vocals;
    }

    function qLletres(string $cadena):int {
        return strlen(str_replace(" ","", $cadena));
    }

    function countWords(string $cadena):int {
        return count(explode(' ',$cadena));
    }

    function cani(string $cadena):string {
        $final = "";
        for($i=0;$i<strlen($cadena);$i++){
            $final .= esParell($i)?strtoupper($cadena[$i]):strtolower($cadena[$i]);
        }
        return $final;
    }

    function palindromo(string $cadena):bool {
        $cadenaTractada = strtolower(str_replace(" ","", $cadena));
        return (strrev($cadenaTractada) == $cadenaTractada) ? 1 : 0;
    }

    function codifica(string $cadena,int $desplaz):string {
        if ($desplaz > 7) return $cadena;
        $final = "";
        for($i=0;$i<strlen($cadena);$i++){
            $asci = ord($cadena[$i])+$desplaz;
            if (($asci > 122) || ($asci > 90 && $asci < 97)) $asci -= 26;
            $final .= chr($asci);
        }
        return $final;
    }

    function parells(array $numeros):array{
        $parells = [];
        foreach ($numeros as $numero){
            if (esParell((int) $numero)) {
                $parells[] = $numero;
            }
        }
        return $parells;
    }



    function eliminar_tildes($cadena){


        //Ahora reemplazamos las letras
        $cadena = str_replace(
            array('á', 'à', 'ä', 'â', 'ª', 'Á', 'À', 'Â', 'Ä'),
            array('a', 'a', 'a', 'a', 'a', 'A', 'A', 'A', 'A'),
            $cadena
        );

        $cadena = str_replace(
            array('é', 'è', 'ë', 'ê', 'É', 'È', 'Ê', 'Ë'),
            array('e', 'e', 'e', 'e', 'E', 'E', 'E', 'E'),
            $cadena );

        $cadena = str_replace(
            array('í', 'ì', 'ï', 'î', 'Í', 'Ì', 'Ï', 'Î'),
            array('i', 'i', 'i', 'i', 'I', 'I', 'I', 'I'),
            $cadena );

        $cadena = str_replace(
            array('ó', 'ò', 'ö', 'ô', 'Ó', 'Ò', 'Ö', 'Ô'),
            array('o', 'o', 'o', 'o', 'O', 'O', 'O', 'O'),
            $cadena );

        $cadena = str_replace(
            array('ú', 'ù', 'ü', 'û', 'Ú', 'Ù', 'Û', 'Ü'),
            array('u', 'u', 'u', 'u', 'U', 'U', 'U', 'U'),
            $cadena );

        $cadena = str_replace(
            array('ñ', 'Ñ', 'ç', 'Ç'),
            array('n', 'N', 'c', 'C'),
            $cadena
        );

        return $cadena;
    }

function vell(array $dates):mixed{
    $vell = "9999/12/31";
    foreach ($dates as $key => $dada){
        if (fecha_inglesa($dada) < $vell){
            $vell = fecha_inglesa($dada);
            $index = $key;
        }
    }
    return $index;
}

function fecha_inglesa($data){
    $arrFec = explode('.',$data);
    return $arrFec[2].'/'.$arrFec[1]."/".$arrFec[0];
}

function any($data){
    return substr($data,6,4);
}

function laureado(Array $clubs):mixed{
    $quants = array_count_values($clubs);
    asort($quants,);
    return array_key_last($quants);
}

function jove(Array $arr1,Array $arr2):Array{
    $index = -1;
    $edat = 99;
    foreach ($arr1 as $key => $value){
        if (any($arr2[$key])-$value < $edat){
            $index = $key;
            $edat = any($arr2[$key])-$value;
        }
    }
    return array($index,$edat);
}





function array_column_ext($array, $columnkey, $indexkey = null) {
    $result = array();
    foreach ($array as $subarray => $value) {
        if (array_key_exists($columnkey,$value)) { $val = $array[$subarray][$columnkey]; }
        else if ($columnkey === null) { $val = $value; }
        else { continue; }

        if ($indexkey === null) { $result[] = $val; }
        elseif ($indexkey == -1 || array_key_exists($indexkey,$value)) {
            $result[($indexkey == -1)?$subarray:$array[$subarray][$indexkey]] = $val;
        }
    }
    return $result;
}