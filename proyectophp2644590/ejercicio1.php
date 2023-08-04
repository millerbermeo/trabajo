<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<form action="#" method="post">
    <input type="numer" name="numero" id="numero" placeholder="">
    <button type="submit">Enviar</button>
</form>
<?php

$numero = $_POST['numero'];

if ($numero == 0) {
    echo "el numero ingresado es 0";;
} else if ($numero > 0) {
    echo "el numero ingresado postivo";
} else if ($numero < 0) {
    echo "el numero ingresado es negativo";
}




?>
</body>
</html>
