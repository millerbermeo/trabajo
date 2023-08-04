<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<form action="#" method="post">
    <input type="numer" name="numerouno" id="numerouno" placeholder="nota 1" step="any">
    <input type="numer" name="numerodos" id="numerodos" placeholder="nota 2" step="any">
    <input type="numer" name="numerotres" id="numerotres" placeholder="nota 3" step="any">
    <button type="submit">Enviar</button>
</form>
<?php


if(isset($_POST['numerouno'])):
    $numero1 = floatVal($_POST['numerouno']);
endif;

if(isset($_POST['numerodos'])):
    $numero2 = floatVal($_POST['numerodos']);
endif;

if(isset($_POST['numerotres'])):
    $numero3 = floatVal($_POST['numerotres']);  
endif;





$resultado = ($numero1 + $numero2 + $numero3) / 3;


if($resultado < 3.5) {
    echo("Usted reprobo la materia");
} else if($resultado >= 3.5) {
    echo("Usted aprobo la materia");
}





?>
</body>
</html>
