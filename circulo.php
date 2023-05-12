<?php

function area($r){
    $a = pi() * $r * $r;
    $a = round($a,2); 
    return $a;
}

function perimetro($r){
    $p = 2.00 * pi() * $r;
    $p = round($p,2);
    return $p;
}

if(isset($_POST['enviar']) && is_numeric($_POST['radio'])){
    $radio = $_POST['radio'];
    $area = area($radio);
    $perimetro = perimetro($radio);
    echo "El area del círculo de radio $radio cm. es $area  cm<sup>2</sup>.";
    echo "<br> El perímetro del círculo de radio $radio cm. es $perimetro cm.";
} else echo "debes introducir un valor numérico para el radio";
?>