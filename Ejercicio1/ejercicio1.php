<?php

echo "<h1> Ejercicio 1 </h1>";

/*
Cree una función llamada Semaforo, que recibe por parametro un cólor cómo texto (“rojo”
“amarillo”,”verde”). Dicha función devolverá el estado que corresponde: “frene”, “precaución”,
“avance” o “estado desconocido” ante un caso no esperado.
a) función semaforo_a($color): Resuelva la solución utilizando if else
    b) función semaforo_b($color): Resuelva la solución utilizando if inline (return ?: )
c) función semaforo_c($color): Resuelva la solución utilizando switch*/

function semaforo_a($color){
    if($color == "rojo"){
        return "Frene";
    }else if($color == "amarillo"){
        return "Precaución";
    }else if($color == "verde"){
        return "Avance";
    }
}

function semaforo_b($color){
    $respuesta = $color == "rojo" ? "Frene" :
        ($color == "amarillo" ? "Precaución" :
            ($color == "verde" ? "Avance" : ""));

    return $respuesta;
}

function semaforo_c($color){
 switch($color){
    case "rojo":
        return "Frene";
        break;
    case "amarillo":
        return "Precaución";
        break;
    case "verde":
        return "Avance";
}

}


$colorSemaforo = "verde";
$respuestaSemaforo = semaforo_c($colorSemaforo);
echo "<h1>".$respuestaSemaforo."</h1>"; ;