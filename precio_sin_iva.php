<?php
function sin_iva($precio){
    $precio_sin_iva = ($precio*100)/122;
    return $precio_sin_iva;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
        <form action="" method="get">
            <input type="text" name="precio" placeholder="Ingresa el precio">
            <input type="submit" value="Calcular">
        </form>
        <br/>
        <hr>
        <?php
            // Si se hizo envío entonces calculamos
            if($_GET){
                /* para validar que sea número lo que ingresamos en precio
                podemos usar la función is_numeric($precio)
                */
                if(is_numeric($_GET['precio'])){
                $precio = $_GET['precio'];           
                echo round(sin_iva($precio),2); 
                }else echo "debes ingresar un número"; 
            }          
        ?>
             
    </center>
</body>
</html>