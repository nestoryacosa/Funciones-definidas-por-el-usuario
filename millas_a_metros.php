<?php

function millas_a_metros($millas)
{
    $millas = floatval($millas);
    return $millas * 1602;
       
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>millas a metros</title>
</head>

<body>
    <center>
        <form action="" method="get">
            <input type="text" name="millas" placeholder="introduce un valor en millas">
            <br>
            <input type="submit" value="Convertir">
        </form>
    </center>
</body>

</html>

<?php
if ($_GET) {
    $millas = $_GET['millas'];
    if(is_numeric($millas)) {        
        echo " $millas millas equivalen a " . millas_a_metros($millas) . " metros";     
    } else echo "introduce un valor numérico";
    
    
}
 
?>