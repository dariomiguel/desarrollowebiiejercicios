<?php

echo "<h1> Ejercicio 4 </h1>";

/*
Ejercicio 4: Incrementar
Cree una función llamada incrementar, que reciba una variable y sin devolver nada como retorno de
la función, el valor del parámetro haya sido incrementado en 1
(Ver pasaje de parámetros por referencia)*/

function incrementar(&$valorAIncrementar){
    $valorAIncrementar ++;
}

$valor = 0;
incrementar($valor);

echo "<h2> Valor incrementado es:" .$valor.  " </h2>";

