<?php

echo "<h1> Ejercicio 5 </h1>";


/*Ejercicio 5: Sumatoria
Cree una función sumatoria que reciba un vector cómo parámetro, y devuelva la suma de todos sus
valores.
a) función sumatoria_a( $array ): Resuelva la solución utilizando la estructura de control for
b) función sumatoria_b( $array ): Resuelva la solución utilizando la estructura for each
c) función sumatoria_c( $array ): Resuelva la solución utilizando la estructura de control while*/



function sumatoria_a(&$array){
    $valor = 0;
    for($i = 0; $i < count($array); $i++){
        $valor += $array[$i];
    }
    return $valor;
}

function sumatoria_b(&$array){
    $valor = 0;
    foreach($array as $element){
        $valor += $element;
    }
    return $valor;
}

function sumatoria_c(&$array){
    $i = 0;
    $valor = 0;
    while ($i < count($array)){
        $valor += $array[$i];
        $i++;
    }
    return $valor;
}

$numeros = range(1, 9);
$resultado = sumatoria_c($numeros);

echo "<h2> Valor sumado es:" .$resultado.  " </h2>";