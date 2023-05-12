<?php

function divisores($n)
{
    $n = (int)$n;
    echo $n < 2 ? "{1" :"Conjunto de divisores D = { 1" ; 
    for ($i = 2; $i < ($n + 1); $i++) {
        if ($n % $i == 0) echo ", " . $i;
    }
    echo "}";
}
function es_primo($n)
{
    $n = (int)$n;
    if( $n == 1 ){
        echo "1 no es primo";
    }else{
        $contador = 1;
    for ($i = 2; $i < ($n + 1); $i++) {
        if ($n % $i == 0) $contador++;
    }
    echo $contador ==  2 ? "$n es primo." : "$n es compuesto.";
    echo $contador > 2 ? "<br> Tiene $contador divisores.":"";
    }
}