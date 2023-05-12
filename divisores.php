<?php

require("usr_functions.php");



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Divisores</title>
</head>

<body>
    <center>
        <h1>Conjunto de divisores</h1>
        <form action="" method="get">
            <input type="number" name="numero" min="1" placeholder="Introduce un número entero positivo">
            <br />
            <input type="submit" value="Mostrar">
        </form>
    </center>
    <br><hr>
    <center>
        <?php
        if($_GET){
            $n = $_GET['numero'];
            divisores($n);
        }
        ?>
    </center>
</body>

</html>