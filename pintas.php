<?php
function litros_a_pintas($litros){
    $pintas = round($litros * 1.75975 , 1);
    // $pintas = number_format($litros* 1.75975 , 1);
    return $pintas;
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
            <input type="text" name="litros" placeholder="introduce un valor en litros">
            <br>
            <input type="submit" value="Convertir">
        </form>
    </center>
</body>

</html>

<?php
if ($_GET) {
    $litros = $_GET['litros'];
    if(is_numeric($litros)) {        
        echo " $litros litros equivalen a " . litros_a_pintas($litros) . " pintas";     
    } else echo "introduce un valor numérico";
    
    
}
 
?>