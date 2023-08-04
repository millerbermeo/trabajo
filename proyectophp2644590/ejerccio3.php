<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="#" method="post">
        <input type="number" name="cateto1" id="cateto1" placeholder="cateto1">
        <input type="number" name="cateto2" id="cateto2" placeholder="cateto2">
        <button type="submit">Enviar</button>
    </form>

    <?php 
    
    $cate1 = floatVal($_POST['cateto1']);
    $cate2 = floatval($_POST['cateto2']);

    $h = sqrt(($cate1 * $cate1) + ($cate2 * $cate2));

    echo "la hipotenusa es".$h
    
    ?>
</body>
</html>